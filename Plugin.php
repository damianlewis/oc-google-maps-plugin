<?php

declare(strict_types=1);

namespace DamianLewis\GoogleMaps;

use DamianLewis\GoogleMaps\Components\GoogleMap;
use DamianLewis\GoogleMaps\Models\Settings;
use System\Classes\PluginBase;
use System\Classes\SettingsManager;

class Plugin extends PluginBase
{
    public function pluginDetails(): array
    {
        return [
            'name' => 'Google Maps',
            'description' => 'Provides Google Maps integration.',
            'author' => 'Damian Lewis',
            'icon' => 'icon-map-o',
            'homepage' => 'https://github.com/damianlewis/oc-googlemaps-plugin'
        ];
    }

    public function registerComponents(): array
    {
        return [
            GoogleMap::class => 'googleMap'
        ];
    }

    public function registerPermissions(): array
    {
        return [
            'damianlewis.googlemaps.access_settings' => [
                'tab' => 'Google Maps',
                'label' => 'Access Google Maps settings.'
            ]
        ];
    }

    public function registerSettings(): array
    {
        return [
            'settings' => [
                'label' => 'Google Maps',
                'description' => 'Manage Google Maps configuration.',
                'icon' => 'icon-map-o',
                'class' => Settings::class,
                'category' => SettingsManager::CATEGORY_MYSETTINGS,
                'permissions' => ['damianlewis.googlemaps.access_settings']
            ]
        ];
    }
}
