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

if (!function_exists('app_log')) {

    /**
     * Error Logging Interface
     *
     * We use this as a simple mechanism to access the logging
     * class and send messages to be logged.
     *
     * @param	string	the error level: 'db' or 'smis'
     * @param	string	the error category
     * @desc	log script logs into file
     */
    function app_log($level, $category, $format /* , ... */) {
        static $_log;
        if (C_DEBUG != '0' && DEBUG_SCRIPT != '0' && CUSTOM_APP_LOG !== '0') {
            //get the called args
            $args = func_get_args();
            //pop off the 2 knowns
            array_shift($args);
            array_shift($args);
            if (CUSTOM_APP_LOG === 1 || strpos($category, CUSTOM_APP_LOG) === 0) {
                if ($_log === NULL) {
                    // references cannot be directly assigned to static variables, so we use an array
                    $_log[0] = & load_class('Log', 'core');
                }
                $message = vsprintf($format, $args);
                $_log[0]->write_log($level, $message);
            }
        }
    }

}

if (!function_exists('query_log')) {

    /**
     * Error Logging Interface
     *
     * We use this as a simple mechanism to access the logging
     * class and send messages to be logged.
     *
     * @param	string	the error level: 'db'     
     * @desc	log mysql queries in to log file
     */
    function query_log($level = 'db') {
        if (C_DEBUG != '0') {
            static $_log;
            if ($_log === NULL) {
                // references cannot be directly assigned to static variables, so we use an array
                $_log[0] = & load_class('Log', 'core');
            }
            $CI = & get_instance();
            // Get execution time of all the queries executed by controller
            $times = $CI->db->query_times;
            foreach ($CI->db->queries as $key => $query) {
                $sql = $query . " \n Execution Time:" . $times[$key];
                $_log[0]->write_log($level, $sql);
            }
        }
    }
}
if (!function_exists('c_encode')) {

    /**
     * @method: c_encode
     * @param	value to be encoded
     * @return	encoded string
     * @desc Encodes the given value
     */
    function c_encode($value){
        $CI =& get_instance();
        return str_replace('/','~', $CI->c_encrypt->c_encode($value));
        
    }
}

if (!function_exists('c_decode')) {

    /**
     * @method: c_decode
     * @param	string to be decoded
     * @return	decoded value
     * @desc Decodes the given string
     */
    
    function c_decode($value){
        $CI =& get_instance();
        $value=str_replace('~','/',$value);
        return $CI->c_encrypt->c_decode($value);        
    }
}