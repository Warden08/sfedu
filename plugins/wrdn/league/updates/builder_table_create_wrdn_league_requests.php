<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWrdnLeagueRequests extends Migration
{
    public function up()
    {
        Schema::create('wrdn_league_requests', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('team_name');
            $table->string('team_tag');
            $table->string('team_logo');
            $table->string('game');
            $table->string('pl1_nick');
            $table->string('pl2_nick');
            $table->string('pl3_nick');
            $table->string('pl4_nick');
            $table->string('pl5_nick');
            $table->string('pl1_name');
            $table->string('pl2_name');
            $table->string('pl3_name');
            $table->string('pl4_name');
            $table->string('pl5_name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wrdn_league_requests');
    }
}
