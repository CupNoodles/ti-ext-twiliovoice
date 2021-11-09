## Twilio Voice Notifications 

Allows for voice calls to be triggered by automation events. 

Depends on having an active Twilio account with at least one phone number with voice enabled. Standard Twilio fees will apply per call. 

### Installation

Clone this repo into `extensions/cupnoodles/twiliovoice`, navigate to this folder and run `composer install` and hit the play button under 'Extensions'. 

### Usage

Under Settings => Twilio Voice Notification Settings, the origin phone number, account SID and Auth Token are required. Please note that the SID and Auth Token are the ones from Account => General Settings in the Twilio dashboard (not the menu titled "API Keys").

Unter Tools => Automations, create a new automation with the conditions that you'd like the call to be triggered from.  Under the Actions tab, add the 'Send Twilio Voice Call' action and populate fields for the phone number that you'd like to have receive the call, and the message that you'd like the call to contain. 

### NB (further todos)

This automation event does not use any queueing features yet. As such, I am unclear of what exactly happens if Twilio attempts to call a landline phone that's busy or unavailable. Most likely, the call will be dropped and you will not receive the notification. Please keep this in mind when using this extension!
