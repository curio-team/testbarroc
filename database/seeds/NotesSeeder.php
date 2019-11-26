<?php

use Illuminate\Database\Seeder;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('notes')->insert([
            [
                'sales_id'  => 3,
                'customer_id'   => 5,
                'content' => "Gesprek gehad met de heer B. Roos. Ze willen binnenkort uitbreiden met nog een koffie automaat. Wellicht alvast een inkoop doen?",
                'created_at' => '2020-02-02'
            ],
            [
                'sales_id'  => 3,
                'customer_id'   => 4,
                'content'       => "weer niet akkoord gegaan met de prijsofferte. Niet goed mee te onderhandelen. Let hierop, ze willen een heel lage prijs. Gaan we niet mee akkoord.",
                'created_at'    => "2019-03-03"
            ],
        ]);

    }
}
