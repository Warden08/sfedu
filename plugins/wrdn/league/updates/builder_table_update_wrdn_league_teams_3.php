<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWrdnLeagueTeams3 extends Migration
{
    public function up()
    {
        Schema::table('wrdn_league_teams', function($table)
        {
            $table->dropColumn('tag');
        });
    }
    
    public function down()
    {
        Schema::table('wrdn_league_teams', function($table)
        {
            $table->string('tag', 125);
        });
    }
}
