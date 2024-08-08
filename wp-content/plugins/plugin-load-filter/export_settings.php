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

// Get the settings from the database
$queryvars = get_option('plf_queryvars');
$option = get_option('plf_option');
$addon_options = get_option('plf_addon_options');

// Create the export file
$export_queryvars = fopen('plf_queryvars.settings', 'w');
$export_option = fopen('plf_option.settings', 'w');
$export_addon_options = fopen('plf_addon_options.settings', 'w');

if (!$export_queryvars || !$export_option || !$export_addon_options) {
    die("Failed to open one or more files for writing.");
}

// Write the settings to the export file
fwrite($export_queryvars, serialize($queryvars));
fwrite($export_option, serialize($option));
fwrite($export_addon_options, serialize($addon_options));

// Close the export files
fclose($export_queryvars);
fclose($export_option);
fclose($export_addon_options);

// Done
echo "Settings exported successfully.\n";