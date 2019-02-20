<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWrdnLeagueMatches2 extends Migration
{
    public function up()
    {
        Schema::table('wrdn_league_matches', function($table)
        {
            $table->string('score1', 191)->nullable()->change();
            $table->string('score2')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('wrdn_league_matches', function($table)
        {
            $table->string('score1', 191)->nullable(false)->change();
            $table->string('score2', 191)->nullable(false)->change();
        });
    }
}
