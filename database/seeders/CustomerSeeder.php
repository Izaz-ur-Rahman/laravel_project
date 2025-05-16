<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customers;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = new Customers;
        $customer->name = "Izaz developer";
        $customer->email = "Izaz@gmail.com";
        $customer->password = "123456";
        $customer->save();

    }
}
