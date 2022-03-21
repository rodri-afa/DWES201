<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <style>
        .card {
            background-color: white;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.3);
            padding: 12px;

        }
    </style>
</head>

<body>
    <?php include('./1-conexion.php') ?>

    <h1>Peliculas</h1>

    <div class="row">
        <?php

        foreach ($peliculas as $peli) {
        ?>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card mb-4">
                    <h2><?php echo $peli['titulo'] ?></h2>
                    <span><?php echo $peli['año'] ?></span> <span><?php echo $peli['director'] ?></span>
                    <p><?php echo $peli['sinopsis'] ?></p>
                </div>
            </div>

        <?php
        }
        ?>
    </div>


</body>

</html>