<?php 
use wrdn\Video\Models\Video;class Cms5c6dc9c51330d197633049_59e84a2d96a978c1d325795152131687Class extends Cms\Classes\PageCode
{
public function onStart() {
    
    $videos = Video::orderBy('id', 'desc')->paginate(20);
    
    $this['videos'] = $videos;
}
}
