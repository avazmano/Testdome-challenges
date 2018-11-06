<?php
class FileOwners
{
    public static function groupByOwners($files)
    {
        $grouped = array();
        foreach ($files as $key => $value){
            $grouped[$value][] = $key;
         }
        return $grouped;
    }
}

$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);
var_dump(FileOwners::groupByOwners($files));

///-----------------------//////////////////////////////////////////////////////////////////////



class TextInput
{
    var $value;
    public function add($text){
        $this->value .= $text;
    }
    public function getValue(){
        return $this->value;
    }
    
}

class NumericInput extends TextInput
{
    public function add($text){
        if(!is_numeric($text)){
            return null;
        }else{
            $this->value .= $text;
        }
    }
}
//$textinput = new TextInput();
//$textinput->add('2');
//echo $textinput->getValue();
$input = new NumericInput();
$input->add('1');
$input->add('a');
$input->add('0');
echo $input->getValue();


in_array()