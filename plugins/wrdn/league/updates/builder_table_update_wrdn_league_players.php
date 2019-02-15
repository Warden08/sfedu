<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWrdnLeaguePlayers extends Migration
{
    public function up()
    {
        Schema::table('wrdn_league_players', function($table)
        {
            $table->string('nickname', 255);
        });
    }
    
    public function down()
    {
        Schema::table('wrdn_league_players', function($table)
        {
            $table->dropColumn('nickname');
        });
    }
}
