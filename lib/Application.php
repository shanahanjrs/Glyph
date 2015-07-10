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

    /**
     *
     *
     */
    function error($errcode=null, $message=null) {
        if ( $errcode && $message ) {
            print("\033[31m".'Error'."\033[0m".'['."\033[33m"."$errcode"."\033[0m]:"." $message\n");
        } else {
            print("\033[31m".'Error'."\033[0m".'['."\033[33m".'99'."\033[0m]:"." Glyph has encountered an error.\n");
        }
        return -1;
    }



}
