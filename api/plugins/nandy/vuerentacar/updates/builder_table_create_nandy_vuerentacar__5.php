<?php namespace Nandy\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNandyVuerentacar5 extends Migration
{
    public function up()
    {
        Schema::create('nandy_vuerentacar_dates', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->dateTime('pickup');
            $table->dateTime('drop_off');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nandy_vuerentacar_dates');
    }
}
