<?php

namespace DamianLewis\GoogleMaps\Components;

use Cms\Classes\ComponentBase;

class GoogleMap extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Google Map Component',
            'description' => 'Display a Google Map on the page.'
        ];
    }

    public function defineProperties()
    {
        return [
            'latitude'   => [
                'title'   => 'Latitude',
                'default' => 51.751623
            ],
            'longitude'  => [
                'title'   => 'Longitude',
                'default' => -0.342130
            ],
            'zoom'       => [
                'title'   => 'Zoom',
                'default' => 12
            ],
            'mapTypeId'  => [
                'title'   => 'Map Type',
                'default' => 'roadmap',
                'type'    => 'dropdown',
                'options' => [
                    'roadmap'   => 'Roadmap',
                    'satellite' => 'Satellite',
                    'hybrid'    => 'Hybrid',
                    'terrain'   => 'Terrain'
                ]
            ],
            'showMarker' => [
                'title'   => 'Show Marker',
                'default' => 'true',
                'type'    => 'checkbox',
            ]
        ];
    }
}
