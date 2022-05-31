<?php

namespace SocialiteProviders\TikTokCN;

use SocialiteProviders\Manager\SocialiteWasCalled;

class TikTokCNExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('tiktok-cn', Provider::class);
    }
}
