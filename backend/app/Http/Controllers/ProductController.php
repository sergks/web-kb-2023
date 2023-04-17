<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    /**
     * Получает список популярные товары.
     * @return array
     */
    public function top()
    {
        return [
            [
                'id' => 1,
                'name' => 'Товар 1'
            ],
            [
                'id' => 2,
                'name' => 'Товар 2'
            ]
        ];
    }

    /**
     * Получает каталог товаров.
     * @return array
     */
    public function list()
    {
        return [
            [
                'id' => 1,
                'name' => 'Товар 1'
            ],
            [
                'id' => 2,
                'name' => 'Товар 2'
            ],
            [
                'id' => 3,
                'name' => 'Товар 3'
            ]
        ];
    }

    /**
     * Получает детальную информацию о товаре по ID.
     * @param $id
     * @return array
     */
    public function info($id)
    {
        return [
            'id' => $id,
            'name' => 'Товар ' . $id,
            'description' => 'Описание товара',
            'price' => 9900
        ];
    }
}
