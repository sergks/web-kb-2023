<?php

namespace App\Http\Controllers;

use App\Models\Products;

class ProductController extends Controller
{
    /**
     * Получает список популярные товары.
     * @return array
     */
    public function top()
    {
        $list = Products::query()
            ->limit(4)
            ->get();

        return $list;
    }

    /**
     * Получает каталог товаров.
     * @return array
     */
    public function list()
    {
        $list = Products::query()
            ->get();

        return $list;
    }

    /**
     * Получает детальную информацию о товаре по ID.
     * @param $id
     * @return array
     */
    public function info($id)
    {
        $product = Products::query()
            ->where('id', '=', $id)
            ->first();

        return $product;
    }
}
