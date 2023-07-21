<?php
class Movie
{
    public $title;
    public $relase_date;
    public $genre;
    public $actors;

    public function __construct(
        $title,
        $relase_date,
        $genre,
        $actors
    ) {
        $this->title = $title;
        $this->relase_date = $relase_date;
        $this->genre = $genre;
        $this->actors = $actors;
    }

    public function getYears()
    {
        $current_date = date("Y");
        $year = $current_date - $this->relase_date;
        return $year;
    }
}

class Actor
{
    public $first_name;
    public $last_name;
    public $age;

    public function __construct(
        $first_name,
        $last_name,
        $age,

    ) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    public function getFullName()
    {
        return "$this->first_name $this->last_name";
    }
}

// attori imitation game
$actor1 = new Actor('Benedict', 'Cumberbatch', 33);
$actor2 = new Actor('Jimm', 'Logan', 40);
// attori interstellar
$actor3 = new Actor('Matthew', 'McConaughey', 50);
$actor4 = new Actor('Maria', 'Ginni', 27);

$imitation_game_actors = [
    $main_actor = $actor1->getFullName() . ' che ha ' . $actor1->age . ' anni',
    $secondary_actor = $actor2->getFullName() . ' che ha ' . $actor2->age . ' anni'
];

$interstellar_actors = [
    $main_actor = $actor3->getFullName() . ' che ha ' . $actor3->age . ' anni',
    $secondary_actor = $actor4->getFullName() . ' che ha ' . $actor4->age . ' anni'
];

$films = [
    $imitation_game = new Movie('The Imitation Game', 2014, 'Drammatico', $imitation_game_actors),
    $interstellar = new Movie('Interstellar', 2016, 'Fantascienza', $interstellar_actors)
];

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
                        <?php foreach ($film->actors as $actor) : ?>
                            <span>"<?= $actor ?>"</span>
                        <?php endforeach ?>
                    </p>
                    <p>Anno: <?= $film->relase_date ?></p>
                    <p>E' uscito <?= $film->getYears() ?> anni fa</p>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</body>

</html>