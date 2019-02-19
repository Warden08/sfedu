<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWrdnLeagueMatchesTournaments extends Migration
{
    public function up()
    {
        Schema::create('wrdn_league_matches_tournaments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('match_id');
            $table->integer('tournament_id');
            $table->primary(['match_id','tournament_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wrdn_league_matches_tournaments');
    }
}
