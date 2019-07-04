<?php

namespace App\Helper;

Class Output{

    public static function makeArray($arr){
        $r = [];
        foreach ($arr as $key => $value) {
            $r[] = ["key"=>$key,"value"=>$value];
        }
        return $r;
    }
}