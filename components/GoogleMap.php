<?php

declare(strict_types=1);

namespace DamianLewis\GoogleMaps\Components;

use Cms\Classes\ComponentBase;
use DamianLewis\GoogleMaps\Models\Settings;

class GoogleMap extends ComponentBase
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $style;

    public function componentDetails(): array
    {
        return [
            'name' => 'Google Map',
            'description' => 'Display a Google Map on the page.'
        ];
    }

    public function defineProperties(): array
    {
        return [
            'id' => [
                'title' => 'Element ID',
                'default' => 'googleMap',
                'description' => 'The ID of the element the map should attached to.'
            ],
            'class' => [
                'title' => 'CSS Class',
                'description' => 'The CSS class to add to the containing element.'
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
                'type' => 'string'
            ],
            'height' => [
                'title' => 'Height',
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
                'description' => 'URL for image to use as the map maker.',
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

    public function onRun(): void
    {
        $settings = Settings::instance();

        $this->apiKey = $settings->api_key;
        $this->style = $settings->style;
    }
}
