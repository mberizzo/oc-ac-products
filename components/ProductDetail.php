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
        $id = $this->param('id');

        $this->page['product'] = Product::find($id);
    }
}
