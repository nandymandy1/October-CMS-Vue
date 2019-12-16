<?php namespace Nandy\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNandyVuerentacar6 extends Migration
{
    public function up()
    {
        Schema::create('nandy_vuerentacar_vehicles_dates', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('vehicle_id');
            $table->integer('date_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nandy_vuerentacar_vehicles_dates');
    }
}
