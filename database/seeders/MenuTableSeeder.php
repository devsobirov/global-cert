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
                'url' => 'company',
                'show_in_footer' => true
            ],
            [
                'title' => json_encode([
                    'ru' => 'Услуги',
                    'en' => 'Services'
                ]),
                'order' => 4,
                'url' => '',
                'show_in_footer' => true
            ],
            [
                'title' => json_encode([
                    'ru' => 'Новости',
                    'en' => 'Blog'
                ]),
                'order' => 5,
                'url' => 'blog',
                'show_in_footer' => true
            ],
            [
                'title' => json_encode([
                    'ru' => 'Портфолио',
                    'en' => 'Portfolio'
                ]),
                'order' => 6,
                'url' => 'portfolio',
                'show_in_footer' => true
            ],
            [
                'title' => json_encode([
                    'ru' => 'Контакты',
                    'en' => 'Contact'
                ]),
                'order' => 10,
                'url' => 'contact',
                'show_in_footer' => true
            ],
        ];

        DB::table('menus')->insert($menus);
    }
}
