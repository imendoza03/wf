<?php

spl_autoload_register(function($namespace){
    $fileName = sprintf("%s\%s.php", __DIR__, str_replace("//", DIRECTORY_SEPARATOR , $namespace));
//     var_dump($fileName);
    if(is_file($fileName)){
        require_once $fileName;
    }
});
