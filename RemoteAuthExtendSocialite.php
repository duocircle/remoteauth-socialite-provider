<?php

namespace SocialiteProviders\RemoteAuth;

use SocialiteProviders\Manager\SocialiteWasCalled;

class RemoteAuthExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('remoteauth', __NAMESPACE__.'\Provider');
    }
}
