<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWrdnLeagueMatchesTeams12 extends Migration
{
    public function up()
    {
        Schema::table('wrdn_league_matches_teams1', function($table)
        {
            $table->dropPrimary(['match_id','team1_id']);
            $table->renameColumn('team1_id', 'team_id');
            $table->primary(['match_id','team_id']);
        });
    }
    
    public function down()
    {
        Schema::table('wrdn_league_matches_teams1', function($table)
        {
            $table->dropPrimary(['match_id','team_id']);
            $table->renameColumn('team_id', 'team1_id');
            $table->primary(['match_id','team1_id']);
        });
    }
}
