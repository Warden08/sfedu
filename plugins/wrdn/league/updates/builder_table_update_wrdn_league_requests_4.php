<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWrdnLeagueRequests4 extends Migration
{
    public function up()
    {
        Schema::table('wrdn_league_requests', function($table)
        {
            $table->string('cap_battletag');
            $table->string('decks');
        });
    }
    
    public function down()
    {
        Schema::table('wrdn_league_requests', function($table)
        {
            $table->dropColumn('cap_battletag');
            $table->dropColumn('decks');
        });
    }
}
