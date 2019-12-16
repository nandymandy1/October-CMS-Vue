<?php namespace Nandy\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNandyVuerentacar4 extends Migration
{
    public function up()
    {
        Schema::create('nandy_vuerentacar_vehi_loc', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('vehicle_id');
            $table->integer('location_id');
            $table->primary(['vehicle_id','location_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nandy_vuerentacar_');
    }
}
