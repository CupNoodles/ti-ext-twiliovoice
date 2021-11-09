<?php

namespace CupNoodles\TwilioVoice\Models;

use Model;

/**
 * @method static instance()
 */
class TwilioVoiceSettings extends Model
{
    public $implement = ['System\Actions\SettingsModel'];

    // A unique code
    public $settingsCode = 'cupnoodles_twiliovoice_settings';

    // Reference to field configuration
    public $settingsFieldsConfig = 'twiliovoicesettings';

    //
    //
    //
}
