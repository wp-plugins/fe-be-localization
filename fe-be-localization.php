<?php
/*
Plugin Name: Different Localization in Front- and Backend
Version: 0.5
Plugin URI: http://www.schloebe.de/wordpress/different-localization-in-fe-and-be-plugin/
Description: Different Localization in Front- and Backend.
Author: Oliver Schl&ouml;be
Author URI: http://www.schloebe.de/
*/

function os_setAdminLang($locale) {
    if( WP_ADMIN === true ) {
        $locale = 'de_DE';
        return $locale;
    }
}

add_filter('locale', 'os_setAdminLang', 1, 1);
?>