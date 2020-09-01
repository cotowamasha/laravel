<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    private static $categories = [
        [
            'id' => 1,
            'name' => 'sport'
        ],
        [
            'id' => 2,
            'name' => 'politic'
        ],
        [
            'id' => 3,
            'name' => 'religion'
        ]
    ];

    public static function getCategories () {
        return static::$categories;
    }
}
