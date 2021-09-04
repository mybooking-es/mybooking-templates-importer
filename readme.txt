=== Mybooking Templates Importer ===
Contributors: juanmiqueo
Tags: import, content, demo, data, widgets, settings, redux, theme options
Requires at least: 5.2
Tested up to: 5.8
Requires PHP: 7.2
Stable tag: 1.0.0
License: GPLv3 or later

Mybooking Templates Importer Plugin is a tool for importing Mybooking demo content and complete base sites into a new fresh WordPress installation. 

== Description ==

Mybooking Templates Importer Plugin is a tool for importing Mybooking demo content and complete base sites into a new fresh WordPress installation. 

This plugin is based on [One Click Demo Import](https://wordpress.org/plugins/one-click-demo-import) and it has been adapted to import 
templates to mybooking theme for rental and accommodation sites.

== Installation ==

It is necessary to install [MyBookingReservationEngine](https://wordpress.org/plugins/mybooking-reservation-engine), 
[MyBooking Theme](https://wordpress.org/themes/mybooking/) and Elementor first, because we have used it as page composer.

**From your WordPress dashboard**

1. Visit 'Plugins > Add New',
2. Search for 'MyBooking Templates Importer' and install the plugin,
3. Activate 'MyBooking Templates Importer' from your Plugins page.

**From WordPress.org**

1. Download 'MyBooking Templates Importer'.
2. Upload the 'mybooking-templates-importer' directory to your '/wp-content/plugins/' directory, using your favorite method (ftp, sftp, scp, etc...)
3. Activate 'MyBooking Templates Importer' from your Plugins page.

== Frequently Asked Questions ==

= How can I import via the WP-CLI? =

You can use the following WP-CLI commands:

* `wp mybooking-templates-importer list` - Which will list any predefined demo imports currently active theme might have,
* `wp mybooking-templates-importer import` - which has a few options that you can use to import the things you want (content/widgets/customizer/predefined demos). Let's look at these options below.

`wp mybooking-templates-importer import` options:

`wp mybooking-templates-importer import [--content=<file>] [--widgets=<file>] [--customizer=<file>] [--predefined=<index>]`

* `--content=<file>` - will run the content import with the WP import file specified in the `<file>` parameter,
* `--widgets=<file>` - will run the widgets import with the widgets import file specified in the `<file>` parameter,
* `--customizer=<file>` - will run the customizer settings import with the customizer import file specified in the `<file>` parameter,
* `--predefined=<index>` - will run the theme predefined import with the index of the predefined import in the `<index>` parameter (you can use the `wp mybooking-templates-importer list` command to check which index is used for each predefined demo import)

The content, widgets and customizer options can be mixed and used at the same time. If the `predefined` option is set, then it will ignore all other options and import the predefined demo data.

== Screenshots ==

1. Example of multiple predefined demo imports, that a user can choose from.
2. How the import page looks like, when only one demo import is predefined.
3. Example of how the import page looks like, when no demo imports are predefined a.k.a manual import.

== Changelog ==

= 1.0.0 =

*Release Date - 04 Setember 2021*

* Initial release!
