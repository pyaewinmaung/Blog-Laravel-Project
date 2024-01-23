<?php

namespace Database\Seeders;

use App\Models\State;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Yangon',
            'Mandalay',
            'Sagaing',
            'Pegu',
            'Chin',
            'Magway'
        ];

        foreach($data as $value)
        {
            State::create([
                'name'=>$value
            ]);
        }
    }
}
