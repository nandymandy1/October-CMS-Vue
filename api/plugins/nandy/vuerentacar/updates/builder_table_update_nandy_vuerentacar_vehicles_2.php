<?php namespace Nandy\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNandyVuerentacarVehicles2 extends Migration
{
    public function up()
    {
        Schema::table('nandy_vuerentacar_vehicles', function($table)
        {
            $table->boolean('available');
        });
    }
    
    public function down()
    {
        Schema::table('nandy_vuerentacar_vehicles', function($table)
        {
            $table->dropColumn('available');
        });
    }
}
