<?php
class CropRatio
{
    private $totalWeight;
    private $crops = array();

    public function add($name, $cropWeight)
    {
        if(!empty($cropWeight)){
            $currentCropWeight = $cropWeight;
    } else {
    $currentCropWeight = 0;
    }

if(!array_key_exists($name, $this->crops)) {
    $this->crops[$name] = $currentCropWeight;
}

$currentCropWeight += $cropWeight;
        $this->totalWeight = $currentCropWeight + $this->totalWeight;
}

public function proportion($name)
{
    print_r($this);
    return $this->crops[$name] / $this->totalWeight;
}
}

$cropRatio = new CropRatio;
$cropRatio->add('Wheat', 4);
$cropRatio->add('Wheat', 5);
$cropRatio->add('Rice', 1);

echo "Wheat: " . $cropRatio->proportion('Wheat');