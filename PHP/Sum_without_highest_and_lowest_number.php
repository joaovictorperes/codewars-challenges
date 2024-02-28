<?php
    /*Description
        Task
        Sum all the numbers of a given array ( cq. list ), except the highest and the lowest element ( by value, not by index! ).
        
        The highest or lowest element respectively is a single element at each edge, even if there are more than one with the same value.
        
        Mind the input validation.
        
        Example
        { 6, 2, 1, 8, 10 } => 16
        { 1, 1, 11, 2, 3 } => 6
        Input validation
        If an empty value ( null, None, Nothing etc. ) is given instead of an array, or the given array is an empty list or a list with only 1 element, return 0.
    */

    /*Testes
        class MyTest extends TestCase
        {

            public function testExample() {
                $this->assertSame(16, sumArray([6, 2, 1, 8, 10]));
            }

            /**
             * @dataProvider realTestsProvider
             */
            public function testRealTests($expected, $array) {
                $this->assertSame($expected, sumArray($array));
            }
            
            public function realTestsProvider()
            {
                return [
                    [17, [6, 0, 1, 10, 10]],
                    [-28, [-6, -20, -1, -10, -12]],
                    [3, [-6, 20, -1, 10, -12]],
                ];
            }
            
            /**
             * @dataProvider randomDataProvider
             */
            public function testRandomTests($expected, $array) {
                $this->assertSame($expected, sumArray($array));
            }
            
            public function randomDataProvider()
            {
                $data = [];
                for ($i = 0; $i < 10; $i++) {
                    $array = [];
                    for ($j = 0; $j < 10; $j++) {
                        $array[] = rand(0, 1000);
                    }
                    $expected = $array;
                    sort($expected);
                    array_pop($expected);
                    array_shift($expected);
                    $expected = array_sum($expected);
                    $data[] = [$expected, $array];
                }
                return $data;
            }
        }
    */

    // 27/02/24
    echo  'Minha solução: '.sumArray([1, 2, 3, 5]);

    // Minha solução
    function sumArray($array) {
        $sum_array = count($array) > 1 ? array_sum($array) - (max($array) + min($array)) : 0;

        return $sum_array;
    }
?>