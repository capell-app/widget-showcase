## What it does

Widget Showcase is a dependency bundle that installs all ten free Capell Foundation widget extensions together. It has no page, widget, provider, contribution, or runtime surface of its own.

## Do I need to do anything?

Choose this bundle when the site needs the complete Foundation widget set. It has no setup screen, settings, migrations, commands, permissions, or health check of its own. Configure each member widget through its own Layout Builder block and package documentation.

## Where it shows up

It does not appear in the admin or public frontend. The ten member extensions appear individually in Layout Builder and own their own health checks and output.

## Good to know

- This free beta bundle belongs to Capell Foundation and installs ten independently managed extensions.
- It is a Composer dependency bundle only: it declares the ten member packages but adds no provider, contribution, database schema, admin page, or frontend runtime.
- Removing the bundle can remove member packages on the next Composer update when nothing else requires them. Check dependency usage and any pages using member widgets before changing the bundle requirement.

## Screenshot status

No product-screen capture is required because the bundle owns no screen. Its Marketplace card is a dependency diagram, not a product screenshot. The committed Marketplace artwork deliberately shows the bundle relationship.
