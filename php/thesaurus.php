<?php
class Thesaurus
{
    private $thesaurus;

    function Thesaurus($thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }

    public function getSynonyms($word)
    {
        $synonyms['word'] = $word;
        if(!empty($this->thesaurus[$word])){
            $synonyms['synonyms'] = $this->thesaurus[$word];
        }else{
            $synonyms['synonyms'] = array();
        }
        $synonyms = json_encode($synonyms);
        return $synonyms;
    }
}

$thesaurus = new Thesaurus(
    array
    (
        "buy" => array("purchase"),
        "big" => array("great", "large")
    ));

echo $thesaurus->getSynonyms("bigs");
echo "\n";
echo $thesaurus->getSynonyms("agelast");