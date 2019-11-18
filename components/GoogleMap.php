<?php

namespace DamianLewis\GoogleMaps\Components;

use ApplicationException;
use Cms\Classes\ComponentBase;
use DamianLewis\GoogleMaps\Models\Settings;

class GoogleMap extends ComponentBase
{
    public $apiKey;
    public $style;

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
            'icon' => [
                'title' => 'Map Marker',
                'description' => 'URL for image to use as the map maker',
                'type' => 'string',
                'group' => 'Maker'
            ],
            'showMarker' => [
                'title' => 'Show Marker',
                'default' => 'true',
                'type' => 'checkbox',
                'group' => 'Maker'
            ],
            'zoomControl' => [
                'title' => 'Zoom Control',
                'default' => 'true',
                'type' => 'checkbox',
                'group' => 'Controls'
            ],
            'mapTypeControl' => [
                'title' => 'Map Type Control',
                'default' => 'true',
                'type' => 'checkbox',
                'group' => 'Controls'
            ],
            'streetViewControl' => [
                'title' => 'Street View Control',
                'default' => 'true',
                'type' => 'checkbox',
                'group' => 'Controls'
            ],
            'rotateControl' => [
                'title' => 'Rotate Control',
                'default' => 'true',
                'type' => 'checkbox',
                'group' => 'Controls'
            ],
            'scaleControl' => [
                'title' => 'Scale Control',
                'default' => 'true',
                'type' => 'checkbox',
                'group' => 'Controls'
            ],
            'fullscreenControl' => [
                'title' => 'Full Screen Control',
                'default' => 'true',
                'type' => 'checkbox',
                'group' => 'Controls'
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
        $this->style = $settings->style;
    }
}
