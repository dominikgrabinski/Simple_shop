<?php

require_once __DIR__ . '/../vendor/autoload.php';


class UsersTest extends PHPUnit_Framework_TestCase {
    
    private $oUser;
    
    protected function setUp() {
        parent::setUp();
        $this->oUser = new User();
    }
    
    protected function tearDown() {
        $this->oUser = NULL;
        parent::tearDown();
    }
    
    public function test4AllSetAndGets() {
        
        $this->oUser->setName('yyy');
        $this->assertEquals('yyy', $this->oUser->getName());
        
        $this->oUser->setEmail('yyy@yyy.pl');
        $this->assertEquals('yyy@yyy.pl', $this->oUser->getEmail());
        
        $this->oUser->setId(5);
        $this->assertEquals(5, $this->oUser->getId());
//        
//        $date = $this->oUser->setLastLoginDate();
//        $this->assertSame($date, $this->oUser->getLastLoginDate());
    }
    
//    public function testSaveToDb() {
//        $connection = require '../SRC/config.php';
//        $check = $this->oUser->saveToDB($connection);
//        $this->assertTrue($check);
//    }
    
}

