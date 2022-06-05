<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\ItemSize;
use Facade\Ignition\Support\FakeComposer;
use Illuminate\Database\Seeder;

class ItemSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $sizes = ['small', 'large', 'medium', 'x-large'];

        $items = Item::get();

        foreach($items as $item) {

                foreach($sizes as $size) {
                    $data = [
                        'item_id' => $item['id'],
                        'size' => $size
                    ];

           

                    ItemSize::create($data);
                }
           
        }

    }
}
