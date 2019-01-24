<?php

function generatePlayers()
{
  $data = [];

  while(count($data) < 10){
    $codplayer = randomcode();
    // var_dump($codplayer);
    $totshots = rand(1,150);
    $rebounds = rand(0,100);
    $fauls = rand(0,50);

    $randomperc = rand(0,90);
    $randomnum = rand(0,20);

    $perc_2shots = $randomperc;
    // var_dump($totshots);
    // var_dump($perc_3shots);
    $perc_3shots = (100 - $perc_2shots - $randomnum);
    // var_dump($perc_2shots);
    $totscore = intval(((($perc_3shots / 100)* $totshots) *3)+((($perc_2shots / 100)* $totshots) *2));
    // var_dump($totscore);

    $player = [
      'code'=> $codplayer,
      'punti totali'=> $totscore,
      'tiri totali'=> $totshots,
      '% tiri da 3'=> $perc_3shots,
      '% tiri da 2'=> $perc_2shots,
      'rimbalzi'=> $rebounds,
      'falli'=> $fauls,
    ];
    $data[] = $player;
  };
return ($data);
};


function randomcode()
{
  $codice = [
    'lettere'=>[],
    'numeri'=>[],
    'totale'=>''
  ];

  while (count($codice['lettere']) < 3 && count($codice['numeri'] < 3)) {
    $letterandom = chr(rand(65 , 90));
    $numerandom = rand(0,9);
    if (!in_array($letterandom, $codice['lettere']) && !in_array($numerandom, $codice['numeri'])) {
      $codice['lettere'][] = $letterandom;
      $codice['numeri'][]= $numerandom;
    }
  }

  $codice['totale'] = implode(array_merge($codice['lettere'], $codice['numeri']));

return $codice['totale'];
}

?>
