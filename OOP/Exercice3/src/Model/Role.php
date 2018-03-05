<?php
namespace Model;

use Exception\NotAllowedRoleException;

class Role 
{
    public const ROLE_USER = 'ROLE_USER';
    
    public const ROLE_ADMIN = 'ROLE_ADMIN';
    
    private $id;
    
    protected $label;
    
    protected $allowedRoleLabels = [self::ROLE_USER, self::ROLE_ADMIN];
    protected $unmatchingLabel = "ROLE_DUDE";
    
    public function __construct($label)
    {
        $this->setLabel($label);
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function setLabel($label)
    {
        if(!in_array($label, $this->allowedRoleLabels)){
            throw new NotAllowedRoleException($this->allowedRoleLabels, $this->unmatchingLabel, null, null, null);
        }
        $this->label = $label;
        return $this;
       
    }
}
