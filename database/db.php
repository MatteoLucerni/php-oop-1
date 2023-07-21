<?php

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
