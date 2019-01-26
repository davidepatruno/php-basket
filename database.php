<?php

include 'function.php';

$players = [];

for ($i = 0; $i < 10; $i++){
  $randomnum = rand(0,20);
  $perc_2shots = rand(0,90);
  $perc_3shots = (100 - $perc_2shots - $randomnum);
  $totshots = rand(1,150);
  $players[] = [
    'codice'=> randomcode(),
    'puntitotali'=> intval(((($perc_3shots / 100)* $totshots) *3)+((($perc_2shots / 100)* $totshots) *2)),
    'tiritotali'=> $totshots,
    '% tiri da 3'=> $perc_3shots,
    '% tiri da 2'=> $perc_2shots,
    'rimbalzi'=> rand(0,100),
    'falli'=> rand(0,50),
  ];
};

echo json_encode($players);

 ?>
