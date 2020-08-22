<?php

namespace App\Http\Controllers\News;

use App\Categories;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index () {
        $categories = Categories::getCategories();
        return view('news', ['route' => '/'], ['categories' => $categories])->with('news', News::getNews());
    }

    public function show ($id) {
        return view('single', ['route' => '/'])->with('newsSingle', News::getNewsById($id));
    }
}
