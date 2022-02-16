<?php namespace admin\jas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminJasProjects4 extends Migration
{
    public function up()
    {
        Schema::table('admin_jas_projects', function($table)
        {
            $table->string('short_description', 600)->change();
            $table->string('description', 6002)->change();
        });
    }
    
    public function down()
    {
        Schema::table('admin_jas_projects', function($table)
        {
            $table->string('short_description', 255)->change();
            $table->string('description', 255)->change();
        });
    }
}
