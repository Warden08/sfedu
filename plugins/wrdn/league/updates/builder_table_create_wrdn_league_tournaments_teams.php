<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWrdnLeagueTournamentsTeams extends Migration
{
    public function up()
    {
        Schema::create('wrdn_league_tournaments_teams', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('tournament_id');
            $table->integer('team_id');
            $table->primary(['tournament_id','team_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wrdn_league_tournaments_teams');
    }
}
