<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. A "local" driver, as well as a variety of cloud
    | based drivers are available for your choosing. Just store away!
    |
    | Supported: "local", "ftp", "s3", "rackspace"
    |
    */

    'default' => 'gcs',

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => 's3',

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => 'your-key',
            'secret' => 'your-secret',
            'region' => 'your-region',
            'bucket' => 'your-bucket',
        ],

        'gcs' => [
            // Select the Google Cloud Storage Disk
            'driver'                               => 'gcs',
            // The id of your new service account
            'service_account'                      => 'id-2connect-cloud-storage@laravel-stack.iam.gserviceaccount.com',
            // The location of the p12 service account certificate
            'service_account_certificate'          => storage_path() . '/Laravel Stack-94647d1ceffb.p12',
            // The password you will be given when creating the service account
            'service_account_certificate_password' => 'notasecret',
            // The bucket you want this disk to point at
            'bucket'                               => env('GCS_FILESYSTEM_BUCKET','capital-advisors-storage-bucket'),
        ],

    ],

];
