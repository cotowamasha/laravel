<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index () {
        $categories = Categories::all();
        $news = News::all();
        return view('change', ['route' => '/admin'], ['categories' => $categories])->with('news', $news);
    }

    public function destroy (News $news) {
        $news->delete();
        return redirect('change');
    }

    public function edit (News $news) {
        return view('create', [
            'route' => '/admin',
            'news' => $news,
            'categories' => Categories::all(),
            'success' => 0
        ]);
    }

    public function update (News $news, Request $request) {
        $data = $request->except('_token');
        $news->fill($data)->save();
        return redirect('/change');
    }

    public function create (Request $request) {
        $success = 0;

        if($request->isMethod('post')){
            $news = new News();

            $news->fill($request->except('_token'));

            $news->save();

            $success = 'Good job, bro!';
        }

        $categories = Categories::all();

        return view('create', [
                'route' => '/admin',
                'categories' => $categories,
                'success' => $success
            ]
        );
    }
}
