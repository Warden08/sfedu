<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWrdnLeagueSolorequests extends Migration
{
    public function up()
    {
        Schema::table('wrdn_league_solorequests', function($table)
        {
            $table->text('decks')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('wrdn_league_solorequests', function($table)
        {
            $table->string('decks', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
