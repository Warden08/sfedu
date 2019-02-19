<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWrdnLeagueMatchesTeam1 extends Migration
{
    public function up()
    {
        Schema::create('wrdn_league_matches_team1', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('match_id');
            $table->integer('team1_id');
            $table->primary(['match_id','team1_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wrdn_league_matches_team1');
    }
}
