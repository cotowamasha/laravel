<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    private static $news = [
        [
            'id' => 1,
            'img' => 'img1.png',
            'title' => 'Unexamined toxins',
            'content' => 'Activists and journalists are frequently poisoned in Russia but the authorities almost never investigate these attacks. Here are five notorious cases that preceded Alexey Navalny’s recent hospitalization. ',
            'category_id' => 1
        ],
        [
            'id' => 2,
            'img' => 'img2.png',
            'title' => 'Before he became violently ill',
            'content' => 'Opposition politician Alexey Navalny has been hospitalized and possibly poisoned. Here’s why he went to Siberia, where he was apparently attacked.',
            'category_id' => 2
        ],
        [
            'id' => 3,
            'img' => 'img3.png',
            'title' => 'Beaten and disappeared',
            'content' => 'Lobster demands to know what happened to special correspondent Maxim Solopov',
            'category_id' => 3
        ]
    ];

    public static function getNews () {
        return static::$news;
    }

    public static function getNewsByCategory ($categoryId) {
        $newsByCategory = [];
        foreach (static::getNews() as $news) {
            if ($news['category_id'] == $categoryId) {
                $newsByCategory[] = $news;
            }
        }
        return $newsByCategory;
    }

    public static function getNewsById ($id) {
        foreach (static::getNews() as $news) {
            if ($news['id'] == $id) {
                return $news;
            }
        }
        return 0;
    }

}
