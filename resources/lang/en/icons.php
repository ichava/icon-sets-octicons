<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Octicons -- localisable strings
|--------------------------------------------------------------------------
|
| An overlay, not a second source of truth. `name` and `description` are
| deliberately absent: IconRegistry::fromDirectory() reads those from
| resources/assets/svg/config.json, which is canonical. A non-English locale
| may add them to override; `en` must not.
|
| Variant keys match Simtabi\Laranail\Ichava\IconSetsOcticons\Enums\Variant.
|
*/

return [
    'variants' => [
        '16px' => '16px',
        '24px' => '24px',
    ],

    'variant_descriptions' => [
        '16px' => 'Drawn for a 16 by 16 grid, the size GitHub uses in dense UI',
        '24px' => 'Drawn for a 24 by 24 grid, for larger touch targets',
    ],
];
