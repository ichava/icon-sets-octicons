# Architecture

*Explanation.* What this pack is, what it delegates, and why it is shaped that way.

## What it ships

716 SVGs, addressed by variants -- see [Variants](variants.md). Counted from
the tracked files rather than quoted from prose:

```bash
git ls-tree -r --name-only origin/main -- resources/assets/svg/files | grep -c '\.svg$'
```

`tests/Unit/IconCountTest.php` holds each variant at or above the count upstream shipped, so a
refresh that drops icons fails.

Besides the assets it ships a provider, a constants class, an enum for its addressing axis, and a
Blade component extending core's. That is the whole surface.

## It depends on core, and core does not depend on it

The pack registers its icon directory with core's `IconRegistry` during `bootingPackage()`, after
core's singletons are bound. Registering earlier -- in `registeringPackage()` -- reaches for services
that do not exist yet, and logging there raises `Log [ichava] not defined`.

Core discovers installed packs at runtime. It has no list of them, so a pack is added by installing
it and removed by removing it.

## It requires `laranail/package-tools` directly

The provider writes `Package` into its own `configurePackage()` signature, so it depends on that
class whatever the dependency graph delivers transitively through core. **Require what you import**
is the rule; a transitive dependency is not a contract.

## Upstream

Its upstream is `@primer/octicons`, and the version these SVGs came from is recorded in
`resources/assets/svg/config.json` under `upstream.current_version` rather than written out
here, so the two cannot drift. The upstream licence's SHA-256 is recorded beside it under
`license.sha256`; a sync whose upstream licence no longer hashes the same is a licence change, and
must be read before it lands. Core's [check pack updates](https://github.com/ichava/core/blob/main/docs/recipes/check-pack-updates.md)
recipe reports whether a newer release exists.

## Why two size directories

Upstream ships one flat directory, `<name>-16.svg` beside `<name>-24.svg`. They are two drawings, not one drawing scaled: each is redrawn for its grid. The pack files them as `16px/<name>` and `24px/<name>`, so the size is the variant and the name is the same in both. Not every icon exists at both sizes: 372 at 16px against 344 at 24px.

## See also

- [Core architecture](https://github.com/ichava/core/blob/main/docs/architecture.md) -- topology, boot order, the registry
- [Attribution](attribution.md) -- the upstream project and its licence
- [Release](release.md)

---

[← Docs index](../README.md#documentation)
