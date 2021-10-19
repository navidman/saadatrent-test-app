<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\CoffeeRepositoryInterface;

class HomeController extends Controller
{
    private $coffee_repository;

    public function __construct(CoffeeRepositoryInterface $coffee_repository)
    {
        $this->coffee_repository = $coffee_repository;
    }

    public function get()
    {
        $coffees = $this->coffee_repository->getCoffees();
        return view('index', compact('coffees'));
    }
}
