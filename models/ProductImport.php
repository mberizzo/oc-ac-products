<?php namespace Mberizzo\Products\Models;

use Illuminate\Support\Carbon;
use Mberizzo\Products\Models\Product;

class ProductImport extends \Backend\Models\ImportModel
{
    /**
     * @var array The rules to be applied to the data.
     */
    public $rules = [];

    public function importData($results, $sessionKey = null)
    {
        foreach ($results as $row => $data) {
            try {
                $data = array_map('trim', $data);
                $data = array_filter($data);

                Product::create([
                    'tipoarti' => $data['tipoarti'],
                    'descrip' => $data['descrip'],
                    'cod_produa' => $data['cod_produa'],
                    'valor_nomi' => $data['valor_nomi'],
                    'cod_art' => $data['cod_art'],
                    'cuota' => $data['cuota'],
                    'tipo_vehi' => $data['tipo_vehi'] ?? null,
                    'marca' => $data['marca'] ?? null,
                    'moneda' => $data['moneda'] ?? null,
                    'metros_cua' => $data['metros_cua'] ?? null,
                    'habitacion' => $data['habitacion'] ?? null,
                    'tipo_plan' => $data['tipo_plan'] ?? null,
                    'cant_cuotas' => $data['cant_cuotas'] ?? null,
                ]);

                $this->logCreated();
            } catch (\Exception $ex) {
                logger($ex);
                $this->logError($row, $ex->getMessage());
            }
        }
    }
}
