<?php

// Ensure the script is run from the CLI
if (php_sapi_name() != 'cli') {
    die("This script can only be run from the command line.");
}

// Define the path to the WordPress environment
$wpLoadPath = dirname( __FILE__, 4 ) . '/wp-load.php'; // Adjust this path as necessary

// Load the WordPress environment so we can access the database
if (file_exists($wpLoadPath)) {
    require_once($wpLoadPath);
} else {
    echo "$wpLoadPath does not exist.\n";
    die("Failed to load WordPress environment. Are you in the plugin filter directory?");
}

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get the settings from the exported files
$queryvars = unserialize(file_get_contents('plf_queryvars.settings'));
$option = unserialize(file_get_contents('plf_option.settings'));
$addon_options = unserialize(file_get_contents('plf_addon_options.settings'));

// Save the settings in the database
update_option('plf_queryvars', $queryvars);
update_option('plf_option', $option);
update_option('plf_addon_options', $addon_options);

// Done
echo "Settings imported successfully.\n";