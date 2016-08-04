<?php
/**
 * Declare the global methods and variable, which are be visible through out the application
 */

/**
* Builds a file path with the appropriate directory separator.
* @param string $segments,... unlimited number of path segments
* @return string Path
*/
function file_build_path(...$segments) {
    return join(DIRECTORY_SEPARATOR, $segments);
}

