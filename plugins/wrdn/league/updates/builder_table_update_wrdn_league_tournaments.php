<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWrdnLeagueTournaments extends Migration
{
    public function up()
    {
        Schema::table('wrdn_league_tournaments', function($table)
        {
            $table->string('name', 255);
        });
    }
    
    public function down()
    {
        Schema::table('wrdn_league_tournaments', function($table)
        {
            $table->dropColumn('name');
        });
    }
}
