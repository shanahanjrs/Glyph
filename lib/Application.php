<?php
/**
 * Application.php
 *
 * Glyph library
 */

class Application {
    /**
     * Takes a filename and returns a string containing the file extension.
     * @input filename (Ex. myglyphfile.glyph)
     * @output extension (Ex. glyph)
     */
    function getFileExtension($filename=null) {
        if ( $filename ) {
            $dot = strpos($filename, '.');
            if ( $dot == false ) {
                return false;
            } else {
                return substr($filename, $dot+1);
            }
        }
        return false;
    }





}
