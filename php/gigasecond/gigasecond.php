<?php

function from($date): DateTime
{
    $result = clone $date;
    $seconds = 10 ** 9;
    $result->modify('+' . $seconds . ' seconds');
    return $result;
}
