<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserController extends Controller
{
    public function index () {
        $xml = XmlParser::load('https://lenta.ru/rss');
        $data = $xml->parse([
            'title' => ['uses' => 'channel.title'],
            'link' => ['uses' => 'channel.link'],
            'description' => ['uses' => 'channel.description'],
            'image' => ['uses' => 'channel.image.url'],
            'news' => ['uses' => 'channel.item[title,link,guid,description,pubDate]'],
        ]);

        $this->parse($data['news']);
        
        return redirect()->route('home');
    }

    protected function parse ($news) {
        /**
         * первые 20 новостей
         */
        for ($i = 0; $i < 20; $i++) {
            $newsInSystem = new News();
            if (empty($newsInSystem::query()->select('title')->where('title', $news[$i]['title'])->first())) {
                $newsInSystem->fill([
                    'title' => $news[$i]['title'],
                    'content' => $news[$i]['description'],
                    'resource_link' => $news[$i]['link'],
                    'category_id' => 1
                ]);
                $newsInSystem->save();
            }
        }

        /**
         * все новости
         */
//        foreach ($news as $item) {
//            $newsInSystem = new News();
//            if (empty($newsInSystem::query()->select('title')->where('title', $item['title'])->first())) {
//                $newsInSystem->fill([
//                    'title' => $item['title'],
//                    'content' => $item['description'],
//                    'resource_link' => $item['link'],
//                    'category_id' => 1
//                ]);
//                $newsInSystem->save();
//            }
//        }

    }
}
