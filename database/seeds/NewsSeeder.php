<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData () {
        $data = [
            [
                'title' => 'Unexamined toxins',
                'content' => 'Activists and journalists are frequently poisoned in Russia but the authorities almost never investigate these attacks. Here are five notorious cases that preceded Alexey Navalny’s recent hospitalization.',
                'img' => 'img1.png',
                'category_id' => 1
            ],
            [
                'title' => 'Before he became violently ill',
                'content' => 'Opposition politician Alexey Navalny has been hospitalized and possibly poisoned. Here’s why he went to Siberia, where he was apparently attacked.',
                'img' => 'img2.png',
                'category_id' => 2
            ],
            [
                'title' => 'Beaten and disappeared',
                'content' => 'Lobster demands to know what happened to special correspondent Maxim Solopov"',
                'img' => 'img3.png',
                'category_id' => 3
            ],
            [
                'title' => 'It’s possible that I created it myself',
                'content' => 'Chemical weapons experts explain who is capable of making ‘Novichok’ poisons and why their lethality makes them weapons to kill, not maim',
                'img' => null,
                'category_id' => 1
            ],
            [
                'title' => 'Prigozhin’s patriot',
                'content' => 'An oligarch-linked political strategist is running in Russia’s regional elections despite being imprisoned in Libya',
                'img' => null,
                'category_id' => 1
            ]
        ];
        return $data;
    }
}
