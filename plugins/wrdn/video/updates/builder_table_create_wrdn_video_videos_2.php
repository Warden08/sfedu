<?php namespace wrdn\video\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWrdnVideoVideos2 extends Migration
{
    public function up()
    {
        Schema::create('wrdn_video_videos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('img');
            $table->string('slug');
            $table->string('video_url');
            $table->string('duration');
            $table->text('text');
            $table->string('video_id');
            $table->integer('likes');
            $table->integer('views');
            $table->dateTime('date');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wrdn_video_videos');
    }
}
