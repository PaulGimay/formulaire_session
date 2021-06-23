<?php
session_start();
// var_dump($_FILES);

$validOk = "";

if (isset($_FILES['file'])) {

    $tmpName = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];


    $tabExtension = explode('.', $name);
    $extension = strtolower(end($tabExtension));
    $extensions = ['jpg', 'png', 'jpeg', 'gif'];

    if ($_SESSION['formula'] = 'mouette') {
        $mouetteSize = 500000;
        if ($size >= $mouetteSize) {
            $validOk = "Fichier trop volumineux, capacité max comprise dans votre formule" . $_SESSION['formula'] . ": 20Mo.";
        }
    } else if ($_SESSION['formula'] = 'goeland') {
            $goelandSize = 1000000;
            if ($size >= $goelandSize) {
                $validOk = "Fichier trop volumineux, capacité max comprise dans votre formule" . $_SESSION['formula'] . ": 10Mo.";
            }
    } else if ($_SESSION['formula'] = 'mouette') {
            $albatrosSize = 2000000;
            if ($size >= $albatrosSize) {
                $validOk = "Fichier trop volumineux, capacité max comprise dans votre formule" . $_SESSION['formula'] . ": 5Mo.";
            }
    } 
    
    if ($error == 4) {
        $validOk = "Veuillez sélectionner un fichier";
    } elseif (!in_array($extension, $extensions)) {
        $validOk = "c'est pas le bon type de fichier";
    } elseif (in_array($extension, $extensions) 
    && $error == 0) {
        $uniqueName = uniqid('', true);
        $file = $uniqueName . "." . $extension;
        (move_uploaded_file($tmpName, 'assets/img/img' . $_SESSION['id'] . '/' . $file));
        $validOk = "Upload effectué";
    } else {
        $validOk = "Vous n'avez rien uploadé ";
    }

}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <div class="container-fluid">

        <h1 class="display-3 text-center mb-5">Téléchargez une nouvelle image</h1>

        <div class="row">
            <div class="col text-center">
                <div>
                    <img id="imgPreview" class="preview">
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col text-center">
                <form action="" method="POST" enctype="multipart/form-data">

                    <div><input class="mx-5 my-3" type="file" name="file" id="getImg"></div>
                    <div><input class="btn btn-primary" type="submit" name="submit" value="Envoyer"></div>
                    <div><?= htmlspecialchars($validOk) ?></div>
                </form>
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

<script>
    getImg.addEventListener("change", function() {
        let input = this;
        let oFReader = new FileReader(); // on créé un nouvel objet FileReader
        oFReader.readAsDataURL(this.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreview.setAttribute('src', oFREvent.target.result);
        };
    })
</script>

</html>