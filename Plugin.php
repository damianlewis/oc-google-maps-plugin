<?php

namespace DamianLewis\GoogleMaps;

use DamianLewis\GoogleMaps\Components\GoogleMap;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Google Maps',
            'description' => 'Manage the developer settings for Google Maps.',
            'author'      => 'Damian Lewis',
            'icon'        => 'icon-map-o'
        ];
    }

    public function registerComponents()
    {
        return [
            GoogleMap::class => 'googleMap'
        ];
    }
}
