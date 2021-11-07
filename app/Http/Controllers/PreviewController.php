<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;


class PreviewController extends Controller
{
    public function render(string $view)
    {
        return view("preview.$view");
    }
}
