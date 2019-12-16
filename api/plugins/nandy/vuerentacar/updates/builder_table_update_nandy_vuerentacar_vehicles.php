<?php namespace Nandy\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNandyVuerentacarVehicles extends Migration
{
    public function up()
    {
        Schema::table('nandy_vuerentacar_vehicles', function($table)
        {
            $table->integer('price')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('nandy_vuerentacar_vehicles', function($table)
        {
            $table->dropColumn('price');
        });
    }
}
