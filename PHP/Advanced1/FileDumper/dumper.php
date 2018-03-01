<?php

//One function to insert the data into a file
namespace Advanced1\FileDumper;

function fileDumper(array $formattedData){

    $path = __DIR__ .'data.csv';
    $resource = fopen($path, 'w+');

    foreach ($formattedData as $data) {
        fputcsv($resource, $data);
    }
    
    echo 'file created';
}