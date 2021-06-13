<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // run php artisn make:seeder  seedername
        // then
        // nun php artisan db:seed  --class seedername
        DB::table('users')->insert([
            'name'=>'mac1',
            'email'=>'mac@mac.mac1',
            'password'=>Hash::make('mac1')
        ]);
    }
}
