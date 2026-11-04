<?php

declare(strict_types=1);

use Simtabi\Laranail\Ichava\Services\IconRegistry;
use Simtabi\Laranail\Ichava\IconSetsOcticons\Enums\Variant;
use Simtabi\Laranail\Ichava\IconSetsOcticons\Constants\IconsConstants;
use Simtabi\Laranail\Ichava\IconSetsOcticons\Providers\IconsServiceProvider;

it(description: 'boots the provider without error', closure: function () {
    $providers = array_keys($this->app->getLoadedProviders());

    expect($providers)->toContain(IconsServiceProvider::class);
});

it(description: 'resolves constants from config json', closure: function () {
    expect(IconsConstants::getVendorPackage())->toBe('ichava/icon-sets-octicons')
        ->and(IconsConstants::getTitle())->toBe('Octicons')
        ->and(IconsConstants::getPrefix())->toBe('octicon')
        ->and(IconsConstants::getDefaultVariant())->toBe('16px');
});

it(description: 'uses the config prefix in enum class helpers', closure: function () {
    expect(Variant::PX16->getClass())->toBe('octicon-16px')
        ->and(Variant::PX24->getClass())->toBe('octicon-24px');
});

it(description: 'matches the default variant to config json', closure: function () {
    expect(Variant::default())->toBe(Variant::PX16)
        ->and(Variant::PX16->isDefault())->toBeTrue()
        ->and(Variant::PX24->isDefault())->toBeFalse();
});

it(description: 'picks up the package in the icon registry', closure: function () {
    $registry = $this->app->make(IconRegistry::class);

    expect($registry->isRegistered('ichava/icon-sets-octicons'))->toBeTrue(
        'IconRegistry should have ichava/icon-sets-octicons registered after boot.',
    );
});
