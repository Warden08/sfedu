<?php namespace wrdn\video\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWrdnVideoVideos14 extends Migration
{
    public function up()
    {
        Schema::rename('wrdn_video_videos1', 'wrdn_video_videos');
    }
    
    public function down()
    {
        Schema::rename('wrdn_video_videos', 'wrdn_video_videos1');
    }
}
