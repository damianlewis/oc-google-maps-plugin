<?php

namespace DamianLewis\GoogleMaps;

use DamianLewis\GoogleMaps\Components\GoogleMap;
use DamianLewis\GoogleMaps\Models\Settings;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Google Maps',
            'description' => 'Provides Google Maps integration services.',
            'author' => 'Damian Lewis',
            'icon' => 'icon-map-o',
            'homepage' => 'https://github.com/damianlewis/oc-googlemaps-plugin'
        ];
    }

    public function registerComponents()
    {
        return [
            GoogleMap::class => 'googleMap'
        ];
    }

    public function registerPermissions()
    {
        return [
            'damianlewis.googlemaps.configure' => [
                'tab' => 'Google Maps',
                'label' => 'Configure Google Maps access.'
            ]
        ];
    }

    public function registerSettings(): array
    {
        return [
            'settings' => [
                'label' => 'Google Maps',
                'description' => 'Configure Google Maps API access.',
                'icon' => 'icon-map-o',
                'class' => Settings::class,
                'permissions' => ['damianlewis.googlemaps.configure'],
                'keywords' => 'google, maps',
                'order' => 601
            ]
        ];
    }
}
