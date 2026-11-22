# Widget Showcase

<!-- prettier-ignore-start -->

Ten page widgets come in one install, so an editor can try them all before choosing which to use. That one install is a bundle, and the bundle itself has no screens or settings of its own.

For images there is a before and after slider, numbered points on a single picture and a slideshow of up to twenty slides. A playlist of recordings with transcripts and chapters sits beside a YouTube video that loads only when a visitor presses Play. Visitors can watch a countdown to an event or read a chart built from figures you type in. A list of up to twenty places links each one to OpenStreetMap. A poll asks one question and takes one vote per browser, and cards can open a pop-up or side panel.

Every widget has its own settings and limits and needs Layout Builder, where editors add widgets to a page. Install the bundle from Capell's package manager and any of the ten not already installed is added. If one fails, the others added in that install are marked as not installed again. Editors find each one under its own name in the widget list.

## What it does

Widget Showcase is a dependency bundle that installs all ten free Capell Essentials widget extensions together. It has no page, widget, provider, contribution, or runtime surface of its own.

## Do I need to do anything?

Choose this bundle when the site needs the complete Foundation widget set. It has no setup screen, settings, migrations, commands, permissions, or health check of its own. Configure each member widget through its own Layout Builder block and package documentation.

## Where it shows up

It does not appear in the admin or public frontend. The ten member extensions appear individually in Layout Builder and own their own health checks and output.

## Good to know

- This free beta bundle belongs to Capell Essentials and installs ten independently managed extensions.
- It is a Composer dependency bundle only: it declares the ten member packages but adds no provider, contribution, database schema, admin page, or frontend runtime.
- Removing the bundle can remove member packages on the next Composer update when nothing else requires them. Check dependency usage and any pages using member widgets before changing the bundle requirement.

---

For developers: see the [README](../README.md).

<!-- prettier-ignore-end -->
