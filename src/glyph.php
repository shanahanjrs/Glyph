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
require_once __DIR__ . '/../lib/Application.php';
$glyph = new Application;

if ( empty($argv[1])) {
    print("Error[01]: No file specified\n");
} else {
    $inputFile = $argv[1];
    print("File: $inputFile\n");
    $ext = $glyph->getFileExtension($inputFile);
    if ( $ext ) {
        if ( $ext != 'glyph' ) { print("Error[02]: File extension not .glyph\n"); return -1; }
    } else {
        //$glyph->error();
        print("Error[03]: Cannot find filetype\n");
    }
}


/**
 * Main
 */











