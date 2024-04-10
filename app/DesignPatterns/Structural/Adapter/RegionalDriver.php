<?php

namespace App\DesignPatterns\Structural\Adapter;

use App\DesignPatterns\Structural\Adapter\IRegionalDriver;


class RegionalDriver implements IRegionalDriver
{
    public function salaryByKilometrs($km) : int
    {
        return 2*$km;
    }
}
