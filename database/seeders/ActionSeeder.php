<?php

namespace Database\Seeders;

use App\Models\Action;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $actions = [
            [
                'name' => [
                    'uk' => 'Сервіс сховано',
                    'ru' => 'Сервис скрыт',
                ],
                'slug' => 'hidden-service',
            ],
            [
                'name' => [
                    'uk' => 'Сервіс відображено',
                    'ru' => 'Сервис отображен',
                ],
                'slug' => 'active-service',
            ],
            [
                'name' => [
                    'uk' => 'Вибрано "Отримати позику"',
                    'ru' => 'Выбрано "Получить ссуду"',
                ],
                'slug' => 'get-credit',
            ],

        ];

        foreach ($actions as $action) {
            $data = [
                'name' => $action['name'],
                'slug' => $action['slug'],
            ];


            Action::create($data);
        }
    }
}