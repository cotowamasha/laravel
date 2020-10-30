<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\Jobs\NewsParsing;
use App\News;
use App\Services\XMLParserService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserController extends Controller
{
    public function index(XMLParserService $parserService) {
        // $start = date('c');

        $rssLinks = [
            'https://lenta.ru/rss/news',
//            'https://news.yandex.ru/auto.rss',
//            'https://news.yandex.ru/auto_racing.rss',
//            'https://news.yandex.ru/army.rss',
//            'https://news.yandex.ru/gadgets.rss',
//            'https://news.yandex.ru/index.rss',
//            'https://news.yandex.ru/martial_arts.rss',
//            'https://news.yandex.ru/communal.rss',
//            'https://news.yandex.ru/health.rss',
//            'https://news.yandex.ru/games.rss',
//            'https://news.yandex.ru/internet.rss',
//            'https://news.yandex.ru/cyber_sport.rss',
//            'https://news.yandex.ru/movies.rss',
//            'https://news.yandex.ru/cosmos.rss',
//            'https://news.yandex.ru/culture.rss',
//            'https://news.yandex.ru/championsleague.rss',
//            'https://news.yandex.ru/music.rss',
//            'https://news.yandex.ru/nhl.rss',

        ];

        foreach ($rssLinks as $rssLink) {
            NewsParsing::dispatch($rssLink);
        }

        // return $start . ' --- ' . date('c');
        //return view('admin.index');
        return redirect()->route('home');
    }


//    public function index () {
//        $xml = XmlParser::load('https://lenta.ru/rss');
//        $data = $xml->parse([
//            'title' => ['uses' => 'channel.title'],
//            'link' => ['uses' => 'channel.link'],
//            'description' => ['uses' => 'channel.description'],
//            'image' => ['uses' => 'channel.image.url'],
//            'news' => ['uses' => 'channel.item[title,link,guid,description,pubDate]'],
//        ]);
//
//        $this->parse($data['news']);
//
//        return redirect()->route('home');
//    }
//
//    protected function parse ($news) {
//        /**
//         * первые 20 новостей
//         */
//        for ($i = 0; $i < 20; $i++) {
//            $newsInSystem = new News();
//            if (empty($newsInSystem::query()->select('title')->where('title', $news[$i]['title'])->first())) {
//                $newsInSystem->fill([
//                    'title' => $news[$i]['title'],
//                    'content' => $news[$i]['description'],
//                    'resource_link' => $news[$i]['link'],
//                    'category_id' => 1
//                ]);
//                $newsInSystem->save();
//            }
//        }
//
//        /**
//         * все новости
//         */
////        foreach ($news as $item) {
////            $newsInSystem = new News();
////            if (empty($newsInSystem::query()->select('title')->where('title', $item['title'])->first())) {
////                $newsInSystem->fill([
////                    'title' => $item['title'],
////                    'content' => $item['description'],
////                    'resource_link' => $item['link'],
////                    'category_id' => 1
////                ]);
////                $newsInSystem->save();
////            }
////        }
//
//    }
}
