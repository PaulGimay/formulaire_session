<?php
session_start();

if (isset($_SESSION['id'])) {
    $profils = file_get_contents('assets/json/profils.json');
    $decodedJson = json_decode($profils, true);
    
    $dir    = 'assets/img/img' . $_SESSION['id'];
    $myFiles = scandir($dir);
} else {
    header('Location: disconnect.php');
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
    <link href="assets/style.css" rel="stylesheet"><title>gallery</title>
</head>

<body>

    <div class="container-fluid">

        <div class="mt-4 mb-5 text-center">
            <h1 class="display-3">Bonjour <?= $_SESSION['firstname'] ?>,</h1>
            <h2 class="display-5">Voici votre galerie.</h2>
            <h3>Cliquer sur <a href="upload.php"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="white" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg></a> pour ajouter une image.</h3>
        </div>

        <div class="row" data-masonry='{"percentPosition": true }'>

            <?php foreach ($myFiles as $key => $value) { 
                if ($key > 1) { ?> 
                <div class="col-sm-5 col-lg-2 mb-4">
                    <div class="card">
                  
                        <div class="card-body">
                        <a href="preview.php?img=<?= $value ?>"><img width="100%" src="assets/img/img<?= $_SESSION['id'] ?>/<?= $value ?>" alt="" ></a>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>
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

<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
<script>



</script>

</html>