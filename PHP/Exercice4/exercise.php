<?php
$allDays = [];


function getAllMondaysOfMonth($year, $month) {
    $format = 'D d, M Y';
    $date = DateTime::createFromFormat($format, $year);
    $allDays[] = $date;
    
    return $allDays;    
}

echo getAllMondaysOfMonth(2011, 12);