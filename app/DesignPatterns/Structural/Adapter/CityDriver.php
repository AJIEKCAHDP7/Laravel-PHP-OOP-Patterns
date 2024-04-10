<?php

namespace App\DesignPatterns\Structural\Adapter;

use App\DesignPatterns\Structural\Adapter\ILocalDriver;

class CityDriver implements ILocalDriver
{

    public function salaryByMount() : int
    {
        return 2000;
    }
}
