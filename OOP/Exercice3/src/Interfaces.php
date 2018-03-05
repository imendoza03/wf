<?php

// I want an Interface that is a child of Countable and ArrayAccess

interface ArrayInterface extends Countable, ArrayAccess{
}

// I want a class implementing this interfaces

class ArrayElement implements ArrayInterface{
    
    private $internal = [];
    
    public function offsetGet($offset)
    {
        return $this->internal[$offset];
    }

    public function offsetExists($offset)
    {
        return isset($this->internal[$offset]);
    }

    public function offsetUnset($offset)
    {
        unset($this->internal[$offset]);
    }

    public function offsetSet($offset, $value)
    {
        $this->internal[$offset] = $value;
    }
    
    public function count()
    {
        return count($this->internal);
    }

}

$array = new ArrayElement();
$array->offsetSet(0,1);
$array->offsetSet(1,2);
echo count($array); //1