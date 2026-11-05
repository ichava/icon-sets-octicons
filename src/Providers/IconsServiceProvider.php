<?php

declare(strict_types=1);

namespace Simtabi\Laranail\Ichava\IconSetsOcticons\Providers;

use Simtabi\Laranail\Ichava\Support\IconPackServiceProvider;
use Simtabi\Laranail\Ichava\IconSetsOcticons\Constants\IconsConstants;
use Simtabi\Laranail\Ichava\IconSetsOcticons\View\Components\IconComponent;

/**
 * Registers the Octicons set with the Ichava registry on boot.
 */
class IconsServiceProvider extends IconPackServiceProvider
{
    protected function constantsClass(): string
    {
        return IconsConstants::class;
    }

    protected function componentClass(): string
    {
        return IconComponent::class;
    }
}
