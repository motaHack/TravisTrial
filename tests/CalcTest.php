<?php

use PHPUnit\Framework\TestCase;
use Sample\Calc;

class CalcTest extends TestCase
{
    public function testAdd()
    {
      $calc = new Calc();
      $this->assertEquals($calc->add(1,2),3);
    }

    public function testSub()
    {
      $calc = new Calc();
      $this->assertEquals($calc->sub(3, 2), 1);
     }
    
    public function testMulti()
    {
      $calc = new Calc();
      $this->assertEquals($calc->multi(3,2),6);
    }

    public function testDivision()
    {
      $calc = new Calc();
      $this->assertEquals($calc->division(6,2),3);
    }
    
    public function testEuler1()
    {
      $calc = new Calc();
      $this->assertEquals($calc->euler1(),233168);
    }
    
    public function testEuler2()
    {
      $calc = new Calc();
      $this->assertEquals($calc->euler2(),4613732);  
    }
}
?>
