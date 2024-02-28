<?php 
    //25/02/24
    echo 'Minha solução: '.print_r(countBy(1, 10))."\n\n";
    echo 'Outra proposta usando range: '.print_r(countBy_2(1, 10));

    function countBy($x, $n) {
        $multiples = [];

        for ($i = 1; $i <= $n; $i++) {
            $num = $x * $i;
            $multiples[] = $num;
        };

        return $multiples;
    }

    function countBy_2($x, $n) {
        return range($x, $x * $n, $x);
    }
?> 