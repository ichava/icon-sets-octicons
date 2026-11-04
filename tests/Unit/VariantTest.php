<?php

declare(strict_types=1);

use Simtabi\Laranail\Ichava\IconSetsOcticons\Enums\Variant;

/**
 * Pure-enum behaviour tests. Anything that touches config.json (default(),
 * isDefault(), getClass(), getPath()) lives in the Feature suite where the
 * Laravel container is bootstrapped.
 */
it(description: 'returns every case from values', closure: function () {
    expect(Variant::values())->toBe(['16px', '24px']);
});

it(description: 'resolves known values and rejects unknown ones', closure: function () {
    expect(Variant::tryFromValue('16px'))->toBe(Variant::PX16)
        ->and(Variant::tryFromValue('24px'))->toBe(Variant::PX24)
        ->and(Variant::tryFromValue('not-a-real-variant'))->toBeNull();
});
