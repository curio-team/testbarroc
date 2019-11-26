<?php

use Illuminate\Database\Seeder;

class LeaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('leases')->insert([
            [
                'lease_type_id' => 1,
                'customer_id'   => 5,
                'finance_id'    => 6,
                'monthly_costs' => 356.45,
                'start_date'     => '2019-10-10',
                'end_date'       => '2020-10-10'
            ],
        ]);
    }
}
