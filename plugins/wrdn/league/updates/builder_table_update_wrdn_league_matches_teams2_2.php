<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWrdnLeagueMatchesTeams22 extends Migration
{
    public function up()
    {
        Schema::table('wrdn_league_matches_teams2', function($table)
        {
            $table->dropPrimary(['match_id','team2_id']);
            $table->renameColumn('team2_id', 'team_id');
            $table->primary(['match_id','team_id']);
        });
    }
    
    public function down()
    {
        Schema::table('wrdn_league_matches_teams2', function($table)
        {
            $table->dropPrimary(['match_id','team_id']);
            $table->renameColumn('team_id', 'team2_id');
            $table->primary(['match_id','team2_id']);
        });
    }
}
