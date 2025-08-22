<?php

$t = 0 ;

$tableau = array('Marc', 'Yves', 'Gisel');

foreach($tableau as $name){
    echo $name . ' votre numero de table est '. ($t+1)."<br/>" ;
    $t++;

}


echo 'La boucle DO WHILE' ."<br/>";
do {
    echo $name.' Votre note est ' .($t+1). "<br/>";
    $t++;


} while ($t <9);
