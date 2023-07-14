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
            [
                'last_name' => 'Montanezii',
                'first_name' => 'Kien',
                'middle_name' => 'Juanich',
                'address' => 'Macaas, Tubigon, Bohol',
                'birth_date' => '2002-07-18',
                'phone_number' => '09273082840',
                'initial_deposit' => '888888',
                'email' => 'montanezkien56@gmail.com'
            ],
            [
                'last_name' => 'Montaneziii',
                'first_name' => 'Kien',
                'middle_name' => 'Juanich',
                'address' => 'Macaas, Tubigon, Bohol',
                'birth_date' => '2002-07-18',
                'phone_number' => '09273082841',
                'initial_deposit' => '777777',
                'email' => 'montanezkien34@gmail.com'
            ],
            [
                'last_name' => 'Waters',
                'first_name' => 'Ashkov',
                'middle_name' => 'Na',
                'address' => 'Macaas, Tubigon, Bohol',
                'birth_date' => '2002-07-18',
                'phone_number' => '09273082842',
                'initial_deposit' => '666666',
                'email' => 'montanezkien45@gmail.com'
            ],
            [
                'last_name' => 'Montaneziv',
                'first_name' => 'Kien',
                'middle_name' => 'Juanich',
                'address' => 'Macaas, Tubigon, Bohol',
                'birth_date' => '2002-07-18',
                'phone_number' => '09273082843',
                'initial_deposit' => '555555',
                'email' => 'mightdieaswell@gmail.com'
            ],
            [
                'last_name' => 'XyXyXy',
                'first_name' => 'Pin',
                'middle_name' => 'Na',
                'address' => 'Macaas, Tubigon, Bohol',
                'birth_date' => '2002-07-18',
                'phone_number' => '09273082844',
                'initial_deposit' => '444444',
                'email' => 'pinxy2175@gmail.com'
            ],
            [
                'last_name' => 'Batausa',
                'first_name' => 'nathaniel',
                'middle_name' => 'Roba',
                'address' => 'Tinangnan, Tubigon, Bohol',
                'birth_date' => '2002-11-16',
                'phone_number' => '09273082845',
                'initial_deposit' => '333333',
                'email' => 'nathanielbatausafgo@gmail.com'
            ],
            [
                'last_name' => 'Salutan',
                'first_name' => 'John Emanuelle',
                'middle_name' => 'Resaba',
                'address' => 'Bunacan, Tubigon, Bohol',
                'birth_date' => '2002-05-01',
                'phone_number' => '09273082846',
                'initial_deposit' => '222222',
                'email' => 'salutanemanuelle@gmail.com'
            ],
            [
                'last_name' => 'Pongase',
                'first_name' => 'John Ivan',
                'middle_name' => 'Sumipo',
                'address' => 'Tinangnan, Tubigon, Bohol',
                'birth_date' => '2001-06-09',
                'phone_number' => '09273082847',
                'initial_deposit' => '111111',
                'email' => 'sumipo231@gmail.com'
            ],
            [
                'last_name' => 'Hsr',
                'first_name' => 'Besiege',
                'middle_name' => 'Na',
                'address' => 'Macaas, Tubigon, Bohol',
                'birth_date' => '2002-07-18',
                'phone_number' => '09273082849',
                'initial_deposit' => '101010',
                'email' => 'hsrbesiege@gmail.com'
            ],
        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
