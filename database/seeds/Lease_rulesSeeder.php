<?php

use Illuminate\Database\Seeder;

class Lease_rulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('lease_rules')->insert([
            [
                'lease_id'  => 1,
                'supply_id' => 1
            ],
            [
                'lease_id'  => 1,
                'supply_id' => 4
            ]
        ]);
    }
}
