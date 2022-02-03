<?php namespace admin\jas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdminJasProjects2 extends Migration
{
    public function up()
    {
        Schema::table('admin_jas_projects', function($table)
        {
            $table->text('signature');
        });
    }
    
    public function down()
    {
        Schema::table('admin_jas_projects', function($table)
        {
            $table->dropColumn('signature');
        });
    }
}
