<?php
namespace Craft;

class JsonTransformsPlugin extends BasePlugin {

    function getName()
    {
         return Craft::t('Json Transforms');
    }

    function getVersion()
    {
        return '1.0';
    }

    function getDeveloper()
    {
        return 'Michael Westwood';
    }

    function getDeveloperUrl()
    {
        return 'https://twitter.com/mijewe';
    }
}
