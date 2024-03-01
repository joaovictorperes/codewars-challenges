<?php
require_once 'C:\Users\vitor\OneDrive\php\codewars\8-kyu\PHP\String_repeat.php';

use PHPUnit\Framework\TestCase;

class RepeatStrTest extends TestCase
{
    public function testStaticOperations()
    {
      $this->assertSame("***", repeatStr(3, "*"));
      $this->assertSame("@@", repeatStr(2, "@"));
      $this->assertSame("!", repeatStr(1, "!"));
    }
    public function testRandomOperations()
    {
      for ($i = 0; $i < 100; $i++)
      {
        $str = "abcdefghijklmnopqrstuvwxyz";
        $sym = mt_rand(0, 25);
        $x = mt_rand(0, 10);
        $this->assertSame(str_repeat($str[$sym], $x), repeatStr($x, $str[$sym]));
      }
    }
}

?>