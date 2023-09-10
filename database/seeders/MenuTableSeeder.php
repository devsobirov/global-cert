<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTableSeeder extends Seeder
{
    public function run(): void
    {
        $menus = [
            [
                'title' => json_encode([
                    'ru' => 'Компания',
                    'en' => 'About Company'
                ]),
                'order' => 1,
                'url' => 'company'
            ],
            [
                'title' => json_encode([
                    'ru' => 'Услуги',
                    'en' => 'Services'
                ]),
                'order' => 4,
                'url' => ''
            ],
            [
                'title' => json_encode([
                    'ru' => 'Новости',
                    'en' => 'Blog'
                ]),
                'order' => 5,
                'url' => 'blog'
            ],
            [
                'title' => json_encode([
                    'ru' => 'Портфолио',
                    'en' => 'Portfolio'
                ]),
                'order' => 6,
                'url' => 'portfolio'
            ],
            [
                'title' => json_encode([
                    'ru' => 'Контакты',
                    'en' => 'Contact'
                ]),
                'order' => 10,
                'url' => 'contact'
            ],
        ];

        DB::table('menus')->insert($menus);
    }
}
