<?php

namespace App\Http\Controllers\Patterns;

use App\DesignPatterns\Creational\Builder\Operator;
use App\DesignPatterns\Creational\Builder\TextBuilder;
use App\DesignPatterns\Structural\Adapter\CityDriver;
use App\DesignPatterns\Structural\Adapter\RegionalDriver;
use App\DesignPatterns\Structural\Adapter\RegionalDriverAdapter;
use App\Http\Controllers\Controller;

class AdapterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the Adapter pattern.
     */
    public function index()
    {
        $localDriver = new CityDriver();
        $regionalDriver = new RegionalDriver();
        $regionalDriverAdapter = new RegionalDriverAdapter($regionalDriver);

        $results[] = 'Local driver salary: '. $localDriver->salaryByMount() . ' EUR';
        $results[] = 'Regional driver salary: '. $regionalDriverAdapter->salaryByMount() . ' EUR';


        return view('patterns/adapter', compact("results"));
    }
}
