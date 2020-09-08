<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class News extends Model
{
    public static function getNews () {
        $news = File::get(storage_path() . '/news.json');
        return json_decode($news, true);
    }

    public static function getNewsByCategory ($categoryId) {
        $newsByCategory = [];
        foreach (static::getNews() as $id => $news) {
            if ($news['category_id'] == $categoryId) {
                $newsByCategory[$id] = $news;
            }
        }
        return $newsByCategory;
    }

    public static function getNewsById ($id) {
        $news = static::getNews();
        return $news[$id];
    }

}
