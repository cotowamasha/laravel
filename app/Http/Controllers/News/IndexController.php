<?php

namespace App\Http\Controllers\News;

use App\Categories;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index () {
        $categories = Categories::all();
        $news = News::all();
        return view('news', ['route' => '/'], ['categories' => $categories])->with('news', $news);
    }

    public function show (News $news) {
        return view('single', ['route' => '/'])->with('newsSingle', $news);
    }
}
