<?php
    // 25/02/24

    /*DESCRIPTION:
        Your task is to make two functions ( max and min, or maximum and minimum, etc., depending on the language ) that receive a list of integers as input, and return the largest and lowest number in that list, respectively.

        Examples (Input -> Output)
        * [4,6,2,1,9,63,-134,566]         -> max = 566, min = -134
        * [-52, 56, 30, 29, -54, 0, -110] -> min = -110, max = 56
        * [42, 54, 65, 87, 0]             -> min = 0, max = 87
        * [5]                             -> min = 5, max = 5
    */

    //Minha resoução
    echo 'Valor máximo: '.maximum([4,6,2,1,9,63,-134,566]).' ';
    echo 'Valor mínimo: '.minimum([4,6,2,1,9,63,-134,566])."\n\n";

    function maximum($array) {
        $max_number = $array[0];
        
        foreach($array as $number) {
            if ($number > $max_number) {
                $max_number = $number;
            }
        }
        
        return $max_number;
    }

    function minimum($array) {
        $min_number = $array[0];
        
        foreach($array as $number) {
            if ($number < $min_number) {
                $min_number = $number;
            }
        }
        
        return $min_number;
    }

    // Resolução mais votada:
    echo 'Valor máximo: '.maximum_2([4,6,2,1,9,63,-134,566]).' ';
    echo 'Valor mínimo: '.minimum_2([4,6,2,1,9,63,-134,566]);

    function maximum_2($array) {
        return max($array);
    }
    
    function minimum_2($array) {
        return min($array);
    }

    /*Testes

    class MaxMinTest extends TestCase {
        public function testThatFunctionsWorkForExamples() {
          $this->assertSame(5, maximum(array(1, 2, 3, 4, 5)));
          $this->assertSame(1, minimum(array(1, 2, 3, 4, 5)));
        }
        public function testThatFunctionWorksForFixedTests() {
          $this->assertSame(99, maximum(array(10, 5, 2, 99, 70, -110, -999)));
          $this->assertSame(-999, minimum(array(10, 5, 2, 99, 70, -110, -999)));
          $this->assertSame(1024, maximum(array(22, -22, 98, -98, 1024, -1024, -7, 7)));
          $this->assertSame(-1024, minimum(array(22, -22, 98, -98, 1024, -1024, -7, 7)));
          $this->assertSame(100, maximum(array(64, 9, 4, 16, 100, 1, 25, 49, 36, 81)));
          $this->assertSame(1, minimum(array(64, 9, 4, 16, 100, 1, 25, 49, 36, 81)));
        }
        protected function randomNumber() {
          return ~~(101 * lcg_value());
        }
        public function testThatFunctionsWorkForRandomTests() {
          for ($i = 0; $i < 100; $i++) {
            $rand_arr = array($this->randomNumber(), $this->randomNumber(),    $this->randomNumber(), $this->randomNumber(), $this->randomNumber(), $this->randomNumber(), $this->randomNumber(), $this->randomNumber(), $this->randomNumber(), $this->randomNumber());
            $this->assertSame(max($rand_arr), maximum($rand_arr));
            $this->assertSame(min($rand_arr), minimum($rand_arr));
          }
        }
      }
    */
?>

