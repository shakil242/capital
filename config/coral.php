<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Coral Timezone
    |--------------------------------------------------------------------------
    |
    | Coral needs to convert some time zones around so that can probably handle
    | times for publishing posts and the like. Here you can set the PHP timezone
    | you need to convert timezones into. These are stored in the db as UTC ALWAYS
    | but this will change the frontend display of the time.
    |
    */
    'timezone' => 'EST',

    'permissions' => [
        'admin.blog.post.index',
        'admin.blog.post.create',
        'admin.blog.post.edit',
        'admin.blog.post.delete',

        'admin.blog.category.index',
        'admin.blog.category.create',
        'admin.blog.category.edit',
        'admin.blog.category.delete',

        'admin.users.user.index',
        'admin.users.user.create',
        'admin.users.user.edit',
        'admin.users.user.delete',

        'admin.administrator.settings'
    ],
    'blog' => [
        'title' => 'reCap BLOG',
        'description' => 'Clear and actionable insights on wealth management from Capital Advisors, Ltd.',
        'logo' => '/images/logo.png',

        'post' => [
            'pagination' => 5,
            'archive' => [
                'days' => 0,
                'weeks' => 10,
                'months' => 0,
                'years' => 0,
            ],
            'images' =>[
                'vendor/42connect/coral/img/default-image-1.jpg',
                'vendor/42connect/coral/img/default-image-2.jpg',
                'vendor/42connect/coral/img/default-image-3.jpg',
                'vendor/42connect/coral/img/default-image-4.jpg',
                'vendor/42connect/coral/img/default-image-5.jpg',
            ]
        ],
        'image' => [
            'sizes' => [
                'tiny' => [
                    'width' => 50,
                    'height' => 50,
                ],
                'thumbnail' => [
                    'width' => 100,
                    'height' => 100,
                ],
                'small' => [
                    'width' => 500,
                    'height' => 300,
                ],
                'main' => [
                    'width' => 800,
                    'height' => 480,
                ]
            ]
        ]
    ],
    'mail' => [

        /*
        |--------------------------------------------------------------------------
        | Coral Enable/Disable Mail Toggle
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
        | Coral "From" Address
        |--------------------------------------------------------------------------
        |
        | You may wish for all e-mails sent by your coral to be sent from the
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
        | Coral "BCC" Address
        |--------------------------------------------------------------------------
        |
        | You may wish for all e-mails sent by your newsletter form to "bcc'
        | to a set of individuals email addresses. You can provide the
        | list of emails here as a comma separated list.
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
    | Coral Integrations
    |--------------------------------------------------------------------------
    |
    | This is the set of integrations that the coral supports, you can
    | enable as many as you like.
    |
    | There several different types of integrations
    |
    |
    */
    'integrations' => [
        'mail' => [
            'mailchimp' => [
                'enabled' => true,
                'api-key' => env('CORAL_MAILCHIMP_API_KEY', "OVERRIDDEN_IN_ENV"),
                'list-id' => env('CORAL_MAILCHIMP_LIST_ID', "OVERRIDDEN_IN_ENV"),
            ],
            'campaignmonitor' => [
                'enabled' => false,
                'api-key' => env('CORAL_CAMPAIGNMONITOR_API_KEY', ""),
                'client-id' => env('CORAL_CAMPAIGNMONITOR_CLIENT_ID',""),
                'list-id' => env('CORAL_CAMPAIGNMONITOR_LIST_ID', ""),
            ],
        ]
    ]
];