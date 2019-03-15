<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWrdnLeagueRequests2 extends Migration
{
    public function up()
    {
        Schema::table('wrdn_league_requests', function($table)
        {
            $table->string('logo', 191);
            $table->string('cap_nick', 191);
            $table->string('p2_nick', 191);
            $table->string('p3_nick', 191);
            $table->string('p4_nick', 191);
            $table->string('p5_nick', 191);
            $table->string('cap_fio', 191);
            $table->string('p2_fio', 191);
            $table->string('p3_fio', 191);
            $table->string('p4_fio', 191);
            $table->string('p5_fio', 191);
            $table->string('p6_nick');
            $table->string('p6_fio');
            $table->string('university');
            $table->string('cap_birthday');
            $table->string('cap_uni_info');
            $table->string('cap_vk');
            $table->string('cap_steam');
            $table->string('cap_teams');
            $table->string('p2_birthday');
            $table->string('p2_uni_info');
            $table->string('p2_vk');
            $table->string('p2_steam');
            $table->string('p2_teams');
            $table->string('p3_birthday');
            $table->string('p3_uni_info');
            $table->string('p3_vk');
            $table->string('p3_steam');
            $table->string('p3_teams');
            $table->string('p4_birthday');
            $table->string('p4_uni_info');
            $table->string('p4_vk');
            $table->string('p4_steam');
            $table->string('p4_teams');
            $table->string('p5_birthday');
            $table->string('p5_uni_info');
            $table->string('p5_vk');
            $table->string('p5_steam');
            $table->string('p5_teams');
            $table->string('p6_birthday');
            $table->string('p6_uni_info');
            $table->string('p6_vk');
            $table->string('p6_steam');
            $table->string('p6_teams');
            $table->dropColumn('team_tag');
            $table->dropColumn('team_logo');
            $table->dropColumn('pl1_nick');
            $table->dropColumn('pl2_nick');
            $table->dropColumn('pl3_nick');
            $table->dropColumn('pl4_nick');
            $table->dropColumn('pl5_nick');
            $table->dropColumn('pl1_name');
            $table->dropColumn('pl2_name');
            $table->dropColumn('pl3_name');
            $table->dropColumn('pl4_name');
            $table->dropColumn('pl5_name');
        });
    }
    
    public function down()
    {
        Schema::table('wrdn_league_requests', function($table)
        {
            $table->dropColumn('logo');
            $table->dropColumn('cap_nick');
            $table->dropColumn('p2_nick');
            $table->dropColumn('p3_nick');
            $table->dropColumn('p4_nick');
            $table->dropColumn('p5_nick');
            $table->dropColumn('cap_fio');
            $table->dropColumn('p2_fio');
            $table->dropColumn('p3_fio');
            $table->dropColumn('p4_fio');
            $table->dropColumn('p5_fio');
            $table->dropColumn('p6_nick');
            $table->dropColumn('p6_fio');
            $table->dropColumn('university');
            $table->dropColumn('cap_birthday');
            $table->dropColumn('cap_uni_info');
            $table->dropColumn('cap_vk');
            $table->dropColumn('cap_steam');
            $table->dropColumn('cap_teams');
            $table->dropColumn('p2_birthday');
            $table->dropColumn('p2_uni_info');
            $table->dropColumn('p2_vk');
            $table->dropColumn('p2_steam');
            $table->dropColumn('p2_teams');
            $table->dropColumn('p3_birthday');
            $table->dropColumn('p3_uni_info');
            $table->dropColumn('p3_vk');
            $table->dropColumn('p3_steam');
            $table->dropColumn('p3_teams');
            $table->dropColumn('p4_birthday');
            $table->dropColumn('p4_uni_info');
            $table->dropColumn('p4_vk');
            $table->dropColumn('p4_steam');
            $table->dropColumn('p4_teams');
            $table->dropColumn('p5_birthday');
            $table->dropColumn('p5_uni_info');
            $table->dropColumn('p5_vk');
            $table->dropColumn('p5_steam');
            $table->dropColumn('p5_teams');
            $table->dropColumn('p6_birthday');
            $table->dropColumn('p6_uni_info');
            $table->dropColumn('p6_vk');
            $table->dropColumn('p6_steam');
            $table->dropColumn('p6_teams');
            $table->string('team_tag', 191);
            $table->string('team_logo', 191);
            $table->string('pl1_nick', 191);
            $table->string('pl2_nick', 191);
            $table->string('pl3_nick', 191);
            $table->string('pl4_nick', 191);
            $table->string('pl5_nick', 191);
            $table->string('pl1_name', 191);
            $table->string('pl2_name', 191);
            $table->string('pl3_name', 191);
            $table->string('pl4_name', 191);
            $table->string('pl5_name', 191);
        });
    }
}
