<?php

namespace App\Repositories;

use App\Models\Coffee;
use App\Repositories\Interfaces\CoffeeRepositoryInterface;

class CoffeeRepository implements CoffeeRepositoryInterface
{
    public function getCoffees()
    {
        $coffees = Coffee::all();
        return $coffees;
    }
}
