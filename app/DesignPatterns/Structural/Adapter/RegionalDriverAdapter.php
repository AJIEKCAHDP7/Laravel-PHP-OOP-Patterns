<?php

namespace App\DesignPatterns\Structural\Adapter;

class RegionalDriverAdapter implements ILocalDriver
{
    private IRegionalDriver $regionalDriver;

    public function __construct(IRegionalDriver $regionalDriver)
    {
        $this->regionalDriver = $regionalDriver;
    }

    public function salaryByMount(): int
    {
        return $this->regionalDriver->salaryByKilometrs(1000);
    }
}
