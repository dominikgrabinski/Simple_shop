<?php

require_once __DIR__ . '/../vendor/autoload.php';

class ProductsTest extends PHPUnit_Framework_TestCase {
    
    private $oProduct;
    
    protected function setUp() {
        parent::setUp();
        $this->oProduct = new Products();
    }
    
    protected function tearDown() {
        $this->oProduct = NULL;
        parent::tearDown();
    }
    
    public function test4AllSetsAndGets() {
        $this->oProduct->setCena(9.99);
        $this->assertEquals(9.99, $this->oProduct->getCena());
        
        $this->oProduct->setDataPremiery('2012-12-31');
        $this->assertEquals('2012-12-31', $this->oProduct->getDataPremiery());
        
        $this->oProduct->setEdycja('kolekcjonerska');
        $this->assertSame('kolekcjonerska', $this->oProduct->getEdycja());
        
        $this->oProduct->setGatunek('strzelanka');
        $this->assertSame('strzelanka', $this->oProduct->getGatunek());
        
        $this->oProduct->setJezyk('PL');
        $this->assertEquals('PL', $this->oProduct->getJezyk());
        
        $this->oProduct->setKategoriaWiekowa('18+');
        $this->assertSame('18+', $this->oProduct->getKategoriaWiekowa());
        
        $this->oProduct->setOpis('opis gry');
        $this->assertSame('opis gry', $this->oProduct->getOpis());
        
        $this->oProduct->setPlatforma('PS4');
        $this->assertEquals('PS4',$this->oProduct->getPlatforma());
        
        $this->oProduct->setPromocja('25% off');
        $this->assertEquals('25% off', $this->oProduct->getPromocja());
        
        $this->oProduct->setTytul('Diablo 3');
        $this->assertEquals('Diablo 3', $this->oProduct->getTytul());
        
        $this->oProduct->setWydawca('Blizzard');
        $this->assertEquals('Blizzard', $this->oProduct->getWydawca());
        
    }
    
//    public function testGetProductByTitle() {
//    
//        $this->oProduct->setTytul('WoW');
//        $this->assertTrue($this->oProduct->loadProductByTitle($connection, $this->oProduct->getTytul()));
//        
//    }
}

