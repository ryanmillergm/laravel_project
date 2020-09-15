<?php

namespace App\Http\Controllers;

use App\ExampleTwo;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;

class PagesController extends Controller
{
    public function home(Filesystem $file)
    {

        return $file->get(public_path('index.php'));

    }
}
