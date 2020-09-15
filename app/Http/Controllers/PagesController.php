<?php

namespace App\Http\Controllers;

use App\ExampleTwo;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(ExampleTwo $example)
    {
        ddd($example);
    }
}
