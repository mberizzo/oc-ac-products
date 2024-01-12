<?php namespace Mberizzo\Products\Components;

use Cms\Classes\ComponentBase;
use Mberizzo\Products\Models\Product;

class ProductDetail extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'ProductDetail Component',
            'description' => 'Detalle de un producto'
        ];
    }

    public function onRun()
    {
        $this->page['product'] = Product::query()
            ->where('descrip_slug', $this->param('slug'))
            ->first();
    }
}
