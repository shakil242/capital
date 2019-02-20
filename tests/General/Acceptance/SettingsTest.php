<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SettingsTest extends TestCase
{
    public function testTheNewsletterMailChimpIntegrationIsEnabled()
    {
        $this->assertEquals(true,config('newsletter.integrations.mailchimp.enabled'));
    }
}
