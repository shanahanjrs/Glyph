<?php
/***
 * Glyph
 *
 * A high level, short hand language compiled by PHP into Phinx database migration code
 *
 * John Shanahan
 * 2015
 */
$version = 0.1;
print("Glyph version $version\n");

/**
 * Error codes:
 * 01 - No file specified
 * 02 - Not a .glyph file
 */

/**
 * Configuration
 */
require __DIR__ . '/../lib/Application.php';

$inputFile;
$outputFile;

if ( empty($argv[1])) {
    print("Error[01]: No file specified\n");
} else {
    $inputFile = $argv[1];
    print("File input: $inputFile\n");
}


/**
 * Main
 */











