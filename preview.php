<?php
session_start();

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Preview</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <div class="container-fluid">

        <div class="row">

            <div class="col">
                <div class="text-center">
                    <img src="./assets/img/img<?= $_SESSION['id'] ?>/<?= $_GET['img'] ?>" alt="" class="preview">
                </div>
            </div>

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