<?php

namespace Database\Seeders;

use App\Models\Township;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TownshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [[
            'name' => 'Hlaing Township',
            'state_id' => 1
        ], [
            'name' => 'SanChang Township',
            'state_id' => 1
        ], [
            'name' => 'Kamayut Township',
            'state_id' => 1
        ], [
            'name' => 'ChangMyaTarZe Township',
            'state_id' => 2
        ], [
            'name' => 'AungMyayTarZan Township',
            'state_id' => 2
        ], [
            'name' => 'Monywa Township',
            'state_id' => 3
        ], [
            'name' => 'Kalay Township',
            'state_id' => 3
        ]            
        ];

        foreach($data as $value)
        {
            Township::create([
                'name' => 'name',
                'state_id' => 'state_id'
            ]);
        }
    }
}
