<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class roleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        DB::table('role')->truncate();
        \App\Model\Role::create( [
            'id'=>1,
            'role'=>'User'
            ]);
        \App\Model\Role::create( [
            'id'=>2,
            'role'=>'Administrator'
            ]);

    }
}
