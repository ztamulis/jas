<?php namespace Individuart\Work\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIndividuartWorkWorks extends Migration
{
    public function up()
    {
        Schema::table('individuart_work_works', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('individuart_work_works', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
