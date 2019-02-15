<?php namespace wrdn\video\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWrdnVideoVideos16 extends Migration
{
    public function up()
    {
        Schema::table('wrdn_video_videos', function($table)
        {
            $table->dateTime('date');
        });
    }
    
    public function down()
    {
        Schema::table('wrdn_video_videos', function($table)
        {
            $table->dropColumn('date');
        });
    }
}
