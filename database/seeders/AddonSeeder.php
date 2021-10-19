<?php

namespace Database\Seeders;

use App\Models\Addon;
use Illuminate\Database\Seeder;

class AddonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addons= [
            [
                'name' => 'first addon',
                'price' => '1000',
            ],
            [
                'name' => 'second addon',
                'price' => '2000',
            ],
            [
                'name' => 'third addon',
                'price' => '3000',
            ]
        ];

        foreach ($addons as $addon) {
            $product = Addon::whereName($addon['name'])->first();
            if (!$product) {
                Addon::create($addon);
            }
        }
    }
}
