<?php

//One function to insert the data into a file
namespace Advanced1\FileDumper;

function fileDumper(array $formattedData){
    var_dump($formattedData);
    die;
    $path = __DIR__ .'data.csv';
    $text = implode(';', $formattedData);
    file_put_contents($path, $text);
    echo 'file created';
}