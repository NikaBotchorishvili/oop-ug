<?php

class Helper{

    public static function convertString($string){
        return str_replace(" ", "-", $string);
    }
}