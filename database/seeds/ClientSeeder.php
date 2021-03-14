<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Melchizedek A. Cruel',
                'address' => 'Pinayagan Sur, Tubigon, Bohol',
                'phone' => '092351435644',
                'capitalization' => 40000,
                'loan' => 20000
            ],
            [
                'name' => 'Mekylla A. Cruel',
                'address' => 'Pinayagan Sur, Tubigon, Bohol',
                'phone' => '091234923900',
                'capitalization' => 60000,
                'loan' => 400000
            ],
            [
                'name' => 'Danielle Ann Cruel',
                'address' => 'Pinayagan Sur, Tubigon, Bohol',
                'phone' => '093235353532',
                'capitalization' => 50000,
                'loan' => 400000
            ],
            [
                'name' => 'Mary Ann Cruel',
                'address' => 'Pinayagan Sur, Tubigon, Bohol',
                'phone' => '0909323532',
                'capitalization' => 50000,
                'loan' => 400000
            ],
            [
                'name' => 'Antonio Cruel',
                'address' => 'Pinayagan Sur, Tubigon, Bohol',
                'phone' => '092314552',
                'capitalization' => 50000,
                'loan' => 500000
            ],
            [
                'name' => 'Gelbian Cruel',
                'address' => 'Pinayagan Sur, Tubigon, Bohol',
                'phone' => '09090230404',
                'capitalization' => 50000,
                'loan' => 200000
            ],
        ];

        foreach($data as $client) {
            \App\Client::create($client);
        }
    }
}
