<?php

require '../SRC/config.php';

class Magazine {
    private $id;
    private $productsId;
    private $ordersId;
    private $dostepnosc;
    private $liczbaWMagazynie;
    
    public function __construct() {
        $this->id = -1;
        $this->productsId = "";
        $this->ordersId = "";
        $this->dostepnosc = "";
        $this->liczbaWMagazynie = "";
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function setProductsId($productsId) {
        $this->productsId = $productsId;
    }
    
    public function getProductsId() {
        return $this->productsId;
    }
    
    public function setOrdersId($ordersId) {
        $this->ordersId = $ordersId;
    }
    
    public function getOrdersId() {
        return $this->ordersId;
    }
    
    public function setIloscWMagazynie($liczbaWMagazynie) {
        $this->liczbaWMagazynie = $liczbaWMagazynie;
    }
    
    public function getIloscWMagazynie() {
        return $this->liczbaWMagazynie;
    }
    
    public function setDostepnosc($dostepnosc) {
        $this->dostepnosc = $dostepnosc;
    }
    
    public function getDostepnosc() {
        return $this->dostepnosc;
    }
    
    public function saveToDB(mysqli $connection) {
        if ($this->id == -1) {
            $q = "INSERT INTO Magazine(dostepnosc, liczba_w_magazynie, Orders_id, Products_id) VALUES('$this->dostepnosc', '$this->liczbaWMagazynie', '$this->ordersId', '$this->productsId')";
            
            $result = $connection->query($q);
            
            if ($result == TRUE) {
                $this->id = $connection->insert_id;
            //    echo "Ta";
            }
        } else {
            $q = "UPDATE Magazine SET dostepnosc = '$this->dostepnosc', liczba_w_magazynie = '$this->liczbaWMagazynie', Orders_id = '$this->ordersId', Products_id = '$this->productsId'";
            
            $result = $connection->query($q);
            if ($result == TRUE) {
                return TRUE;
            }
        }
     //   echo "dupa";
        return FALSE;
    }
    
}

//$oMag = new Magazine();
//$oMag->setDostepnosc('TAK');
//$oMag->setIloscWMagazynie(100);
//$oMag->setOrdersId(1);
//$oMag->setProductsId(2);
//$oMag->saveToDB($connection);
//
//var_dump($oMag);


