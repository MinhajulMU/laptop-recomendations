<?php

namespace App\Helper;


class Common{

    public static function slugGenerator($text){
        static $to_replace;
        static $to_delete;
        $text = substr($text,0,185);
        $text = \strtolower($text);
        $to_replace = [',','.','?','!','@',"#",'$',' ','\n','\r'];
        $to_delete = ['-'];
        return str_replace($to_replace,"-",str_replace($to_delete,"",$text));
    }

    public static function thumb($file){
        $d = explode('/',$file);
        $end = $d[count($d)-1];
        unset($d[count($d)-1]);
        $text = implode("/",$d);
        return $text."/thumbs/".$end;
    }
}