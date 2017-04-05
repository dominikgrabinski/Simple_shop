<?php
//require 'Products.php';
class BasketItem extends Products {
    private $itemCount;
    
    protected function __construct(){
        parent::__construct();
        $this->itemCount = 0;
    }
        //szukanie po tytule, po konsoli
    public static function loadBasketItemById(mysqli $connection, $id, $itemCount=0) {
        
        $q = "SELECT * FROM Products WHERE id ='$id' ";
        $result = $connection->query($q);
        
        if ($result == TRUE && $result->num_rows != 0) {
            
                $row = $result->fetch_assoc();
                
                $oProduct = new BasketItem();
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
                $oProduct->itemCount = $itemCount;
                return $oProduct;

        }
        echo "Brak gry w naszym sklepie";
        return NULL;    
    }
    public function addItemCount(){
        $this->itemCount++;
    }
}

