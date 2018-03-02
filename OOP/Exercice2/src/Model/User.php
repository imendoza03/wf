<?php
namespace Model;

class User
{
    private $id;
    protected $roles = [];
    protected $password;
    protected $salt;
    protected $username;
    
    public function addRole($role){
        $rolesp[] = $role;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getRoles()
    {
        $labels = [Role::ROLE_USER];
        foreach($this-roles as $role){
            $labels[] = $role->getLabel(); 
        }
        return $labels;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getSalt()
    {
        return $this->salt;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setRoles($roles)
    {
        foreach ($roles as $role){
            if(!in_array($role, $this->roles)) {
                $this->roles [] = $role;
            }
        }
        
        return $this;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function setSalt($salt)
    {
        $this->salt = $salt;
        return $this;
    }

    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    public function eraseCredentials()
    {
        $this->password = null;
        $this->salt = null;
    }
}

