<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWrdnLeagueTournaments extends Migration
{
    public function up()
    {
        Schema::create('wrdn_league_tournaments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('game', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wrdn_league_tournaments');
    }
}
