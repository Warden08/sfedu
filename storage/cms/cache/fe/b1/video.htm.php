<?php 
use wrdn\Video\Models\Video;class Cms5c8be2d9c8906850496586_e9de981297020b74a2c48ed87df9892dClass extends Cms\Classes\PageCode
{
public function onStart() {
    
    $videos = Video::orderBy('id', 'desc')->paginate(20);
    
    $this['videos'] = $videos;
}
}
