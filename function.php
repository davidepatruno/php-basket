<?php

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
