<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Unique Contact Page
    |--------------------------------------------------------------------------
    |
    | This determines whether or not there is a unique page
    | for a contact form. By default this page is visible
    |
    */

    'page' => true,

    'mail' => [

        /*
        |--------------------------------------------------------------------------
        | Contact "From" Address
        |--------------------------------------------------------------------------
        |
        | You may wish for all e-mails sent by your contact form to be sent from the
        | same address. Here, you may specify a name and address that is used by
        | your application to send the contact form submission. By default the
        | settings use the values defined in your global config/mail.php
        |
        */

        'from' => [
            'address' => config('mail.from.address','info@42connect.com'),
            'name' => config('mail.from.address','42Connect Testing')
        ],

        /*
        |--------------------------------------------------------------------------
        | Contact "BCC" Address
        |--------------------------------------------------------------------------
        |
        | You may wish for all e-mails sent by your contact form to "bcc'
        | to a set of individuals email addresses. You can provide the
        |list of emails here as a comma separated list.
        |
        */
        'bcc' => [],

        /*
        |--------------------------------------------------------------------------
        | Contact "To" Address
        |--------------------------------------------------------------------------
        |
        | This address is the address to which all
        | contact form submissions are sent.
        |
        */

        'to' => [
            'address' => 'damien@42connect.com',
            'name' => 'Damien Retzinger'
        ]
    ],
];

