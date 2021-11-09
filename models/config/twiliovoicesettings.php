<?php

/**
 * Model configuration options for settings model.
 */

return [
    'form' => [
        'toolbar' => [
            'buttons' => [
                'save' => ['label' => 'lang:admin::lang.button_save', 'class' => 'btn btn-primary', 'data-request' => 'onSave'],
                'saveClose' => [
                    'label' => 'lang:admin::lang.button_save_close',
                    'class' => 'btn btn-default',
                    'data-request' => 'onSave',
                    'data-request-data' => 'close:1',
                ],
            ],
        ],
        'fields' => [
            'from_phone' => [
                'label' => 'lang:cupnoodles.twiliovoice::default.from_phone',
                'type' => 'text',
                'commentAbove' => 'lang:cupnoodles.twiliovoice::default.from_phone_description'
            ],
            'twilio_sid' => [
                'label' => 'lang:cupnoodles.twiliovoice::default.twilio_sid',
                'type' => 'text'
            ],
            'twilio_auth_token' => [
                'label' => 'lang:cupnoodles.twiliovoice::default.twilio_auth_token',
                'type' => 'text'
            ]
        ]
    ],
];