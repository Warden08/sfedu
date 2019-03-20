<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWrdnLeaguePlayers3 extends Migration
{
    public function up()
    {
        Schema::table('wrdn_league_players', function($table)
        {
            $table->string('patronymic', 255);
            $table->string('university', 255);
            $table->string('vk', 255);
        });
    }
    
    public function down()
    {
        Schema::table('wrdn_league_players', function($table)
        {
            $table->dropColumn('patronymic');
            $table->dropColumn('university');
            $table->dropColumn('vk');
        });
    }
}
