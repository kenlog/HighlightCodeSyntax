<?php

namespace Kanboard\Plugin\HighlightCodeSyntax;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{

    public function initialize()
    {
        $this->hook->on("template:layout:css", array("template" => "plugins/HighlightCodeSyntax/Assets/css/style.css"));

        $this->hook->on("template:layout:css", array("template" => "plugins/HighlightCodeSyntax/Assets/css/prism.css"));

        $this->hook->on('template:layout:js', array('template' => 'plugins/HighlightCodeSyntax/Assets/js/clipboard.min.js'));

        $this->hook->on('template:layout:js', array('template' => 'plugins/HighlightCodeSyntax/Assets/js/prism.js'));
    }

    public function getPluginName()
    {
        return 'HighlightCodeSyntax';
    }

    public function getPluginDescription()
    {
        return t('For code snippets the plugin is able to highlight code syntax in more than 151 languages, including PHP, Javascript, Python, HTML and CSS.');
    }

    public function getPluginAuthor()
    {
        return 'Valentino Pesce';
    }

    public function getPluginVersion()
    {
        return '1.0.3';
    }

    public function getCompatibleVersion()
    {
        return '>=1.0.48';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/kenlog/HighlightCodeSyntax';
    }

}
