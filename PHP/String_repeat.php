<?php
    // 29/02/24

    /*Description
        Write a function that accepts an integer n and a string s as parameters, and returns a string of s repeated exactly n times.

        Examples (input -> output)
        6, "I"     -> "IIIIII"
        5, "Hello" -> "HelloHelloHelloHelloHello"
    */

    echo repeatStr(3, "*");

    function repeatStr(int $n, string $str): string
    {
        return str_repeat($str, $n);
    }
?>