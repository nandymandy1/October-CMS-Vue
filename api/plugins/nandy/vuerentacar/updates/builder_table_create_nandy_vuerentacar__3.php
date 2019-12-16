<?php namespace Nandy\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNandyVuerentacar3 extends Migration
{
    public function up()
    {
        Schema::create('nandy_vuerentacar_locations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nandy_vuerentacar_locations');
    }
}
