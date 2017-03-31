<?php

require '../SRC/config.php';

class Status {
    private $id;
    private $statusName;
    
    public function __construct() {
        $this->id = -1;
        $this->statusName = "";
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getStatusName() {
        return $this->statusName;
        
    }
}


