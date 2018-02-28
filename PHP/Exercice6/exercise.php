<?php

function easterReverse(string $filePath){
    $resource = fopen($filePath,'r+');
    $fileContent = fread($resource, filesize($filePath));
    $initialPosition = floor(strlen($fileContent) / 2);

    fseek($resource, $initialPosition, SEEK_SET);
    
    $secondPart = fread($resource, filesize($filePath));
    $reversedText = strrev($secondPart);
    
    fseek($resource, $initialPosition, SEEK_SET);
    fwrite($resource, $reversedText);
    
    fclose($resource);
}