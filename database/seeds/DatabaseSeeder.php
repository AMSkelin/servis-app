<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            CountrySeeder::class,
            Device_typeSeeder::class,
            UserSeeder::class,
            SupplierSeeder::class,
            PartSeeder::class,
            BillSeeder::class,
            Device_modelSeeder::class,
            DeviceSeeder::class,
            RepairSeeder::class,
            

        ]);
    }
}
