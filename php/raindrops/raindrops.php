<?php

function raindrops($num):string
{
    $string = null;

    if($num % 3 === 0) {
        $string .= 'Pling';
    }

    if($num % 5 === 0) {
        $string .= 'Plang';
    }

    if($num % 7 === 0) {
        $string .= 'Plong';
    }

    return $string ?? $num;
}