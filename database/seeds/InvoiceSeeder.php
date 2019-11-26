<?php

use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('invoices')->insert([
            [
                'lease_id' => 1,
                'betaald_op' => '2019-12-11',
                'created_at'    => '2019-11-11'
            ],
            [
                'lease_id'      => 1,
                'betaald_op'    => '2020-01-01',
                'created_at'    =>  '2019-12-12'
            ],
            [
                'lease_id'      => 1,
                'betaald_op'    => null,
                'created_at'    => '2020-01-01'
            ]
        ]);
    }
}
