<?php 
use wrdn\Video\Models\Video;class Cms5c90315acb7f7510179413_f0f701ae5fc94e098db50855e3b62b20Class extends Cms\Classes\PageCode
{
public function onStart() {
    
    $videos = Video::orderBy('id', 'desc')->paginate(20);
    
    $this['videos'] = $videos;
}
}
