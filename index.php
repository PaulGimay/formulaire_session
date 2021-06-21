<?php 

$profils = file_get_contents('assets/json/profils.json');
$decodedJson = json_decode($profils, true);
// $errorMessage = [];


// $json = file_get_contents("assets/membres.json");
// $myJson = json_decode($json);
// // var_dump($myJson);
// $search = $_COOKIE['recherche'];





if (isset ($_POST['submitBtn'])) {
    $emailInput = $_POST['email'];
    $passwordInput = $_POST['password'];
    
    foreach($decodedJson["profils"] as $profil){
        if(($profil['mail'] == $emailInput) && (password_verify($passwordInput, $profil['password']))){
             header('Location: gallery.php');
             exit;

        } else {

            $errorMessage = 'Mauvais login ou mot de passe';
            // $errorMessage['login'] = 'Mauvais login ou mot de passe';
            
        }
    }
}

?>






<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>INDEX</title>
</head>

<body>
    <div class="container-fluid">

    <h1 class="display-1 text-center my-4">INDEX</h1>
        <div class="row">
            <div class="col">
                <form action="index.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submitBtn">Submit</button>
                    <p><?= isset($errorMessage) ? $errorMessage : "" ?></p>
                    <p><?= isset($errorMessage) ? $errorMessage : "" ?></p>

                    <!-- <p><?= ($errorMessage['login']) ?? "" ?></p> -->

                </form>
            </div>
        </div>
    </div>

    <!-- <i class="bi bi-house-door"></i> -->
    <!-- <i class="bi bi-gear"></i> -->
    <!-- <i class="bi bi-plus"></i> -->

</body>