<?php
class Setting{
    static $setting= null;
    public $dark = 0;
    private function __construct(){
        // private constructor to prevent instantiation
    }
    static function create(){
        if (!static::$setting){
            static::$setting = new static();
        }
        return static::$setting;
    }
}

$setting1=Setting::create();
$setting1->dark = 1;
$setting2=Setting::create();
echo $setting1->dark . "\n"; // 1
$setting2->dark = 0;
echo $setting1->dark . "\n"; // 0