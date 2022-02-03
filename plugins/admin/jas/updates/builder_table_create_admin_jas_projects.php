<?php namespace admin\jas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdminJasProjects extends Migration
{
    public function up()
    {
        Schema::create('admin_jas_projects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('short_description');
            $table->string('description');
            $table->date('date');
            $table->string('slug');
            $table->boolean('published');
            $table->integer('sort_order');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('admin_jas_projects');
    }
}
