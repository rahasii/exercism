<?php

class Bob
{

    function respondTo($word): string
    {

        if (preg_match('/^[\s]*$/', $word)) {
            return 'Fine. Be that way!';
        }

        if (preg_match('/^[A-Z|\s]+\?$/', $word)) {
            return "Calm down, I know what I'm doing!";
        }

        if (preg_match('/\?[\s]*$/', $word)) {
            return "Sure.";
        }

        if (
            (preg_match('/\!$/', $word)
            || preg_match('/^[A-Z]+$/', $word)
            || preg_match('/^[^a-z][A-Z|\s]+[!|,|\d]*$/', $word)
            ) && preg_match('/^(?!Let)/', $word))
        {
            return "Whoa, chill out!";
        }

        return "Whatever.";
    }

}