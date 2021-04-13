<?php

namespace SocialiteProviders\FreeAgent;

use SocialiteProviders\Manager\SocialiteWasCalled;

class FreeAgentExtendSocialite
{
    /**
     * Register the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('freeagent', Provider::class);
    }
}