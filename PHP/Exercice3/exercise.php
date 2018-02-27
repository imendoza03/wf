<?php

$input;
$winner;
$aResult= 0;
$bResult = 0;

foreach ($input as $deck) {
    list($player1, $player2) = $deck;
//     $player1 = $deck[0];
//     $player2 = $deck[1];
    
    if($player1 > $player2) {
        $aResult++;
    }elseif($player2 > $player1){
        $bResult++;
    }
}

echo "points of A: " . $aResult;
echo "points of B: " . $bResult;

if($aResult > $bResult){
    $winner = 'A';
} else {
    $winner = 'B';
}



