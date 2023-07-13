<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory(20)->create();
        $cl = [
            [
                'last_name' => 'Montanez',
                'first_name' => 'Kien',
                'middle_name' => 'Juanich',
                'address' => 'Macaas, Tubigon, Bohol',
                'birth_date' => '2002-07-18',
                'phone_number' => '09273082848',
                'initial_deposit' => '999999',
                'email' => 'montanezkien45@gmail.com'
            ],
        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
