<?php

namespace App\Http\Controllers\Patterns;

use App\DesignPatterns\Creational\Builder\Operator;
use App\DesignPatterns\Creational\Builder\TextBuilder;
use App\Http\Controllers\Controller;

class AdaptersController extends Controller
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

        $results[] = '$message->getText()';


        return view('patterns/builder', compact("results"));
    }
}
