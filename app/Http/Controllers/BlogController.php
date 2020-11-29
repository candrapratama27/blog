<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index(Posts $posts){
        $category_widget = Category::all();

    	$data = $posts->latest()->take(8)->get();
    	return view('blog', compact('data','category_widget'));
    }
}
