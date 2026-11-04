# Variants

*Reference.*

`ichava/icon-sets-octicons` ships **716 icons across two variants**:

- **16px** — drawn on a 16×16 grid (`viewBox="0 0 16 16"`), filled with `currentColor`
- **24px** — drawn on a 24×24 grid (`viewBox="0 0 24 24"`), filled with `currentColor`

Each icon is drawn separately for each grid, so pick the size it will be shown at rather than scaling one. Browse the library at [primer.style/octicons](https://primer.style/octicons/), or visually through the [`ichava/icon-browser`](https://github.com/ichava/icon-browser) SPA.
The Ichava integration treats each variant as a separate icon "category" under the same package, addressed by sub-path.

| Variant | Path prefix | Icons | Style |
|---|---|---|---|
| `16px` | `16px/<name>` | 372 | drawn on a 16×16 grid (`viewBox="0 0 16 16"`), filled with `currentColor` |
| `24px` | `24px/<name>` | 344 | drawn on a 24×24 grid (`viewBox="0 0 24 24"`), filled with `currentColor` |

The default variant is `16px`. Always include the variant prefix in the icon path: `ichava/icon-sets-octicons::16px/home` for 16px, `ichava/icon-sets-octicons::24px/home` for 24px.

## Examples

```blade
<x-ichava::icon name="ichava/icon-sets-octicons::16px/home" class="w-6 h-6" />
<x-ichava::icon name="ichava/icon-sets-octicons::24px/home" class="w-6 h-6" />
<x-ichava::icon name="ichava/icon-sets-octicons::24px/heart" class="w-6 h-6 text-red-500" />
```

## Variant enum (PHP)

```php
use Simtabi\Laranail\Ichava\IconSetsOcticons\Enums\Variant;

Variant::PX16->value;       // '16px'
Variant::PX24->value;       // '24px'
Variant::PX16->isDefault(); // true
Variant::default();              // Variant::PX16
```

The enum implements `IconSetVariantInterface` from core, so it works wherever core's registry expects a variant.

## When to use which

- Use **16px** for dense UI: tables, inline with body text, toolbars. It is GitHub's default.
- Use **24px** for larger controls and touch targets, where the 16px drawing would look thin when scaled up.

Not every icon exists at both sizes. The GitHub logos and product marks are not shipped at either; see [Attribution](attribution.md).

## See also

- [Customisation](customization.md), size and colour
- [Icon path format](https://github.com/ichava/core/blob/main/docs/tools/icon-path-format.md)

---

[← Docs index](../README.md#documentation)
