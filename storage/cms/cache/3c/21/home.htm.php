<?php 
use RainLab\Pages\Classes\Page;class Cms60ca7a5cb4674941190023_e0974ff4e0f623ceb62b6fb247684927Class extends Cms\Classes\LayoutCode
{

public function onStart()
{
    $page = Page::find('chairs');
    $this['chairsPages'] = $page->getChildren();
}
}
