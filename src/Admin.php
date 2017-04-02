<?php

require '../SRC/config.php';

class Admin {
    private $id;
    private $name;
    private $email;
    private $password;
    private $salt;
    
    public function __construct() {
        $this->id = -1;
        $this->name = "";
        $this->email = "";
        $this->password = "";
        $this->salt = "";
    }
    
    public function setId($newId) {
        return $this->id = $newId;
    }
    
    public function getId($id) {
        $this->id = $id;
    }
        
        
        
    
    
    
}

