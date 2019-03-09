<?php

function distance($a, $b):int
{
    if(strlen($a) !== strlen($b)){
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }

    $arrayA = str_split($a);
    $arrayB = str_split($b);

    $diff = array_diff_assoc($arrayA,$arrayB);

    return sizeof($diff);
}
