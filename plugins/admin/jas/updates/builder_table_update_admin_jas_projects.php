<?php namespace admin\jas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminJasProjects extends Migration
{
    public function up()
    {
        Schema::table('admin_jas_projects', function($table)
        {
            $table->integer('sort_order')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('admin_jas_projects', function($table)
        {
            $table->integer('sort_order')->nullable(false)->change();
        });
    }
}
