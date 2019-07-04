<?php

namespace App\Helper;


class Alert{

    public static function danger($msg){
        return self::render($msg,"alert-danger");
    }

    public static function success($msg){
        return self::render($msg,"alert-success");
    }

    public static function info($msg){
        return self::render($msg,"alert-info");
    }

    private static function render($msg,$type){
        //return '<div class="alert '.$type.'" role="alert">'.$msg.'</div>';
        return $msg;
    }

    public static function errorList($errors){
        $html = "<ul style='list-style:none;padding:0' class='text-danger'>";
        foreach($errors->all() as $msg){
            $html.= "<li>$msg</li>";

        }
        return self::danger($html."</ul>");
    }
}