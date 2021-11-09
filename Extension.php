<?php 

namespace CupNoodles\TwilioVoice;


use System\Classes\BaseExtension;

use Igniter\Local\Classes\Location;
use Igniter\Local\Facades\Location as LocationFacade;
use Event;
use Config;
use Session;
use App;
use Request;

class Extension extends BaseExtension
{

    /**
     * Returns information about this extension.
     *
     * @return array
     */
    public function extensionMeta()
    {
        return [
            'name'        => 'TwilioVoice',
            'author'      => 'CupNoodles',
            'description' => 'Make Twilio Voice calls for same day orders',
            'icon'        => 'fas-phone',
            'version'     => '1.0.0'
        ];
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {
        
    }
    public function registerAutomationRules()
    {
        return [

            'actions' => [
                //\Igniter\User\AutomationRules\Actions\SendMailTemplate::class,
                \CupNoodles\TwilioVoice\AutomationRules\Actions\SendTwilioVoice::class
            ],
        ];
    }
    public function registerSettings()
    {
        return [
            'settings' => [
                'label' => 'Twilio Voice Notification Settings',
                'description' => 'Manage Twilio notification settings.',
                'icon' => 'fa fas-phone',
                'model' => 'CupNoodles\TwilioVoice\Models\TwilioVoiceSettings',
            ],
        ];
    }


}
