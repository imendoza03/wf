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

function arrayDivide(array $values, int $divisor): array{
    
    try {
        $newValues = [];
        for ($i= 0; $i < count($values); $i++){
            $newValues[] = divide($values[$i], $divisor);
        }
        return $newValues;
    } catch (RuntimeException $e) {
        echo $e->getMessage();
        return $values;
    }
    
}

arrayDivide([2,4,6], 0);
