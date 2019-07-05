<?php

use Illuminate\Database\Seeder;
use App\Model\Setting;
class settingSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $settings = [
            'c1'=>json_encode(['weight' => 4,'is_cost'=> true]),
            'c2'=>json_encode(['weight' => 2,'is_cost'=> false]),
            'c3'=>json_encode(['weight' => 5,'is_cost'=> true]),
            'c4'=>json_encode(['weight' => 1,'is_cost'=> false]),
            'c5'=>json_encode(['weight' => 3,'is_cost'=> true]),

        
        ];
        foreach($settings as $key => $value){
            Setting::create([
                'key'=>$key,
                'value'=>$value
            ]);
        }
    }
}
