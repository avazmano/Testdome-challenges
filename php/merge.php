<?php
class MergeNames
{
    public static function unique_names($array1, $array2)
    {
        $all = array_merge($array1, $array2);
        $all = array_unique($all);
        return $all;
    }
}

$names = MergeNames::unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']);
echo join(', ', $names); // should print Emma, Olivia, Ava, Sophia