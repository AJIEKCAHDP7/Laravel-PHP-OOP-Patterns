<?php

namespace App\DesignPatterns\Structural\Adapter;

interface IRegionalDriver
{
    public function salaryByKilometrs($km) : int;
}
