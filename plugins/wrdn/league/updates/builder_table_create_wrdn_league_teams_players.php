<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWrdnLeagueTeamsPlayers extends Migration
{
    public function up()
    {
        Schema::create('wrdn_league_teams_players', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('team_id');
            $table->integer('player_id');
            $table->primary(['team_id','player_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wrdn_league_teams_players');
    }
}
