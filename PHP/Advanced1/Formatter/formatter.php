<?php

namespace Advanced1\Formatter;
//One function to format the data

function dataFormatter(array $newData): array{
    
    foreach ($newData as $key => $element){
        $newUpdatedDate = date('d-m-Y H:i:s', strtotime($element['updated']));
        $newEntryDate = date('d-m-Y H:i:s', strtotime($element['entry']));
        $newData[$key]['updated'] = $newUpdatedDate;
        $newData[$key]['entry'] = $newEntryDate;
    }
    
    return $newData;
}