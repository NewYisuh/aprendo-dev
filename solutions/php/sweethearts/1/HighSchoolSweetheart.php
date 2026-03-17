<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        $name=trim($name);
        return substr($name, 0 , 1);
    }

    public function initial(string $name): string
    {
        $name=$this->firstLetter($name);
        $name=ucfirst($name) . ".";
        return $name;
    }

    public function initials(string $name): string
    {
        $nombreSeparado= explode(" " , $name);
        $nombreSeparado[0]= $this->initial($nombreSeparado[0]);
        $nombreSeparado[1]= $this->initial($nombreSeparado[1]);
        $name= implode(" " , $nombreSeparado);
        return $name;
    }
    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $par1 = $this->initials($sweetheart_a);
        $par2 = $this->initials($sweetheart_b);

        return <<<EXPECTED_HEART
                 ******       ******
               **      **   **      **
             **         ** **         **
            **            *            **
            **                         **
            **     $par1  +  $par2     **
             **                       **
               **                   **
                 **               **
                   **           **
                     **       **
                       **   **
                         ***
                          *
            EXPECTED_HEART;
    }
}