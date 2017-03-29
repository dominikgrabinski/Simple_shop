<?php

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
        if (is_numeric($cena)) {
            $this->cena = $cena;
        } else {
            echo "Podaj cenę w formacie 0.00";
        }
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
    public function loadProductByTitle(mysqli $connection, $tytul) {
        
        $q = "SELECT * From Products WHERE tytul = $tytul";
        $result = $connection->query($q);
        
        if ($result == TRUE && $result->num_rows !=0) {
            foreach ($result as $row) {
                $oProduct = new Products();
                $oProduct->cena = $row['cena'];
                $oProduct->dataPremiery = $row['data_premiery'];
                $oProduct->edycja = $row['edycja'];
                $oProduct->gatunek = $row['gatunek'];
                $oProduct->jezyk = $row['jezyk'];
                $oProduct->kategoriaWiekowa = $row['kategoria_wiekowa'];
                $oProduct->opis = $row['opis'];
                $oProduct->platforma = $row['platforma'];
                $oProduct->promocja = row['promocja'];
                $oProduct->tytul = $row['tytul'];
                $oProduct->wydawca = $row['wydawca'];
            }    
        }
        return null;    
    }
    
    
    
    
    
}



