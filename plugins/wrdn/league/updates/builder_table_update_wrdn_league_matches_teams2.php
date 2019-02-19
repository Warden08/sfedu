<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWrdnLeagueMatchesTeams2 extends Migration
{
    public function up()
    {
        Schema::rename('wrdn_league_matches_team2', 'wrdn_league_matches_teams2');
    }
    
    public function down()
    {
        Schema::rename('wrdn_league_matches_teams2', 'wrdn_league_matches_team2');
    }
}
