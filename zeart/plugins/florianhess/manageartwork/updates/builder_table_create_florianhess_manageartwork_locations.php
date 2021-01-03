<?php namespace FlorianHess\Manageartwork\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFlorianhessManageartworkLocations extends Migration
{
    public function up()
    {
        Schema::create('florianhess_manageartwork_locations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('florianhess_manageartwork_locations');
    }
}
