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
        $categoryId = Categories::query()->where('name', $categoryName)->first();

        return view('category', ['route' => '/category'], ['category' => $categoryName])->with('newsByCategory', $this->show($categoryId->id));
    }

    public function show ($categoryId) {
        $news = News::query()->where('category_id', $categoryId)->get();
        return $news;
    }
}
