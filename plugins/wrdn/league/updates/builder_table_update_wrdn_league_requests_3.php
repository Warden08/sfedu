<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWrdnLeagueRequests3 extends Migration
{
    public function up()
    {
        Schema::table('wrdn_league_requests', function($table)
        {
            $table->dropColumn('logo');
        });
    }
    
    public function down()
    {
        Schema::table('wrdn_league_requests', function($table)
        {
            $table->string('logo', 191);
        });
    }
}
