<?php
class TextInput
{
    public $inputall = '';

    public function add($input){
        $this->inputall .=  $input;
    }

    public function getValue(){
        return $this->inputall;
    }
}

class NumericInput extends TextInput
{
    public function add ($input){
        if(is_numeric($input)){
            $this->inputall .=  $input;
        }
    }
}

//$input = new NumericInput();
//$input->add('1');
//$input->add('a');
//$input->add('0');
//echo $input->getValue();