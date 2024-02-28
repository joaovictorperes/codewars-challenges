<?php
    // 25/02/24
    echo 'Minha solução: '.positive_sum(([-1, 2, 3, 4, -5]))."\n\n";
    echo 'Outra proposta usando array_filter e array_sum: '.positive_sum_2(([-1, 2, 3, 4, -5]));

    // Minha resolução:
    function positive_sum($arr) {
        $positive_values = 0;
        
        if (!empty($arr)) {
            foreach($arr as $value) {
                $value > 0 && $positive_values += $value;
            }

            return $positive_values;
        }

        return 0;
    }

    // Melhor resolução votada:
    function positive_sum_2($arr) {
        return array_sum(array_filter($arr, function ($num) { return $num > 0; }));
    }

    // Array_filter : cria um array com valores fitrados. Recebe o array e uma função de callbak, passando com parâmetro os valores do array iterado.
?>