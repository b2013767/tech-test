<?php

class People
{
    public $string;

    public function __construct()
    {
        $this->string = 'You have reached the model';
    }
    public static function getFile()
    {
        $filepath = "../files/formdata.json";
        $myfile = fopen($filepath, "r") or die("Unable to open file!");
        $data = fread($myfile, filesize($filepath));
        fclose($myfile);
        return $data;
 
    }
    
    public static function setFile($json)
    {
        $filepath = "../files/formdata.json";
        file_put_contents($filepath, "");
        $myfile = fopen($filepath, "a") or die("Unable to open file!");
        fwrite($myfile, $json);
        fclose($myfile);
 
    }
}