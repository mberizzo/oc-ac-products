<?php namespace Mberizzo\Products\Models;

use Model;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sluggable;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mberizzo_products_list';

    /**
     * @var array Generate slugs for these attributes.
     */
    protected $slugs = [
        'descrip_slug' => 'descrip',
    ];

    public $fillable = [
        'tipoarti',
        'descrip',
        'descrip_larga',
        'cod_produa',
        'valor_nomi',
        'cod_art',
        'cuota',
        'tipo_vehi',
        'marca',
        'moneda',
        'metros_cua',
        'habitacion',
        'tipo_plan',
        'cant_cuotas',
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'tipoarti' => [
            'required',
        ],
        'descrip' => [
            'required',
        ],
        'cod_produa' => [
            'required',
        ],
        'valor_nomi' => [
            'required',
            'numeric',
        ],
        'cod_art' => [
            'required',
        ],
        'cuota' => [
            'required',
        ],
    ];

    public $attachOne = [
        'image' => 'System\Models\File'
    ];
}
