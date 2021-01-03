<?php namespace FlorianHess\Manageartwork\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFlorianhessManageartworkArtworks extends Migration
{
    public function up()
    {
        Schema::create('florianhess_manageartwork_artworks', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('florianhess_manageartwork_artworks');
    }
}
