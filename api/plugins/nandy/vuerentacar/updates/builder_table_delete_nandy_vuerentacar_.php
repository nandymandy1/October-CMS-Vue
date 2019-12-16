<?php namespace Nandy\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteNandyVuerentacar extends Migration
{
    public function up()
    {
        Schema::dropIfExists('nandy_vuerentacar_');
    }
    
    public function down()
    {
        Schema::create('nandy_vuerentacar_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 191)->nullable();
            $table->string('slug', 191)->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
