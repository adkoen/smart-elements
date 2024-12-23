<?php

/**
 * Plugin Name: Smart Elements
 * Plugin URI: https://smartpage.be/
 * Description: Plugin to save custom elements for Smartpage and Smartsites
 * Author: Smartpage
 * Author URI: https://smartpage.be/
 * License: GPLv2
 * Text Domain: breakdance
 * Domain Path: /languages/
 * Version: 0.0.1
 */

namespace SmartElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'SmartElements',
        'element',
        'Smart Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'SmartElements',
        'macro',
        'Smart Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'SmartElements',
        'preset',
        'Smart Presets',
        false,
    );
},
    // register elements before loading them
    9
);
