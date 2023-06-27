<?php namespace Mberizzo\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMberizzoProductsList extends Migration
{
    public function up()
    {
        Schema::create('mberizzo_products_list', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('tipoarti');
            $table->string('descrip');
            $table->text('descrip_larga')->nullable();
            $table->string('cod_produa');
            $table->string('valor_nomi');
            $table->string('cod_art');
            $table->integer('cuota');
            $table->string('tipo_vehi')->nullable();
            $table->string('marca')->nullable();
            $table->string('moneda')->nullable();
            $table->integer('metros_cua')->nullable();
            $table->integer('habitacion')->nullable();
            $table->string('tipo_plan')->nullable();
            $table->integer('cant_cuotas')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mberizzo_products_list');
    }
}
