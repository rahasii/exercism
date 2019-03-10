<?php

function from($date): DateTimeImmutable
{
    $seconds = 10 ** 9;
    return DateTimeImmutable::createFromMutable($date)->modify('+' . $seconds . ' seconds');
}
