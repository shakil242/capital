<?php

namespace App\Listeners;

use FourtyTwoConnect\Coral\Events\BlogSubscriptionRequest;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AddBlogSubscriberToNewsletter
{
    protected $listId;
    protected $enabled;
    protected $mailchimp;

    /**
     * AddNewBlogSubscriberToCampaignMonitor constructor.
     */
    public function __construct(\Mailchimp $mailchimp, $listid = null)
    {
        $this->listId = $listid ? $listid : config("newsletter.integrations.mailchimp.list-id");
        $this->mailchimp = $mailchimp;
        $this->enabled = config("newsletter.integrations.mailchimp.enabled");
    }

    /**
     * Handle the event.
     *
     * @param  BlogSubscriptionRequest  $event
     * @return void|boolean
     */
    public function handle(BlogSubscriptionRequest $event)
    {
        if(!$this->enabled){return true;}

        $this->mailchimp->lists->subscribe($this->listId,['email' => $event->email],null,'html',false);
    }
}
