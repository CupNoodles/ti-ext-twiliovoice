<?php

namespace CupNoodles\TwilioVoice\AutomationRules\Actions;

use Igniter\Automation\Classes\BaseAction;
use Igniter\Flame\Exception\ApplicationException;
use IgniterLabs\Webhook\Classes\WebhookManager;
use Spatie\WebhookServer\WebhookCall;


use Twilio\Rest\Client;

use CupNoodles\TwilioVoice\Models\TwilioVoiceSettings;

class SendTwilioVoice extends BaseAction
{
    public function actionDetails()
    {
        return [
            'name' => 'Send Twilio Voice call',
            'description' => 'Trigger a Phone Call through Twilio',
        ];
    }

    public function defineFormFields()
    {
        return [
            'fields' => [
                'to_phone' => [
                    'label' => 'lang:cupnoodles.twiliovoice::default.to_phone',
                    'type' => 'text',
                    'comment' => 'lang:cupnoodles.twiliovoice::default.to_phone_comment',
                ],
                'voice_message' => [
                    'label' => 'lang:cupnoodles.twiliovoice::default.voice_message',
                    'type' => 'text',
                    'comment' => 'lang:cupnoodles.twiliovoice::default.voice_message_comment',
                ]
            ],
        ];
    }

    public function triggerAction($params)
    {

        $account_sid = TwilioVoiceSettings::get('twilio_sid');
        $auth_token = TwilioVoiceSettings::get('twilio_auth_token');

        $twilio_number = TwilioVoiceSettings::get('from_phone');

        $to_number = $this->model->to_phone;

        $client = new Client($account_sid, $auth_token);

        $client->account->calls->create(  
            $to_number,
            $twilio_number,
            [
                "twiml" => "<Response><Say>" . $this->model->voice_message ."</Say></Response>"
            ]
        );

    }
}
