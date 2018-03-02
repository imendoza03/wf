<?php 

namespace Model;

class Role
{
    //Constants
    public static const ROLE_USER = 'ROLE_USER';
    public static const ROLE_ADMIN = 'ROLE_ADMIN';
    
    private $id;
    protected $label;
    
    
    public function __construct($label){
        $this->label = $label;
    }
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    
}