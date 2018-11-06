<?php

class Palindrome
{
    public static function isPalindrome($word)
    {
        $wordreversed = strrev($word);
        if (strcasecmp($wordreversed, $word) == 0) {
            return true;
        } else {
            return false;
        }
    }
}

echo Palindrome::isPalindrome('Deleveleds');