<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWrdnLeagueSeasonsTournaments extends Migration
{
    public function up()
    {
        Schema::create('wrdn_league_seasons_tournaments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('season_id');
            $table->integer('tournament_id');
            $table->primary(['season_id','tournament_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wrdn_league_seasons_tournaments');
    }
}
