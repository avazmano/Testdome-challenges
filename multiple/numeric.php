<?php
class Filter
{
    public static function filterNumbersFromArray(&$arr)
    {
        // Write the code that goes here
        foreach($arr as $key){
            if(!is_numeric($key)){
                unset($arr[$key]);
            }
        }

        return $arr;
    }
}

$arr = [1, 'a', 'b', 2];
Filter::filterNumbersFromArray($arr);
print_r(array_values($arr));