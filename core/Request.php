<?php

class Request
{
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if ($position === false){
            return $path;
        }
        $path = substr($path, 0, $position);
    }

    public function getMethod()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos();
    }

   
}

?>