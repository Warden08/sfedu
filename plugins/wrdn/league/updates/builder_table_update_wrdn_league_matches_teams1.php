<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWrdnLeagueMatchesTeams1 extends Migration
{
    public function up()
    {
        Schema::rename('wrdn_league_matches_team1', 'wrdn_league_matches_teams1');
    }
    
    public function down()
    {
        Schema::rename('wrdn_league_matches_teams1', 'wrdn_league_matches_team1');
    }
}
