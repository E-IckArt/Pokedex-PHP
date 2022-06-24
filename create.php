<?php
require_once('models/PokemonManager.php');
require_once('controllers/getAll.php');
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex - Créer un Pokemon</title>
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="d-flex flex-column min-vh-100 bg-light" style="background: url(https://www.media.pokekalos.fr/img/jeux/pokemongo/fonds/23.png)
    no-repeat center; background-size: cover;">

    <?php include_once './components/header.php' ?>
    <main class="container">
        <div class="row">
            <div class="col-10 col-lg-8 col-xl-6 my-5 mx-auto">
                <?php require_once 'views/create.php' ?>
            </div>
        </div>
    </main>
    <?php include_once './components/footer.php' ?>
    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>