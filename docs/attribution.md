# Attribution and licence

*Reference.*

## Upstream

[Octicons](https://primer.style/octicons/) is created and maintained by GitHub Inc.. Source: [github.com/primer/octicons](https://github.com/primer/octicons).

## Licence

The icons and this package are owned separately, and both are under the **MIT License**:

- **The icons** are © GitHub Inc., [MIT](https://github.com/primer/octicons/blob/main/LICENSE). Simtabi LLC redistributes them and claims no authorship of them.
- **This package's code** (provider, enum, component, configuration) is © Simtabi LLC, [MIT](../LICENSE).

MIT allows commercial and non-commercial use, modification and redistribution, provided the copyright notice and permission notice accompany every copy. That is a condition, not a courtesy: the upstream notice is reproduced in [`ATTRIBUTION.md`](../ATTRIBUTION.md) at the package root, which ships in the dist archive (`docs/` does not). Keep it with the icons if you copy them out of the package.

The GitHub logos and product marks are excluded from the package, because they are trademarks the MIT grant does not cover. The list, and the reason, are in [`ATTRIBUTION.md`](../ATTRIBUTION.md#trademarks-what-is-not-shipped).

## Credit

A visible credit is not required by the licence, but is welcome on a "credits" or "about" page:

> Icons from [Octicons](https://primer.style/octicons/) by GitHub (Primer) (MIT)

## Updating from upstream

Asset refreshes run **maintainer-side** via
[`ichava/icon-sets-sync`](https://github.com/ichava/icon-sets-sync).
Cron polls `@primer/octicons` on npm, refreshes the bundled SVGs when
upstream moves, and opens a PR. A human reviews + tags a release;
Packagist + `composer update` fans the change out.

End users **don't** refresh locally -- `vendor/` is regenerated on every
`composer install`, so any local change is discarded. Run
`php artisan ichava::ichava-core.check-updates --package=ichava/icon-sets-octicons`
to see whether a new upstream version is available.

## See also

- [Octicons website](https://primer.style/octicons/)
- [Octicons GitHub](https://github.com/primer/octicons)

---

[← Docs index](../README.md#documentation)
