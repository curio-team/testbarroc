<?php

use Illuminate\Database\Seeder;

class CompanyDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('companydetails')->insert(
            [
                [
                    'user_id'       => 4,
                    'address'       => 'Vosdonk 14',
                    'city'          => 'Etten-Leur',
                    'postcode'      => '4876 EK',
                    'email'         => 'info@campina.nl',
                    'telefoonnummer'    => '076-1234567'
                ],
                [
                    'user_id'       => 5,
                    'address'       => 'Terheijdenseweg 350',
                    'city'          => 'Breda',
                    'postcode'      => '4822AA',
                    'email'         => 'info@curio.nl',
                    'telefoonnummer'    => '076-5733444'
                ],

            ]
        );
    }
}
