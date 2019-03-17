<?php

function sieve($num): array
{
    $primeNumbers = [];

    if ($num === 1 || $num < 1) {
        return $primeNumbers;
    }

    $primeNumbers[] = 2;
    for($i = 2; $i <= $num; $i++){

        $prime = true;

        foreach ($primeNumbers as $prime){
            if($i % $prime === 0 ){
                $prime = false;
                break;
            }
        }

        if($prime){
            $primeNumbers[] = $i;
        }

    }

    return $primeNumbers;
}
