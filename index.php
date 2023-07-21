<?php

include './models/Movie.php';

include './models/Actor.php';

include './database/db.php';




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/3.3.4/vue.global.min.js' integrity='sha512-Wbf9QOX8TxnLykSrNGmAc5mDntbpyXjOw9zgnKql3DgQ7Iyr5TCSPWpvpwDuo+jikYoSNMD9tRRH854VfPpL9A==' crossorigin='anonymous'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>

<body class="bg-light">
    <div class="container">
        <ul class="mt-5 p-0">
            <?php foreach ($films as $film) : ?>
                <li class="card p-5 mb-5">
                    <h4 class="mb-4"><?= $film->title ?></h4>
                    <p>Genere: <?= $film->genre ?></p>
                    <p>Attori:
                    <ul>
                        <?php foreach ($film->actors as $actor) : ?>
                            <li>"<?= $actor ?>"</li>
                        <?php endforeach ?>
                    </ul>
                    </p>
                    <p>Anno: <?= $film->relase_date ?></p>
                    <p>E' uscito <?= $film->getYears() ?> anni fa</p>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</body>

</html>