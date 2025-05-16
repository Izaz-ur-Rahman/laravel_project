<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customers;
use Faker\Factory as Faker;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $customer = new Customers;
        $customer->name = $faker->name;
        $customer->email = $faker->email;
        $customer->password = $faker->password;
        $customer->save();

    }
}
