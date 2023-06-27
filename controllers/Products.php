<?php namespace Mberizzo\Products\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Products extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ImportExportController',
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $importExportConfig = 'config_import_export.yaml';

    public $requiredPermissions = [
        'products.module' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Mberizzo.Products', 'main-menu-item');
    }
}
