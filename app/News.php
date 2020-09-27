<?php

namespace App;

use App\Rules\Ember;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'content', 'img', 'category_id'];

    public static function rules()
    {
        $tableNameCategory = (new Categories())->getTable();
        return [
            'title' => 'required|min:10|max:255',
            'content' => 'required|min:10',
            'img' => 'mimes:jpeg,bmp,png|max:1000',
            'category_id' => "required|exists:{$tableNameCategory},id"
        ];

    }
}
