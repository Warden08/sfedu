<?php 
use wrdn\Video\Models\Video;class Cms5c6b3d9134805695244938_34c14ba12ca8f95a7cf9410c8034d374Class extends Cms\Classes\PageCode
{
public function onStart() {
    
    $videos = Video::orderBy('id', 'desc')->paginate(20);
    
    $this['videos'] = $videos;
}
}
