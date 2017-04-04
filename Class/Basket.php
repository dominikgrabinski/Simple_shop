<?php

require 'BasketItem.php';
class Basket {
    
    private $items;
    
    public function __construct(){
        $this->items = array();
    }
    
    public function addItem(BasketItem $item){
        if($this->isItemExist($item))
            throw new Exception("This item EXIST", 1);
        
        $this->items[] = $item;
        return true;
    }
    public function addOneItemCount(BasketItem $item){
        foreach($this->items as $object){
            if($object->getId() == $item->getId()){
                $object->addItemCount();
            }
         }
        return false;
    }
    public function isItemExist(BasketItem $item){
        foreach($this->items as $object){
            if($object->getId() == $item->getId()){
                return true;
            }
        }
        return false;
    }
    public function serializeBasket(){
        return serialize($this);
    }
    public static function loadBasketFromString($string){
        return unserialize($string);
    }
    public static function loadBasketFromSession(){
        if(empty($_SESSION['basket']))
            return NULL;
        
        return unserialize($_SESSION['basket']);
    }
    public function saveBasketToSession(){
        $_SESSION['basket'] = serialize($this);
    }
    
    
}