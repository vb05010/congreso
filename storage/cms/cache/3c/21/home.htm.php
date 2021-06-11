<?php 
use RainLab\Pages\Classes\Page;
class Cms60c3d51a1c1b3308269020_3f3da7db91bc1691b0dcf9072f9adf8dClass extends Cms\Classes\LayoutCode
{
public function onStart()
{
    $page = Page::find('chairs');
    $this['chairsPages'] = $page->getChildren();
}
}
