<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show($url)
    {
        $post = Posts::where("is_public", true)->where("url", $url)->firstOrFail();
        var_dump($post);
    }
}
