<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\carbon;

class RepairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('repairs')->insert([
            'name' => Str::random(10),
            'bills_id'=>'1',
            'note'=>Str::random(10),
            'parts_id'=>'1',
            'devices_id'=>'1',
            'repaired_at'=>carbon::now()

            ]);
    }
}
