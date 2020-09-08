<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index () {
        return view('admin', ['route' => '/admin']);
    }

    public function create (Request $request) {
        $success = 0;

        if($request->isMethod('post')){
            $imgName = null;
//
//            if ($request->file('img')) {
//                $path = \Storage::putFile('public/img', $request->file('img'));
//                $imgName = \Storage::url($path);
//            }
            $news = [
                'title' => $request->except('_token')['title'],
                'content' => $request->except('_token')['content'],
                'category_id' => $request->except('_token')['category_id'],
                'img' => $imgName
            ];

            DB::table('news')->insert($news);
            $success = 'Good job, bro!';
        }

        $categories = DB::table('categories')->get();

        return view('create', [
            'route' => '/create',
            'categories' => $categories,
            'success' => $success
            ]
        );
    }
}
