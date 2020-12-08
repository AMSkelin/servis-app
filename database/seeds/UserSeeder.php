<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first name' => 'Ivo',
            'last name' => 'Ivić',
            'email' => Str::random(10).'@gmail.com',
            'password'=> Hash::make('password'),
            'country_id'=> '1'
        ]);
    }
}
