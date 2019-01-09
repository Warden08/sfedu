<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWrdnLeaguePlayers extends Migration
{
    public function up()
    {
        Schema::create('wrdn_league_players', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->integer('age');
            $table->string('portret', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wrdn_league_players');
    }
}
