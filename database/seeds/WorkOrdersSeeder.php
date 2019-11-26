<?php

use Illuminate\Database\Seeder;

class WorkOrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 7
        \DB::table('work_orders')->insert([
           [
               'user_id'  => 7,
               'lease_id' => 1,
               'appointment_date' => '2020-01-14',
               'type'             => 'routine',
               'issue'            => null,
               'report'           => null,
               'used_materials'   => null,
               'fixed'            => 0
           ],
           [
                'user_id'    => 7,
                'lease_id'   => 1,
                'appointment_date' => '2019-11-24',
                'type'             => 'issue',
                'issue'            => 'Koffie automaat lijkt niet genoeg druk te kunnen leveren. Er worden halve bakken koffie geperst...',
                'report'           => 'breuk in de 45 mm slang. Zat niet goed op de opening waardoor er niet genoeg druk geleverd kon worden',
                'used_materials'   => 'slang 45 mm',
                'fixed'            => 1
            ],
           [
               'user_id'    => 7,
               'lease_id'   => 1,
               'appointment_date' => '2019-11-03',
               'type'             => 'issue',
               'issue'            => 'Hij lijkt niks te doen als we op de knop drukken. Er zit wel stroom op maar verder helaas geen functionaliteit',
               'report'           => 'Elektrische pomp lijkt kapot te zijn. Helaas deze niet in mijn bus liggen, nieuwe afspraak gemaakt voor morgen 12:00',
               'fixed'            => 0,
               'used_materials'   => null
           ]
        ]);
    }
}
