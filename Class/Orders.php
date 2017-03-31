<?php

require '../SRC/config.php';

class Orders {
    private $id;
    private $userId;
    private $statusId;
    private $adresZamownienia;
    private $sumaDoZaplaty;
    
    public function __construct() {
        $this->id = -1;
        $this->adresZamownienia = "";
        $this->statusId = "";
        $this->sumaDoZaplaty = "";
        $this->userId = "";
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function setAdresZamowienia($adresZamowienia) {
        $this->adresZamownienia = $adresZamowienia;
    }
    
    public function getAdresZamowiena() {
        return $this->adresZamownienia;
    }
    
    public function setStatusId($statusId) {
        $this->statusId = $statusId;
    }
    
    public function getStatusId() {
        return $this->statusId;
    }
    
    public function setSumaDoZaplaty($sumaDoZaplaty) {
        $this->sumaDoZaplaty = $sumaDoZaplaty; 
    }
    
    public function getSumaDoZaplaty() {
        return $this->sumaDoZaplaty;
    }
    
    public function setUserId($userId) {
        $this->userId = $userId;
    }
    
    public function getUserId() {
        return $this->userId;
    }
    
    public function saveToDB(mysqli $connection) {
        $q = "INSERT INTO Orders(adres_zamowienia, Status_id, suma_do_zaplaty, User_id) VALUES('$this->adresZamownienia', '$this->statusId', '$this->sumaDoZaplaty', '$this->userId')";
        $result = $connection->query($q);
        
        if ($result == TRUE) {
            $this->id = $connection->insert_id;
            
        } else {
            $q = "UPDATE Orders SET adres_zamowienia = '$this->adresZamownienia', Status_id = '$this->statusId', suma_do_zaplaty = '$this->sumaDoZaplaty', User_id = '$this->userId'";
            
            $result = $connection->query($q);
            if($result == TRUE) {
                return TRUE;
            }
            
        }
        
        return FALSE;
    }
   
}

//$oOrd = new Orders();
//$oOrd->setStatusId(3);
//$oOrd->setUserId(14);
//$oOrd->setAdresZamowienia('ul. Kubusia Puchatka 666/69 00-999 Wa-wa');
//$oOrd->setSumaDoZaplaty(599.99);
//$oOrd->saveToDB($connection);
//var_dump($oOrd);

