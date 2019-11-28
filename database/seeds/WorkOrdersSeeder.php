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
        $faker = \Faker\Factory::create();
        $leases = \App\Lease::all();
        $monteurs = \App\User::where('role_id', 4)->get();
        $types = collect(['routine', 'issue']);
        $supplies = collect(['waterfilter', 'slang 23mm', 'slang 45mm', 'elektrische pomp']);

        foreach($leases as $lease) {
            for($i = 0; $i < $faker->numberBetween(0, 3); $i++) {
                $type = $types->random();
                \DB::table('work_orders')->insert([
                   [
                       'user_id'          => $monteurs->random()->id,
                       'lease_id'         => $lease->id,
                       'appointment_date' => $faker->dateTimeBetween('-15 months', '+15 months'),
                       'type'             => $type,
                       'issue'            => ($type == 'issue') ? $faker->text : null,
                       'report'           => ($type == 'issue') ? $faker->text : null,
                       'used_materials'   => ($type == 'issue') ? $supplies->random() : null,
                       'fixed'            => ($type == 'issue') ? $faker->boolean : 0,
                   ]
               ]);
            }
        }
    }
}
