<?php

require '../SRC/config.php';

class User {
    private $id;
    private $name;
    private $email;
    private $password;
    private $salt;
    private $firstLoginDate;
    private $lastLoginDate;
    

    public function __construct(){
        $this->id=-1;
        $this->name="";
        $this->email="";
        $this->password="";
        $this->salt="";
        $this->firstLoginDate="";
        $this->lastLoginDate="";
    }
     public function setId($newId) {
	return $this->id = $newId;     
	}
    
    public function getId() {
	return $this->id;
	}
            
    public function getName() {
	return $this->name;
	}

    public function setName($newName) {
	return $this->name = $newName;     
	}
        
    public function getEmail(){
        return $this->email;
    }
       
    public function setEmail($newEmail){
        return $this->email = $newEmail;
    }
        
    public function getPassword() {
        return $this->hashedPassword;
    }
    
    public function setPassword($newPassword) {
        if(empty($this->salt)){
            throw new Exception("SALT IS EMPTY!", 1);
        }
        $this->password = hash('sha256',$newPassword.$this->salt);
        return $this->password;
    }
        
    public function getSalt(){
        return $this->salt;
    }
    
    public function setSalt($newSalt){
        return $this->salt=$newSalt;
    }
    public static function generateRandomSalt(){
        return hash('sha256',rand());
    }
    public function getFirstLoginDate(){
        return $this->firstLoginDate;
    }
    
    public function setFirstLoginDate(){
        $this->firstLoginDate=date('Y-m-d H:i:s');
        return $this;
    }
    
    public function getLastLoginDate(){
        return $this->lastLoginDate;
    }
    
    public function setLastLoginDate(){
        $this->lastLoginDate=date('Y-m-d H:i:s');
        return $this;
    }
    
    public function saveToDB(mysqli $connection) {
		if($this->id == -1)
    {
	     $sql = "INSERT INTO Users(name, email, password, salt, first_login_date, last_login_date) VALUES "
             . "('$this->name', '$this->email', '$this->password', '$this->salt', "
             . "'$this->firstLoginDate','$this->lastLoginDate')";
       $result = $connection->query($sql);
       
		    if($result == true)
        {
          $this->id = $connection->insert_id;
          return true;
        }
    }
    else
    {
      if(empty($this->lastLoginDate)){
          return false;
      }
      $sql = "UPDATE Users SET last_login_date ='$this->lastLoginDate' WHERE id=$this->id";

      $result = $connection->query($sql); if($result == true)
      {
        return true;
      }
    }
      return false;
  }
    
    
    
}

//$oUser = new User();
//$oUser->setName('Janusz');
//$oUser->setEmail('Janusz@janusz.pl');
//$oUser->setPassword('Janusz');
//$oUser->setSalt('xxx');
//$oUser->setFirstLoginDate();
//$oUser->setLastLoginDate();
//
//$oUser->savetoDB($connection);
//
//var_dump($oUser);
//var_dump($connection);