<?php namespace Mberizzo\Products;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Mberizzo\Products\Components\ProductList' => 'productList',
            'Mberizzo\Products\Components\ProductDetail' => 'productDetail',
            'Mberizzo\Products\Components\BrandList' => 'brandList',
        ];
    }

    public function registerSettings()
    {
    }
}
