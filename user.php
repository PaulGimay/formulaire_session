<?php
session_start();

if (isset($_SESSION['id'])) {
    if (isset($_POST['submitBtn'])) {
        session_destroy();
        header('Location: disconnect.php');
    }
} else {
    header('Location: disconnect.php');
}

// $_SESSION['color'] = 'green';


// $dir    = 'assets/img';
// $myFiles = scandir($dir, 1);

// var_dump($myFiles);

// $files = array_diff( scandir($dir), array(".", "..") );

// print_r($files);

// $scan = scandir($dir);
// foreach($scan as $file) {
//    if (!is_dir("$dir/$file")) {
//       echo $file.'\n';
//    }
// }

// print_r ($scan);









// if($dossier = opendir('assets/img'))
// {

//     print_r($dossier);
// };


// $dossierImgUser1 = 'assets/img/img1';
// $dossier = opendir($dossierImgUser1);

// while($fichier = readdir($dossier))
// {
// if($fichier != '.' && $fichier != '..')
// {
// echo $fichier.'<br />';
// }
// }
// closedir($dossier);


// $dossierImgUser2 = 'assets/img/img2';
// $dossier = opendir($dossierImgUser2);

// while($fichier = readdir($dossier))
// {
// if($fichier != '.' && $fichier != '..')
// {
// echo $fichier.'<br />';
// }
// }
// closedir($dossier);


// $dossierImgUser3 = 'assets/img/img3';
// $dossier = opendir($dossierImgUser3);

// while($fichier = readdir($dossier))
// {
// if($fichier != '.' && $fichier != '..')
// {
// echo $fichier.'<br />';
// }
// }
// closedir($dossier);


// $dossierImgUser4 = 'assets/img/img4';
// $dossier = opendir($dossierImgUser4);

// while($fichier = readdir($dossier))
// {
// if($fichier != '.' && $fichier != '..')
// {
// echo $fichier.'<br />';
// }
// }
// closedir($dossier);






// function scan($dir)
// {
//     for($i=0 ; $i <($dir) ; $i++)
//     {
//         $files1 = scandir($dir);
//         print_r($files1);


//     }
// };






?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/style.css">
    <title>USER</title>
</head>

<body>

    <div class="container-fluid">

        <!-- <h1 class="text-center mx-5">Vos informations</h1>

        <form action="index.php" method="POST">
        <div class="row">
            <div class="col">
                <div>
                    <p> Nom :  <?= $_SESSION['name'] ?> <br>
                        Prénom : <?= $_SESSION['firstname'] ?><br>
                        Mail : <?= $_SESSION['mail'] ?><br>
                        Formule :<?= $_SESSION['formula'] ?></p>
                </div>
           

                <button type="submit" class="btn btn-primary">Déconnexion</button>

            </div>
        </div>
    </div> -->

        <div class="container">
            <div class="header">
                <h2>Vos Informations</h2>
            </div>
            <form action="" class="form" id="form" method="POST">
                <div class="form-control success">
                    <label for="">Nom</label>
                    <input type="text" placeholder="<?= $_SESSION['name'] ?> " id=username disabled>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <div class="form-control success">
                    <label for="">Prénom</label>
                    <input type="text" placeholder="<?= $_SESSION['firstname'] ?>" id=email disabled>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <div class="form-control success">
                    <label for="">Adresse e-mail</label>
                    <input type="text" placeholder="<?= $_SESSION['mail'] ?>" id=password disabled>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <div class="form-control success">
                    <label for="">Formule</label>
                    <input type="text" placeholder="<?= $_SESSION['formula'] ?>" id=password2 disabled>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                </div>

                <button type="submit" name="submitBtn">Déconnexion</button>
            </form>
        </div>

        <div class="footer py-2 mb-3 fixed-bottom">

        <div class="row mx-5">

            <div class="col-4 text-center">
                <a href="gallery.php"><i class="bi bi-image-fill"></i></a>
            </div>

            <div class="col-4 text-center">
                <a href="user.php"><i class="bi bi-gear"></i></a>
            </div>

            <div class="col-4 text-center">
                <a href="upload.php"><i class="bi bi-plus-circle m-2"></i></a>
            </div>
        </div>
    </div>
    </div>

</body>

</html>