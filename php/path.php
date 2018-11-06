<?php
/**
 * Created by PhpStorm.
 * User: av
 * Date: 11/3/2018
 * Time: 3:16 PM
 */

class Path
{
    public $currentPath;

    function __construct($path)
    {
        $this->currentPath = $path;
    }

    public function cd($newPath)
    {
        $folder = explode('/', $newPath);
        foreach( $folder as $key => $value){
            if($value == '..'){
                $currentpath_array = explode('/', $this->currentPath );
                $this->currentPath = rtrim($this->currentPath, end($currentpath_array));
                $this->currentPath = rtrim($this->currentPath, '/');
            }
            else{
                $this->currentPath = $this->currentPath . '/' . $value;
            }
        }

    }
}

$path = new Path('/a/b/c/d');
$path->cd('../x');
echo $path->currentPath;