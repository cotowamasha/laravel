<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index () {
        return view('admin', ['route' => '/admin']);
    }

    public function create (Request $request) {
        if($request->isMethod('post')){
            $news = News::getNews();
            $news[] = $request->except('_token');
            file_put_contents('./news.json', json_encode($news));
        }

        return view('create', [
            'route' => '/create',
            'categories' => Categories::getCategories()
            ]
        );
    }
}
