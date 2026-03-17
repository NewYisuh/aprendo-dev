<?php

class PizzaPi
{
    public function calculateDoughRequirement($pizzas, $persons)
    {
        return $pizzas *(($persons * 20)+200);
    }

    public function calculateSauceRequirement($pizzas, $canVolume)
    {
        return ($pizzas* 125) / $canVolume;
    }

    public function calculateCheeseCubeCoverage($cheeseDimension, $thickness, $diameter)
    {
        return round($cheeseDimension**3 /($thickness * pi() * $diameter) | PHP_ROUND_HALF_DOWN	);
    }

    public function calculateLeftOverSlices($pizza, $friends)
    {
        $pizza = $pizza*8;
        return $pizza % $friends;
    }
}
