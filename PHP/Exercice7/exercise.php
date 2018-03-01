<?php
declare(strict_types = 1);
function divide(int $number, int $divisor) : int{
    if ($divisor !== 0) {
        $result = $number/$divisor;
        return $result; 
    } else{
        throw new RuntimeException('Division by 0 is not allowed');
    }
    
}

function arrayDivide(array $values, int $divisor):array{
    
    try {
        for ($i= 0; $i < count($values); $i++){
            $result = divide($values[$i], $divisor);
            return $result;
        }
        
        
    } catch (RuntimeException $e) {
        echo 'jaja';
        return $values;
    }
    
//     var_dump($result);
    
}

try {
    divide(2,0);
} catch (RuntimeException $e) {
    echo $e->getMessage();
}

arrayDivide([1,2,3], 0);