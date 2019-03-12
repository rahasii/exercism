<?php

class Bob
{

    function respondTo($word): string
    {

        if (preg_match('/\?/', $word)) {
            return "Sure.";
        }

        if (
            preg_match('/^(?!Let)/', $word)
            &&
            (preg_match('/\!$/', $word)||preg_match('/^[^a-z][A-Z][!|\s|,|\d]*/', $word))
        )
        {
            return "Whoa, chill out!";
        }

        return "Whatever.";
    }

}