<?php

namespace Advanced1\Formatter;
//One function to format the data

function dataFormatter(array $allData){
    
    foreach ($allData as $key => $value){
        if($key == 'updated'){
            $newDate = date('d-m-Y H:i:s', strtotime($value));
            $allData[$key] = $newDate;
        }
        
    }
    
    return $allData;
}