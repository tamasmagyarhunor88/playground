<?php

require 'calculator.php';

class CalculatorTest extends PHPUnit_Framework_TestCase
{
  public function testAdd()
  {
    $c = New Calculator;
    $result = $c->add(5, 10);
    $this->assertEquals(15, $result);
  }
}
