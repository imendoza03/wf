<?php

function getAllMondaysOfMonth(int $year, int $month) : array {
    $mondays = [];
    $givenMonth = (DateTime::createFromFormat('Yn', $year.$month))->format('F Y');
    $firstMonday = new DateTime('first monday of ' . $givenMonth);
    $lastMonday = new DateTime('last monday of ' . $givenMonth);
    
    $interval = DateInterval::createFromDateString('next monday');
    
//     while (!in_array($lastMonday->format('l j, M Y'), $mondays)){
    while ($firstMonday <= $lastMonday){
        $mondays[] = $firstMonday->format('l j, M Y');
        $firstMonday->add($interval);
    }
    
    return $mondays;    
}