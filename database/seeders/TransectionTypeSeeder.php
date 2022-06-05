<?php

namespace Database\Seeders;

use App\Models\TransectionType;
use Illuminate\Database\Seeder;

class TransectionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $data = [
            ['type' => 'Initial Count'],
            ['type' => 'Receiving'],
            ['type' => 'Lost Found'],
            ['type' => 'Missing'],
        ];


        foreach($data as $item)
        {
            TransectionType::create($item);
        }
    }
}
