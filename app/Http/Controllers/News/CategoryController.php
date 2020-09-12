<?php

namespace App\Http\Controllers\News;

use App\Categories;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index ($categoryName) {
        $categoryId = 0;

        $categories = DB::table('categories')->get();

        foreach ($categories as $el) {
            if ($el->name == $categoryName) {
                $categoryId = $el->id;
            }
        }

        if (!$categoryId) {
            return view('error');
        }

        return view('category', ['route' => '/category'], ['category' => $categoryName])->with('newsByCategory', $this->show($categoryId));
    }

    public function show ($categoryId) {
        $news = DB::table('news')->where('category_id', (int)$categoryId);
        dd($news);
        return $news;
    }
}
