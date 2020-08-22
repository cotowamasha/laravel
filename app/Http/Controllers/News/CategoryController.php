<?php

namespace App\Http\Controllers\News;

use App\Categories;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index ($categoryName) {
        $categoryId = 0;

        $categories = Categories::getCategories();

        foreach ($categories as $el) {
            if ($el['name'] == $categoryName) {
                $categoryId = $el['id'];
            }
        }

        if (!$categoryId) {
            return view('error');
        }

        return view('category', ['route' => '/category'], ['category' => $categoryName])->with('newsByCategory', News::getNewsByCategory($categoryId));
    }
}
