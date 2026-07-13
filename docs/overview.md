# Widget Showcase

<!-- prettier-ignore-start -->

## What This Plugin Adds

Widget Showcase is an **Available**, **No schema impact** Capell bundle in the **Capell Foundation** product group. It ships as `capell-app/widget-showcase` and extends these surfaces: none declared.

A dependency bundle that installs all ten Capell Foundation widget extensions together; it adds no runtime surface itself.

Docs gap: no package surface is declared in `capell.json`.

Status details:

- Status: Available
- Tier: free
- Bundle: foundation
- Composer package: `capell-app/widget-showcase`
- Namespace: `Capell\WidgetShowcase`
- Theme key: not applicable

## Why It Matters

**For developers:** The package exposes a small install surface. Inspect its provider and tests before adding integration behaviour.

**For teams:** Install the ten free Foundation widget extensions together. This dependency bundle has no page or widget of its own.

## Screens And Workflow

Docs gap: add `docs/screenshots.json` before promoting this package with visual workflow claims.

- Admin index screen if the package has a Filament resource.
- Create/edit screen if editors create records.
- Settings/configuration screen when settings exist.
- Frontend output when the package renders public pages.
- Package detail or install intent screen when marketplace-owned.

## Technical Shape

- Docs gap: no technical surface was detected from standard package paths.

## Data Model

This package has no schema impact. It does not declare package-owned migrations or required tables.

Docs gap: document extension points here if the package delegates persistence to a host package.

## Install Impact

- Admin navigation: no admin surface declared.
- Permissions: none declared in `capell.json`.
- Public routes: none detected in package route files.
- Database changes: no package migrations declared.
- Settings: no package settings declared.
- Queues or schedules: none detected in standard package paths.
- Cache tags: none declared.
- Commands: none declared.

## Common Pitfalls

- Verify the package is installed before expecting its provider, views, or extension contributions to run.
- Keep `composer.json`, `composer.local.json`, `capell.json`, docs, screenshots, and tests aligned when the package surface changes.

## Quick Start

1. Install the package: `composer require capell-app/widget-showcase`.
2. Run the required setup: no package migrations are declared; clear cached config and routes if the host app uses caches.
3. Verify the package provider is registered and the related frontend, command, or extension point is active.

## Next Steps

- [Package docs index](README.md)
- [Capell content language plan](../../../docs/CONTENT_LANGUAGE_PLAN.md)
- [Capell documentation design system](../../../docs/DESIGN_SYSTEM.md)
- [Capell and package ERD notes](../../../docs/erd/capell-and-package-erds.md)
- Related packages: [Widget Audio Playlist](../../widget-audio-playlist/README.md), [Widget Before After](../../widget-before-after/README.md), [Widget Content Reveal](../../widget-content-reveal/README.md), [Widget Countdown](../../widget-countdown/README.md), [Widget Data Chart](../../widget-data-chart/README.md), [Widget Hotspots](../../widget-hotspots/README.md), [Widget Live Poll](../../widget-live-poll/README.md), [Widget Location Map](../../widget-location-map/README.md), [Widget Slideshow](../../widget-slideshow/README.md), [Widget Youtube](../../widget-youtube/README.md).
- Focused tests: `vendor/bin/pest packages/widget-showcase/tests --configuration=phpunit.xml`.

<!-- prettier-ignore-end -->
