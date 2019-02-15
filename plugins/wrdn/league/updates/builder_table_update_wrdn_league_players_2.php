<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWrdnLeaguePlayers2 extends Migration
{
    public function up()
    {
        Schema::table('wrdn_league_players', function($table)
        {
            $table->string('slug', 255);
        });
    }
    
    public function down()
    {
        Schema::table('wrdn_league_players', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
