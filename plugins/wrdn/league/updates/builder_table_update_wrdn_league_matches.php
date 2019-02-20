<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWrdnLeagueMatches extends Migration
{
    public function up()
    {
        Schema::table('wrdn_league_matches', function($table)
        {
            $table->string('score2');
            $table->renameColumn('score', 'score1');
        });
    }
    
    public function down()
    {
        Schema::table('wrdn_league_matches', function($table)
        {
            $table->dropColumn('score2');
            $table->renameColumn('score1', 'score');
        });
    }
}
