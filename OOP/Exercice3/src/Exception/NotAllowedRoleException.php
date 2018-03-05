<?php
namespace Exception;

class NotAllowedRoleException extends \RuntimeException{
    
    protected $allowedRoleLabels = [];
    protected $unmatchingLabel;
    public function __construct(
        $allowedRoleLabels,
        $unmatchingLabel,
        $message = null, 
        $code = null, 
        $previous = null 
        )
    {
        $this->allowedRoleLabels = $allowedRoleLabels;
        $this->unmatchingLabel = $unmatchingLabel;
        
        parent::__construct($this->getNewMessage($message), $code, $previous);
    }
    
    
    public function getNewMessage($message) {
        return implode(',', $this->allowedRoleLabels) . $this->unmatchingLabel . "-" . $message;
    }
    
}

