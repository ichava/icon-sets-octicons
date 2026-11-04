<?php

declare(strict_types=1);

namespace Simtabi\Laranail\Ichava\IconSetsOcticons\Enums;

use Simtabi\Laranail\Ichava\Traits\HasIconSetVariants;
use Simtabi\Laranail\Ichava\Contracts\IconSetVariantInterface;
use Simtabi\Laranail\Ichava\IconSetsOcticons\Constants\IconsConstants;

/**
 * Type-safe variant selection for Octicons (16px / 24px).
 */
enum Variant: string implements IconSetVariantInterface
{
    use HasIconSetVariants;

    case PX16 = '16px';
    case PX24 = '24px';

    public function getPath(): string
    {
        return IconsConstants::getSvgPath($this->value);
    }

    private static function getDefaultValue(): string
    {
        return IconsConstants::getDefaultVariant() ?? self::PX16->value;
    }

    private static function getClassPrefix(): string
    {
        return IconsConstants::getPrefix();
    }
}
