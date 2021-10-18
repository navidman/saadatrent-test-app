<?php

namespace Database\Seeders;

use App\Models\Addon;
use App\Models\Coffee;
use Illuminate\Database\Seeder;

class CoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coffees= [
            [
                'name' => 'first coffee',
                'price' => '5000',
            ],
            [
                'name' => 'second coffee',
                'price' => '6000',
            ],
            [
                'name' => 'third coffee',
                'price' => '7000',
            ]
        ];

        foreach ($coffees as $coffee) {
            $product = Coffee::whereMobile($coffee['name'])->first();
            if (!$product) {
                Coffee::create($coffee);
            }
            $coffees = Coffee::all();
            $addons = Addon::all();
            $coffees->each(function ($coffees) use ($addons) {
                $coffees->addons()->attach(
                    $addons->random(rand(1, $addons->count()))->pluck('id')->toArray()
                );
            });
        }
    }
}
