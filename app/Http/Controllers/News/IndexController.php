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
        $categories = DB::table('categories')->get();
        $news = DB::table('news')->get();
        return view('news', ['route' => '/'], ['categories' => $categories])->with('news', $news);
    }

    public function show ($id) {
        $newsSingle = DB::table('news')->find($id);
        if (!empty($newsSingle)) {
            return view('single', ['route' => '/'])->with('newsSingle', $newsSingle);
        } else {
            return view('error');
        }
    }
}
