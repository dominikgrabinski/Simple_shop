<?php

require __DIR__ . '/../vendor/autoload.php';

class BasketTest extends PHPUnit_Framework_TestCase {
    
    private $oBasket;
    
    protected function setUp() {
        parent::setUp();
        $this->oBasket = new Basket();
    }
    
    protected function tearDown() {
        $this->oBasket = NULL;
        parent::tearDown();
    }
    
    public function testAddItem() {
        $arr = $this->oBasket->addItem('Diablo 3');
        $this->assertContains('Diablo 3', $arr);
        
        
        
    }
    
    
    
    
    
    
    
}

