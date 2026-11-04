# Changelog

All notable changes to `ichava/icon-sets-octicons` follow [Keep a Changelog](https://keepachangelog.com/en/1.0.0/) and [Semantic Versioning](https://semver.org/).

## [Unreleased]

### Added

- **Initial release.** 716 Octicons SVGs vendored from `@primer/octicons` 19.33.0 (`16px` (372) and `24px` (344)), sanitised by `ichava/icon-sets-sync`'s SVG policy, with the upstream MIT licence in `resources/assets/svg/licenses/primer-octicons/LICENSE` and its SHA-256 recorded under `license` in `resources/assets/svg/config.json`.
- **The GitHub logos and product marks are excluded** (`mark-github`, `logo-github`, `logo-gist`, `lockup-github`, `copilot`, `copilot-error`, `copilot-warning`, `dependabot`, `hubot`): they are GitHub trademarks, which the MIT grant does not cover. The list is `upstream.excluded` in `config.json`, and `IconCountTest` fails if one ships. The nine 12px glyphs are not shipped either: only the 16px and 24px grids are.
- `ATTRIBUTION.md` carries the upstream notice verbatim; `tests/Unit/IconCountTest.php` holds the per-variant count floor at the upstream count.
- The weekly `sync-upstream.yml` is a caller of icon-sets-sync's reusable `sync-pack.yml`, pinned to a commit.
