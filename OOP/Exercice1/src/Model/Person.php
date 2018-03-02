<?php

namespace Model;

class Person{
    
    private $id;
    protected $firstname;
    protected $lastname;
    protected $emails = [];
    
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
    
    
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @return multitype:
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @param multitype: $emails
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;
        return $this;
    }
    
}

$carlos = new Person();

$carlos->setFirstname('Gabriel');

$name = $carlos->getFirstname();

echo $name;