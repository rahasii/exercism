<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
    if(strlen($a) !== strlen($b)){
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }

    $length = strlen($a);
    $arrayA = str_split($a);
    $arrayB = str_split($b);

    $count = 0;
    for($i = 0; $i < $length; $i++){
        if($arrayA[$i] !== $arrayB[$i]){
            $count++;
        }
    }

    return $count;
}
