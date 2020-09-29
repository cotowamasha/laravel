<?php


namespace App\Services;


use App\Categories;
use App\News;
use Orchestra\Parser\Xml\Facade as XmlParser;

class XMLParserService
{
    public function saveNews ($link) {
        $xml = XmlParser::load($link);
        $data = $xml->parse([
            'title' => ['uses' => 'channel.title'],
            'link' => ['uses' => 'channel.link'],
            'description' => ['uses' => 'channel.description'],
            'image' => ['uses' => 'channel.image.url'],
            'news' => ['uses' => 'channel.item[title,link,guid,description,pubDate]'],
        ]);

        for ($i = 0; $i < 20; $i++) {
            $newsInSystem = new News();
            if (empty($newsInSystem::query()->select('title')->where('title', $data['news'][$i]['title'])->first())) {
                $newsInSystem->fill([
                    'title' => $data['news'][$i]['title'],
                    'content' => $data['news'][$i]['description'],
                    'resource_link' => $data['news'][$i]['link'],
                    'category_id' => 1
                ]);
                $newsInSystem->save();
            }
        }
    }
}
