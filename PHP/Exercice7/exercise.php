<?php
declare(strict_types = 1);

function divide(int $number, int $divisor): int{

    if ($divisor !== 0) {
        return $number/$divisor;
    } else{
        throw new RuntimeException('Division by 0 is not allowed');
    }
    
}

function arrayDivide(array $values, int $divisor):array{
    $results = [];
    
    foreach ($values as $value){
        try {
            $results[] = divide($value, $divisor);
        } catch (RuntimeException $e) {
            $results[] = $value;
        }
    }
    
    return $results;
    
//     try {
//         $newValues = [];
//         for ($i= 0; $i < count($values); $i++){
//             $newValues[] = divide($values[$i], $divisor);
//         }
//         return $newValues;
//     } catch (RuntimeException $e) {
//         echo $e->getMessage();
//         return $values;
//     }
    
}
