<?php
namespace SocialiteProviders\Zendesk;

use SocialiteProviders\Manager\SocialiteWasCalled;

class ZendeskExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'zendesk', __NAMESPACE__.'\Provider'
        );
    }
}
