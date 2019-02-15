<?php namespace wrdn\video\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteWrdnVideoVideos extends Migration
{
    public function up()
    {
        Schema::dropIfExists('wrdn_video_videos');
    }
    
    public function down()
    {
        Schema::create('wrdn_video_videos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 191);
            $table->text('img');
            $table->string('slug', 191);
            $table->string('video_url', 191);
            $table->string('duration', 10);
            $table->text('text');
            $table->string('video_id', 191);
            $table->integer('likes');
            $table->integer('views');
            $table->dateTime('date');
        });
    }
}
