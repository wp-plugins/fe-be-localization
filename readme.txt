=== Different Localization in Front- and Backend ===
Contributors: Alphawolf
Donate link: http://www.schloebe.de/donate/
Tags: localization, frontend, backend, admin
Requires at least: 2.0
Tested up to: 2.6
Stable tag: trunk

Different Localization in front- and backend adds the possibility to use different localization in frontend and backend.

== Description ==

Different Localization in front- and backend adds the possibility to use different localization in frontend and backend. This plugin was quickly written by me due to a request in the [official german WordPress support forums](http://forum.wordpress-deutschland.org/).

**Want update feeds, code documentation and more? Visit [extend.schloebe.de](http://extend.schloebe.de)**

== Frequently Asked Questions ==

None.

== Installation ==

1. Download the plugin and unzip it.
2. Upload the folder fe-be-localization/ to your /wp-content/plugins/ folder.
3. Activate the plugin from your Wordpress admin panel.
4. Installation finished.

== Usage ==

Inside wp-config.php

`<?php define ('WPLANG', 'de_DE'); ?>`
you can specify the frontend’s language as usual.

Inside the plugin file fe-be-localization.php in line 13 you can additionally specify the backend's language, which can (and should!) be different to the one you specified in the wp-config file. For example:

`<?php $locale = 'en_US'; ?>`