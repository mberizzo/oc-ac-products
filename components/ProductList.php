<?php namespace Mberizzo\Products\Components;

use Cms\Classes\ComponentBase;
use Mberizzo\Products\Models\Product;

class ProductList extends ComponentBase
{

    const PROD_TYPES = [
        '0KM',
        'Moto 0KM',
        'Kit Vivienda',
        'Valor Nominal',
        'Artículo del Hogar',
    ];

    public function componentDetails()
    {
        return [
            'name'        => 'ProductList Component',
            'description' => 'Listado de productos'
        ];
    }

    public function defineProperties()
    {
        return [
            'tipoarti' => [
                'title' => 'mberizzo.products::lang.fields.tipoarti',
                'type' => 'dropdown',
                'options' => self::PROD_TYPES,
                'default' => 0,
            ],
        ];
    }

    public function onRun()
    {
        $tipoarti = $this->properties['tipoarti'];

        $this->page['products'] = Product::query()
            ->where('tipoarti', self::PROD_TYPES[$tipoarti])
            ->when($brand = input('marca'), function ($query) use ($brand) {
                $query->where('marca', $brand);
            })
            ->orderBy('valor_nomi', 'asc')
            ->get();
    }
}
