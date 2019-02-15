<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWrdnLeagueSeasonsTeams extends Migration
{
    public function up()
    {
        Schema::create('wrdn_league_seasons_teams', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('season_id');
            $table->integer('team_id');
            $table->primary(['season_id','team_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wrdn_league_seasons_teams');
    }
}
