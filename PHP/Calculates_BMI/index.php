<?php 

    // 28/02/24

    /* DESCRIPTION
        Write function bmi that calculates body mass index (bmi = weight / height2).

        if bmi <= 18.5 return "Underweight"
        if bmi <= 25.0 return "Normal"
        if bmi <= 30.0 return "Overweight"
        if bmi > 30 return "Obese"    
    */

    echo bmi(110, 1.80);

    function bmi(int $weight, float $height): string 
    {
        $result = $weight / ($height**2);
        $body_mass = '';

        switch ($result) {
            case $result <= 18.5:
                $body_mass = 'Underweight';
                break;
            case $result <= 25:
                $body_mass = 'Normal';
                break;
            case $result <= 30:
                $body_mass = 'Overweight';
                break;
            case $result > 30:
                $body_mass = 'Obese';
                break;
        }

        return $body_mass;
    }
?>