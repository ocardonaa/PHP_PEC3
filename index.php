<?php


require 'Videogame.php';
require 'bootstrap.php';


$rand_id = rand(1,10);
$random_videogame = $query->singleVideogame($rand_id, 'videogames_pec3', 'Videogame')[0];

require 'random-videogame.php';

?>
