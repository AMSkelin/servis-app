<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\carbon;



class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bills')->insert([
            'amount' => 1234,
            'PDV' => 5.6,
            'total_amount' => 5678,
            'billed_at' => carbon::now(),
            'publisher' => 'Ana Anić',
            'billing number' => '55',
            'billing_address' => 'Ulica sv. Petra'
            
        ]);
    }
}
