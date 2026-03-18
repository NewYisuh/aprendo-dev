<?php
include 'Size.php';
class ProgramWindow extends Size{
    
   public $y, $x,$height,$width;
    function __construct(){
        $this->y = $y;
        $this->x = $x;
        $this->height = $height=600;
        $this->width = $width=800;
        
    }

    function resize($size){
        $size->height;
        $size->width;

        $this->height = $height = $size->height;
        $this->width = $width = $size->width;
    }

    function move($position){
        $this->y = $y = $position->y;
        $this->x = $x = $position->x;
    }
}