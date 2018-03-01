<?php

namespace Advanced1\Loader;
//One function to download the data
function downloadData(){
    $url = 'https://api.apis.guru/v2/list.json';
    $obj = json_decode(file_get_contents($url), true);
    $allData = [];
    $newData = [];
    
    foreach ($obj as $data) {
//         var_dump($data);
//         die;
        $info = $data['versions'][$data['preferred']]['info'];
        
        if (isset($info['description'])){
            $description = $info['description'];
        }
        
        if (isset($info["title"])){
            $title = $info['title'];
        }
        
        $name = $data['preferred'];
        $entry = $data['versions'][$data['preferred']]['added'];
        $updated = $data['versions'][$data['preferred']]['updated'];
        
        $allData["title"]= $title;
        $allData["description"]= $description;
        $allData["name"]= $name;
        $allData["entry"]= $entry;
        $allData["updated"]= $updated;
        
        $newData[] = $allData;
    }
    
//     var_dump($newData);
//     die;

    return $newData;
}

