<?php namespace wrdn\video\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWrdnVideoVideos15 extends Migration
{
    public function up()
    {
        Schema::table('wrdn_video_videos', function($table)
        {
            $table->dropColumn('date');
        });
    }
    
    public function down()
    {
        Schema::table('wrdn_video_videos', function($table)
        {
            $table->dateTime('date');
        });
    }
}
