<?php namespace Wrdn\league\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWrdnLeagueSolorequests extends Migration
{
    public function up()
    {
        Schema::create('wrdn_league_solorequests', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('cap_fio');
            $table->string('cap_nick');
            $table->string('cap_uni_info');
            $table->string('cap_birthday');
            $table->string('cap_battletag');
            $table->string('cap_vk');
            $table->string('decks');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wrdn_league_solorequests');
    }
}
