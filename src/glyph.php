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

const RED = "\033[31m";
const PURPLE = "\033[35m";
const GREEN = "\033[31m";
const CYAN = "\033[36m";
const YELLOW = "\033[33m";
const CLEAR = "\033[0m";

print(PURPLE."Glyph ".CLEAR."by ".CYAN."John Shanahan ".CLEAR."version ".YELLOW . $version . CLEAR."\n");

/**
 * Error codes:
 * 01 - No file specified
 * 02 - Not a .glyph file
 * 03 - Cannot find filetype
 */

/*
 * Phinx template to use:
<?php
use Phinx\Migration\AbstractMigration;

// -- Glyph generated Phinx script --
class ClassName extends AbstractMigration {
    // -- up --
    public function up()
    {

    }

    // -- down --
    public function down()
    {

    }
}
*/


/**
 * Configuration
 */
require_once __DIR__ . '/../lib/Application.php';
$glyph = new Application;

// Check input
if ( empty($argv[1])) {
    //print("Error[01]: No file specified\n");
    $glyph->error(01, 'No file specified');
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










