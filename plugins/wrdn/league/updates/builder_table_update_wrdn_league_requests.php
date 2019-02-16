<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWrdnLeagueRequests extends Migration
{
    public function up()
    {
        Schema::table('wrdn_league_requests', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->string('team_name')->change();
            $table->string('team_tag')->change();
            $table->string('team_logo')->change();
            $table->string('game')->change();
            $table->string('pl1_nick')->change();
            $table->string('pl2_nick')->change();
            $table->string('pl3_nick')->change();
            $table->string('pl4_nick')->change();
            $table->string('pl5_nick')->change();
            $table->string('pl1_name')->change();
            $table->string('pl2_name')->change();
            $table->string('pl3_name')->change();
            $table->string('pl4_name')->change();
            $table->string('pl5_name')->change();
        });
    }
    
    public function down()
    {
        Schema::table('wrdn_league_requests', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->increments('id')->unsigned()->change();
            $table->string('team_name', 191)->change();
            $table->string('team_tag', 191)->change();
            $table->string('team_logo', 191)->change();
            $table->string('game', 191)->change();
            $table->string('pl1_nick', 191)->change();
            $table->string('pl2_nick', 191)->change();
            $table->string('pl3_nick', 191)->change();
            $table->string('pl4_nick', 191)->change();
            $table->string('pl5_nick', 191)->change();
            $table->string('pl1_name', 191)->change();
            $table->string('pl2_name', 191)->change();
            $table->string('pl3_name', 191)->change();
            $table->string('pl4_name', 191)->change();
            $table->string('pl5_name', 191)->change();
        });
    }
}
