<?php 
use wrdn\Video\Models\Video;
class Cms5c928c16aa4b1747586637_466db865f0ad47d07d9ad01c43c22cb7Class extends Cms\Classes\PageCode
{
public function onStart() {
        $videos = Video::orderBy('id', 'desc')->paginate(20);
    
    $this['videos'] = $videos;
}
}
