<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Enabled Post Newsletter Page
    |--------------------------------------------------------------------------
    |
    | This determines whether or not you can post to the newsletter route
    |
    */
    'store' => true,

    'mail' => [

        /*
        |--------------------------------------------------------------------------
        | Newsletter Enable/Disable Mail Toggle
        |--------------------------------------------------------------------------
        |
        | Oftentimes you may need to disable the automated email that gets sent out
        | from this module. You can disable this setting here. It is enabled by
        | default. This is especially useful when you only need the associated
        | integration.
        |
        */

        'enabled' => false,

        /*
        |--------------------------------------------------------------------------
        | Newsletter "From" Address
        |--------------------------------------------------------------------------
        |
        | You may wish for all e-mails sent by your newsletter form to be sent from the
        | same address. Here, you may specify a name and address that is used by
        | your application to send the newsletter form submission. By default the
        | settings use the values defined in your global config/mail.php
        |
        */

        'from' => [
            'address' => config('mail.from.address','info@42connect.com'),
            'name' => config('mail.from.address','42Connect Testing')
        ],

        /*
        |--------------------------------------------------------------------------
        | Newsletter "BCC" Address
        |--------------------------------------------------------------------------
        |
        | You may wish for all e-mails sent by your newsletter form to "bcc'
        | to a set of individuals email addresses. You can provide the
        |list of emails here as a comma separated list.
        |
        */
        'bcc' => ['brian@42connect.com'],

        /*
        |--------------------------------------------------------------------------
        | Newsletter "To" Address
        |--------------------------------------------------------------------------
        |
        | This address is the address to which all
        | newsletter form submissions are sent.
        |
        */

        'to' => [
            'address' => 'damien@42connect.com',
            'name' => 'Damien Retzinger'
        ]
    ],
    /*
    |--------------------------------------------------------------------------
    | Newsletter Integrations
    |--------------------------------------------------------------------------
    |
    | This is the set of integrations that the newsletter supports, you can
    | enable as many as you like and it will subscribe your user to the list
    | Please set the configuration credentials in your env file.
    |
    */
    'integrations' => [
        'mailchimp' => [
            'enabled' => true,
            'api-key' => env('NEWSLETTER_MAILCHIMP_API_KEY'),
            'list-id' => env('NEWSLETTER_MAILCHIMP_LIST_ID'),
        ],
        'campaignmonitor' => [
            'enabled' => false,
            'api-key' => env('NEWSLETTER_CAMPAIGNMONITOR_API_KEY', ""),
            'client-id' => env('NEWSLETTER_CAMPAIGNMONITOR_CLIENT_ID',""),
            'list-id' => env('NEWSLETTER_CAMPAIGNMONITOR_LIST_ID', ""),
        ]
    ]
];

?>