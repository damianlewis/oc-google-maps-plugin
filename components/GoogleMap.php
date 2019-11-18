<?php

namespace DamianLewis\GoogleMaps\Components;

use ApplicationException;
use Cms\Classes\ComponentBase;
use DamianLewis\GoogleMaps\Models\Settings;

class GoogleMap extends ComponentBase
{
    public $apiKey;
    public function componentDetails()
    {
        return [
            'name' => 'Google Map',
            'description' => 'Display a Google Map on the page.'
        ];
    }

    public function defineProperties()
    {
        return [
            'id' => [
                'title' => 'ID',
                'default' => 'googleMap',
                'description' => 'The ID of the element the map should attached to'
            ],
            'latitude' => [
                'title' => 'Latitude',
                'default' => -34.397,
                'type' => 'string'
            ],
            'longitude' => [
                'title' => 'Longitude',
                'default' => 150.644,
                'type' => 'string'
            ],
            'width' => [
                'title' => 'Width',
                'default' => '100%',
                'type' => 'string'
            ],
            'height' => [
                'title' => 'Height',
                'default' => '350px',
                'type' => 'string'
            ],
            'zoom' => [
                'title' => 'Zoom',
                'default' => 12,
                'type' => 'string'
            ],
            'mapTypeId' => [
                'title' => 'Map Type',
                'default' => 'roadmap',
                'type' => 'dropdown',
                'options' => [
                    'roadmap' => 'Roadmap',
                    'satellite' => 'Satellite',
                    'hybrid' => 'Hybrid',
                    'terrain' => 'Terrain'
                ]
            ],
            'showMarker' => [
                'title' => 'Show Marker',
                'default' => 'true',
                'type' => 'checkbox',
                'group' => 'Maker'
            ],
        ];
    }

    public function onRun()
    {
        $settings = Settings::instance();

        if (!$settings->api_key) {
            throw new ApplicationException('Google Maps API key is not configured.');
        }

        $this->apiKey = $settings->api_key;
    }
}
