<?php namespace Mberizzo\Products\Components;

use Cms\Classes\ComponentBase;
use Mberizzo\Products\Models\Product;

class BrandList extends ComponentBase
{

    const PROD_TYPES = [
        '0KM',
        'Moto 0KM',
    ];

    public function componentDetails()
    {
        return [
            'name'        => 'BrandList Component',
            'description' => 'Listado de marcas'
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

        $brands = Product::query()
            ->where('tipoarti', self::PROD_TYPES[$tipoarti])
            ->pluck('marca')
            ->unique()
            ->sort()
            ->values();

        $this->page['brands'] = $brands;
    }
}
