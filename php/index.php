<?php

    require_once 'vars.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>php-ajax-dischi</title>
</head>
<body>

    <header>
        <img src="imgs/logo-small.svg" alt="logo">
    </header>

    <main>
        <div class="content">

            <?php foreach ($db as $cd): ?>

                <div class="card">
                    <div class="img">
                        <img src="<?=$cd['poster'];?>" alt="">
                    </div>
                    <div class="info">
                        <h4><?=$cd['title']?></h4>
                        <h5><?=$cd['author']?></h5>
                        <h6><?=$cd['year']?></h6>
                    </div>
                </div>

            <?php endforeach; ?>


        </div>
    </main>
</body>
</html>
