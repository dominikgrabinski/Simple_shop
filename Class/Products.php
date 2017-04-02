<?php

//wyszukiwanie wszystkich gier

require '../SRC/config.php';

class Products {
    
    private $id;
    private $tytul;
    private $platforma;
    private $gatunek;
    private $opis;
    private $cena;
    private $kategoriaWiekowa;
    private $wydawca;
    private $jezyk;
    private $dataPremiery;
    private $promocja;
    private $edycja;
    
    public function __construct() {
        $this->id = -1;
        $this->tytul = "";
        $this->platforma = "";
        $this->gatunek = "";
        $this->opis = "";
        $this->cena = "";
        $this->kategoriaWiekowa = "";
        $this->wydawca = "";
        $this->jezyk = "";
        $this->dataPremiery = "";
        $this->promocja = "";
        $this->edycja = "";
    } 
    
    public function getId() {
        return $this->id;
    }
    
    public function setTytul($tytul) {
        $this->tytul = $tytul;
    }
    
    public function getTytul() {
        return $this->tytul;
    }
    
    public function setPlatforma($platforma) {
        $this->platforma = $platforma;
    }
    
    public function getPlatforma() {
        return $this->platforma;
    }
    
    public function setGatunek($gatunek) {
        $this->gatunek = $gatunek;
    }
    
    public function getGatunek() {
        return $this->gatunek;
    }
    
    public function setOpis($opis) {
        $this->opis = $opis;
    }
    
    public function getOpis() {
        return $this->opis;
    }
    
    public function setCena($cena) {
        //if (is_numeric($cena)) {
            $this->cena = $cena;
        //} else {
        //    echo "Podaj cenę w formacie 0.00";
        //}
    }
    
    public function getCena() {
        return $this->cena;
    }
    
    public function setKategoriaWiekowa($kategoriaWiekowa) {
        $this->kategoriaWiekowa = $kategoriaWiekowa;
    }
    
    public function getKategoriaWiekowa() {
        return $this->kategoriaWiekowa;
    }
    
    public function setWydawca($wydawca) {
        $this->wydawca = $wydawca;
    }
    
    public function getWydawca() {
        return $this->wydawca;
    }
    
    public function setJezyk($jezyk) {
        $this->jezyk = $jezyk;
    }
    
    public function getJezyk() {
        return $this->jezyk;
    }
    
    public function setDataPremiery($dataPremiery) {
        //zrobić validacje daty
        $this->dataPremiery = $dataPremiery;
    }
    
    public function getDataPremiery() {
        return $this->dataPremiery;
    }

    public function setPromocja($promocja) {
        $this->promocja = $promocja;
    }

    public function getPromocja() {
        return $this->promocja;
    }
    
    public function setEdycja($edycja) {
        $this->edycja = $edycja;
    }
    
    public function getEdycja() {
        return $this->edycja;
    }
    
    //szukanie po tytule, po konsoli
    public static function loadProductByTitle(mysqli $connection, $tytul) {
        
        $q = "SELECT * FROM Products WHERE tytul = '$tytul' LIMIT 1";
        $result = $connection->query($q);
        
        if ($result == TRUE && $result->num_rows != 0) {
            
                $row = $result->fetch_assoc();
                
                $oProduct = new Products();
                $oProduct->cena = $row['cena'];
                $oProduct->id = $row['id'];
                $oProduct->dataPremiery = $row['data_premiery'];
                $oProduct->edycja = $row['edycja'];
                $oProduct->gatunek = $row['gatunek'];
                $oProduct->jezyk = $row['jezyk'];
                $oProduct->kategoriaWiekowa = $row['kategoria_wiekowa'];
                $oProduct->opis = $row['opis'];
                $oProduct->platforma = $row['platforma'];
                $oProduct->promocja = $row['promocja'];
                $oProduct->tytul = $row['tytul'];
                $oProduct->wydawca = $row['wydawca'];
                echo "ok";
                return $oProduct;

        }
        echo "Brak gry w naszym sklepie";
        return NULL;    
    }
    
    public function saveToDB (mysqli $connection) {
        if ($this->id == -1) {
            $q = "INSERT INTO Products(cena, data_premiery, edycja, gatunek, jezyk, kategoria_wiekowa, opis, platforma, promocja, tytul, wydawca) VALUES('$this->cena', '$this->dataPremiery', '$this->edycja', '$this->gatunek', '$this->jezyk', '$this->kategoriaWiekowa', '$this->opis', '$this->platforma', '$this->promocja', '$this->tytul', '$this->wydawca')";
        
            $result = $connection->query($q);
            
            if ($result == TRUE) {
                $this->id = $connection->insert_id;
                //echo "poszło";
            }
        } else {
            $q = "UPDATE Products SET cena = '$this->cena', data_premiery = '$this->dataPremiery', edycja = '$this->edycja', gatunek = '$this->gatunek', jezyk = '$this->jezyk', kategoria_wiekowa = '$this->kategoriaWiekowa', opis = '$this->opis', platforma = '$this->platforma', promocja = '$this->promocja', tytul = '$this->tytul', wydawca = '$this->wydawca' WHERE id = $this->id";
            
            $result = $connection->query($q);
            if ($result == TRUE) {
                return TRUE;
            }
        }
        //echo "NIE !!";
        return FALSE;
    }
    public static function loadProductsByPlatform(mysqli $connection, $platforma){
        $sql="SELECT * From Products Where platforma='$platforma'";
        $result = $connection->query($sql);
                
        if ($result == TRUE && $result->num_rows != 0) {
            
                $arr=[];
                while ($row = $result->fetch_assoc()){
                $oProduct = new Products();
                $oProduct->cena = $row['cena'];
                $oProduct->dataPremiery = $row['data_premiery'];
                $oProduct->edycja = $row['edycja'];
                $oProduct->gatunek = $row['gatunek'];
                $oProduct->jezyk = $row['jezyk'];
                $oProduct->kategoriaWiekowa = $row['kategoria_wiekowa'];
                $oProduct->opis = $row['opis'];
                $oProduct->platforma = $row['platforma'];
                $oProduct->promocja = $row['promocja'];
                $oProduct->tytul = $row['tytul'];
                $oProduct->wydawca = $row['wydawca'];
                $oProduct->id = $row['id'];
                $arr[] = $oProduct;
                }
                return $arr;

        }
        return NULL;    
    }
    
    
}

//$oPro = new Products();
//$oPro->setCena(199.99);
//$oPro->setDataPremiery('2012-12-30');
//$oPro->setEdycja('pudełkowa');
//$oPro->setGatunek('przygoda');
//$oPro->setJezyk('PL');
//$oPro->setKategoriaWiekowa('15+');
//$oPro->setOpis('świetna gra nie wiem o czym');
//$oPro->setPlatforma('PS4');
//$oPro->setPromocja('-25%');
//$oPro->setTytul('Tomb Raider');
//$oPro->setWydawca('chyba EA');
//
//$oPro->getId(1);
//var_dump($oPro);

//$oProdu
//var_dump($oPro->loadProductByTitle($connection, 'Tomb Raider'));
//var_dump($oPro);
//var_dump(Products::loadProductByTitle($connection, 'Tomb Raider'));



