<?php namespace FlorianHess\Vuemanageartwork\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFlorianhessVuemanageartwork extends Migration
{
    public function up()
    {
        Schema::create('florianhess_vuemanageartwork_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->time('initial_publication')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('artist_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('florianhess_vuemanageartwork_');
    }
}
