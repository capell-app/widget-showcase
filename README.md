# Widget Showcase

<!-- prettier-ignore-start -->

Ten page widgets come in one install, so an editor can try them all before choosing which to use. That one install is a bundle, and the bundle itself has no screens or settings of its own.

For images there is a before and after slider, numbered points on a single picture and a slideshow of up to twenty slides. A playlist of recordings with transcripts and chapters sits beside a YouTube video that loads only when a visitor presses Play. Visitors can watch a countdown to an event or read a chart built from figures you type in. A list of up to twenty places links each one to OpenStreetMap. A poll asks one question and takes one vote per browser, and cards can open a pop-up or side panel.

Every widget has its own settings and limits and needs Layout Builder, where editors add widgets to a page. Install the bundle from Capell's package manager and any of the ten not already installed is added. If one fails, the others added in that install are marked as not installed again. Editors find each one under its own name in the widget list.

- **Price and availability:** Check current availability and price on the [Capell Marketplace listing](https://capell.app/extensions/widget-showcase).
- **Licence:** Check the licence terms on the [Capell Marketplace listing](https://capell.app/extensions/widget-showcase).
- **Requires:** `PHP ^8.4`, `capell-app/widget-audio-playlist ^1.0`, `capell-app/widget-before-after ^1.0`, `capell-app/widget-content-reveal ^1.0`, `capell-app/widget-countdown ^1.0`, `capell-app/widget-data-chart ^1.0`, `capell-app/widget-hotspots ^1.0`, `capell-app/widget-live-poll ^1.0`, `capell-app/widget-location-map ^1.0`, `capell-app/widget-slideshow ^1.0`, `capell-app/widget-youtube ^1.0`.
- **Install:** `composer require capell-app/widget-showcase`.

## Quick Start

1. Install the package: `composer require capell-app/widget-showcase`.
2. For site owners and developers adding the ten widgets to a Capell site: Layout Builder is installed. Running `composer require` only downloads the bundle and its ten widgets; they stay inactive until the bundle is installed in Capell.
3. Open `/admin/extensions`. Install **Widget Showcase**, or run `php artisan capell:extension-install capell-app/widget-showcase`, which also installs any of the ten widgets that are not installed yet.
4. Check the result: All ten widgets are listed as installed and appear by name in the Layout Builder widget list. Next: Open a page, click **Layout builder**, **Add widgets**, then choose a widget such as **Slideshow** or **Countdown**.

## For Developers

The package keeps collection-level installation declarative and leaves every runtime contract inside the individual widget package.

## Configure

This extension works without configuration. There is nothing to set after install.

## Limits And Pitfalls

- Install the required Capell packages at the versions in `composer.json`: `capell-app/widget-audio-playlist ^1.0`, `capell-app/widget-before-after ^1.0`, `capell-app/widget-content-reveal ^1.0`, `capell-app/widget-countdown ^1.0`, `capell-app/widget-data-chart ^1.0`, `capell-app/widget-hotspots ^1.0`, `capell-app/widget-live-poll ^1.0`, `capell-app/widget-location-map ^1.0`, `capell-app/widget-slideshow ^1.0`, `capell-app/widget-youtube ^1.0`.

## Screens And Workflow

![Installed widget showcase](docs/screenshots/widget-showcase-catalogue-preview.png)

- Widget Showcase extension card (marketplace).
- Installed widget showcase (frontend).

## Install Impact

- Required packages: `capell-app/widget-audio-playlist`, `capell-app/widget-before-after`, `capell-app/widget-content-reveal`, `capell-app/widget-countdown`, `capell-app/widget-data-chart`, `capell-app/widget-hotspots`, `capell-app/widget-live-poll`, `capell-app/widget-location-map`, `capell-app/widget-slideshow`, `capell-app/widget-youtube`.
- Admin navigation: no admin page or resource contribution is declared.
- Admin/editor extensions: none declared.
- Permissions: no package permission declarations or Shield gates detected; host access rules still apply.
- Public routes: none declared.
- Database changes: no package migrations declared.
- Config: no package config files.
- Settings: no package settings declared.
- Queues or schedules: none declared.
- Cache tags: none declared.
- Commands: none declared.

## Upgrading

No manual steps between minor versions.

## Next Steps

- [Package docs](docs/README.md)
- [Overview](docs/overview.md)
- [Developer reference](docs/reference.md)
- [Marketplace assets](docs/assets/marketplace/)
- [Capell content language plan](../../docs/CONTENT_LANGUAGE_PLAN.md)
- [Capell documentation design system](../../docs/DESIGN_SYSTEM.md)
- [Capell and package ERD notes](../../docs/erd/capell-and-package-erds.md)
- Related packages: [Audio Playlist Widget](../widget-audio-playlist/README.md), [Before and After Widget](../widget-before-after/README.md), [Content Reveal Widget](../widget-content-reveal/README.md), [Countdown Widget](../widget-countdown/README.md), [Data Chart Widget](../widget-data-chart/README.md), [Hotspots Widget](../widget-hotspots/README.md), [Live Poll Widget](../widget-live-poll/README.md), [Location Map Widget](../widget-location-map/README.md), [Slideshow Widget](../widget-slideshow/README.md), [YouTube Widget](../widget-youtube/README.md).

<!-- prettier-ignore-end -->
