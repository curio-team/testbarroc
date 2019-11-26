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
        $this->call(SuppliesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PurchasesTableSeeder::class);
        $this->call(Purchase_rulesTableSeeder::class);
        $this->call(CompanyDetailsSeeder::class);
        $this->call(leaseTypesSeeder::class);
        $this->call(LeaseSeeder::class);
        $this->call(Lease_rulesSeeder::class);
        $this->call(InvoiceSeeder::class);
        $this->call(NotesSeeder::class);
        $this->call(QuotationSeeder::class);
        $this->call(WorkOrdersSeeder::class);
    }
}

