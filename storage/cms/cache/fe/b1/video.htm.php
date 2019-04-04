<?php 
use wrdn\Video\Models\Video;
class Cms5ca5c51e55eff290010230_a2acdc49bb29b55bc579f502c755c777Class extends Cms\Classes\PageCode
{
public function onStart() {
        $videos = Video::orderBy('id', 'desc')->paginate(20);
    
    $this['videos'] = $videos;
}
}
