<?php 
use wrdn\Video\Models\Video;class Cms5c69008579cd4311642150_75cadf4f030018c01800f9f25d3f4319Class extends Cms\Classes\PageCode
{
public function onStart() {
    
    $videos = Video::orderBy('id', 'desc')->paginate(20);
    
    $this['videos'] = $videos;
}
}
