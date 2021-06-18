<?php namespace Zakir\AllFontIcons\Updates;

use Seeder;
use Zakir\AllFontIcons\Models\Settings;

class SeedIconsSettingModel extends Seeder
{
    public function run()
    {
		$settings = Settings::instance();
		$settings->font_awesome_link = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.0/css/all.min.css';
		$settings->save();
    }
}