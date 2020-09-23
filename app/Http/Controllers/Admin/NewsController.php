<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\Category;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index () {
        $categories = Categories::all();
        $news = News::all();
        return view('admin.change', ['route' => '/admin'], ['categories' => $categories])->with('news', $news);
    }

    public function destroy (News $news) {
        $news->delete();
        return redirect('/change');
    }

    public function edit (News $news) {
        return view('admin.create', [
            'route' => '/admin',
            'news' => $news,
            'categories' => Categories::all(),
            'success' => 0
        ]);
    }

    public function update (News $news, Request $request) {
        $data = $request->except('_token');

        $this->validate($request, News::rules());
        $result = $news->fill($data)->save();

        $news->fill($data)->save();

        if ($result) {
            return redirect('/change');
        } else {

        }
    }

    public function store(Request $request)
    {
        $news = new News();

        $data = $request->except('_token');

        $this->validate($request, News::rules());

        $result = $news->fill($data)->save();

        $result = $news->fill($data)->save();

        $categories = Categories::all();

        if ($result) {
            return view('admin.create', [
                    'route' => '/admin',
                    'categories' => $categories,
                    'success' => 'Good job, bro!',
                    'news' => $news
                ]
            );
        } else {
            return view('admin.create', [
                    'route' => '/admin',
                    'categories' => $categories,
                    'error' => 'Oops! Something gone wrong.',
                    'news' => $news
                ]
            );
        }
    }

    public function create () {
        $news = new News();
        $categories = Categories::all();
        return view('admin.create', [
                'route' => '/admin',
                'categories' => $categories,
                'success' => 0,
                'news' => $news
            ]
        );
    }
}
