<?php namespace wrdn\video\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWrdnVideoVideos1 extends Migration
{
    public function up()
    {
        Schema::rename('wrdn_video_videos', 'wrdn_video_videos1');
    }
    
    public function down()
    {
        Schema::rename('wrdn_video_videos1', 'wrdn_video_videos');
    }
}
