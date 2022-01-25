<?php namespace Jas\Jas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJasJasProjects extends Migration
{
    public function up()
    {
        Schema::create('jas_jas_projects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jas_jas_projects');
    }
}
