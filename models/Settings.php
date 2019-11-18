<?php

namespace DamianLewis\GoogleMaps\Models;

use Model;
use October\Rain\Database\Traits\Validation;
use System\Behaviors\SettingsModel;

class Settings extends Model
{
    use Validation;

    public $implement = [
        SettingsModel::class
    ];

    public $requiredPermissions = ['damianlewis.googlemaps.configure'];

    public $settingsCode = 'damianlewis_googlemaps_settings';

    public $settingsFields = 'fields.yaml';

    public $rules = [
        'api_key' => 'required'
    ];
}
