<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        $numero1 = (int) implode("", $digitsOfNumber1);
        $numero2 = (int) implode("", $digitsOfNumber2);
        
        return $numero1+$numero2;
    }

    public function isPalindrome(int $number): bool
    {
        $numeroReversa= abs($number);
        $numeroReversa= (string) $number;
        $numeroReversa= strrev($number);
        $numeroReversa= (int) $numeroReversa;
        
        return $number === $numeroReversa;
    }

    public function validate(string $input): string
    {
        
        if($input === ""){
            return 'Required field';
        } elseif((int) $input<=0){
            return 'Must be a whole number larger than 0';
        }else{
            return '';
        };
    }
}
