<?php

use Illuminate\Database\Seeder;

class QuotationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('quotations')->insert([
            [
                'sales_id'          => 3,
                'customer_id'       => 4,
                'content'           => "Het leasen en installeren van twee koffie automaten met koffiebonen type 2",
                'pricing'           => "Installatiekosten 420,- & leasekosten maandelijks á 665,-",
                'finance_approved'  => 1,
                'customer_approved' => 0
            ],
            [
                'sales_id'          => 3,
                'customer_id'       => 5,
                'content'           => "Het leasen en installeren van 'Koffiemachine 1'  met 'koffiebonen type 2'",
                'pricing'           => "Installatiekosten 220,- & leasekosten maandelijks á 345,-",
                'finance_approved'  => 1,
                'customer_approved' => 1
            ],
            [
                'sales_id'          => 3,
                'customer_id'       => 5,
                'content'           => "Het leasen en installeren van 'Koffiemachine 1'  met 'koffiebonen type 2'",
                'pricing'           => "Installatiekosten 270,- & leasekosten maandelijks á 365,-",
                'finance_approved'  => 1,
                'customer_approved' => 0
            ]
        ]);
    }
}
