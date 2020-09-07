<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public static function getNews () {
        return json_decode(file_get_contents('news.json', FILE_USE_INCLUDE_PATH), true);
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
