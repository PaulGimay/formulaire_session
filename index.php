<?php
session_start();

$profils = file_get_contents('assets/json/profils.json');
$decodedJson = json_decode($profils, true);
// $errorMessage = [];


// $json = file_POST_contents("assets/membres.json");
// $myJson = json_decode($json);
// // var_dump($myJson);
// $search = $_COOKIE['recherche'];




if (isset($_POST['submitBtn'])) {
    $emailInput = $_POST['email'];
    $passwordInput = $_POST['password'];

    foreach ($decodedJson["profils"] as $profil) {
        if (($profil['mail'] == $emailInput) && (password_verify($passwordInput, $profil['password']))) {
            
            $_SESSION['id'] = $profil['id'];
            $_SESSION['mail'] = $profil['mail'];
            $_SESSION['name'] = $profil['nom'];
            $_SESSION['firstname'] = $profil['prenom'];
            $_SESSION['formula'] = $profil['formule'];

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href="assets/style.css" rel="stylesheet">
    <title>INDEX</title>
</head>

<body>
    <div class="container-fluid">

        <h1 class="display-2 text-center my-4">Accédez à votre galerie d'images</h1>

        <div class="row test1">
            <div class="col test2">
                <form action="index.php" method="POST" class="formInput">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                        <input type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="errormsg"><?= isset($errorMessage) ? $errorMessage : "" ?></div>
                    
                    <button type="submit" class="btn btn-primary mt-3" name="submitBtn">Se connecter</button>

                    <!-- <?= ($errorMessage['login']) ?? "" ?> -->

                </form>

            </div>
        </div>

        <i class="camera bi bi-camera2"></i>


    </div>

   
</body>