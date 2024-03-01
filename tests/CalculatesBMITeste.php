<?php
require_once 'C:\Users\vitor\OneDrive\php\codewars\8-kyu\PHP\Calculates_BMI\index.php';

use PHPUnit\Framework\TestCase;

class CalculatesBMITeste extends TestCase
{
    public function testFixedTests() {
      $this->assertEquals("Underweight", bmi(50, 1.80));
      $this->assertEquals("Normal", bmi(81, 1.80));
      $this->assertEquals("Overweight", bmi(90, 1.80));
      $this->assertEquals("Obese", bmi(110, 1.80));
    }
  
    private function solution($weight, $height) {
      $bmi = $weight / $height ** 2;

      if ($bmi <= 18.5) {
        return "Underweight";
      } elseif ($bmi <= 25) {
        return "Normal";
      } elseif ($bmi <= 30) {
        return "Overweight";
      } else {
        return "Obese";
      } 
    }
  
    public function testRandomTests() {
      for ($i = 0; $i < 25; $i++) {
        $target = rand(15, 35);
        $height = rand(1.5, 2);
        $weight = $target * $height * $height;
        
        $this->assertEquals($this->solution($weight, $height), bmi($weight, $height), "Testing for weight = $weight, height = $height");
      }
    }
  
}