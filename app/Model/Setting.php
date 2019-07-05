<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    protected $table = "setting";
    protected $fillable = ['key','value'];
    protected static $data;
    public static function getValue($key){
        return isset(self::$data[$key]) ? self::$data[$key]: self::where('key',$key)->first()->value ;
    }

    public static function setValue($key,$value,$force=false){
        $option = self::where('key',$key)->first();
        if($option){
            $option->value = $value;
            return $option->save();
        }else if($force){
            $option = new Options();
            $option->key = $key;
            $option->value = $value;
            return $option->save();
        }
        
    }

    public static function getAllKeyValue(){
        if(!self::$data){
            //echo "TESSSSET";
            $tmp = self::all();
            $d = [];
            foreach($tmp as $option){
                $d[$option->key] = $option->value;
            }
            self::$data = $d;
        }
        return self::$data;
    }
}
