<?php
abstract class AbstractLighterFactory{
    protected $resources = [];
    
    protected function consumeResources($type, $value) {
        if(!isset($this->resources[$type])){
            $this->resources[$type] = 0;
        }
        
        $this->resources[$type] -= $value;
    }
    
    public function addResources($type, $value){
        if(!isset($this->resources[$type])){
            $this->resources[$type] = 0;
        }
        
        $this->resources[$type] += $value;
    }
    
    public function getResources(){
        return "Fuel: " . $this->resources['fuel'];
    }
    
    
    abstract public function buildLighter();
}


class ManualLigtherFactory extends AbstractLighterFactory{
    
    public function __construct($amount){
        $this->resources["fuel"] = $amount;
    }
    
    public function buildLighter()
    {
        if(isset($this->resources['fuel']) && $this->resources['fuel'] > 0){
            $this->consumeResources('fuel', 1);
            return "Manual Lighter";
        }
        
        return 'no fuel';
    }

}

// class decoratedManualLighterFactory extends ManualLigtherFactory{
    
//     public function buildLighter(){
//         if(isset($this->resources['fuel']) && $this->resources['fuel'] > 0){
//             $this->consumeResources('fuel', 1);
//             return "decorated lighter";
//         }
        
//         return 'no fuel';
//     }
// }


class decoratedManualLighterFactory extends ManualLigtherFactory{
    
    
    public function buildLighter(){
        return "Decorated" . parent::buildLighter();
    }
    
}

$manualLighter = new ManualLigtherFactory();
$manualLighter->addResources('fuel', 12);

$manualLighter->buildLighter();

echo $manualLighter->getResources();


$manualLighter = new decoratedManualLighterFactory();

echo $manualLighter->buildLighter();

