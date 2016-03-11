<?php

namespace Kanboard\Plugin\Theme_auto_day_night;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->hook->attach('template:layout:head', 'theme_auto_day_night:layout/head');
    }

    public function getPluginName()
    {
        return 'Theme_auto_day_night';
    }

    public function getPluginDescription()
    {
        return t('Example dark mode including users timezone as per #1967');
    }

    public function getPluginAuthor()
    {
        return 'CoMPa Technology';
    }

    public function getPluginVersion()
    {
        return '0.1.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/compa/plugin-theme-dark';
    }
}
