<?php

/** 
*   
*   Useful helper functions based on CS50 pset7 
*   assignment code
*   for Mylchomepage.php
*/

// TO DO: Define file below (make a constants.php?)
require_once("MyLCconstants.php");

// Functions
    
     /**
     * Redirects user to destination, which can be
     * a URL or a relative path on the local host.
     *
     * Because this function outputs an HTTP header, it
     * must be called before caller outputs any HTML.
     */
    function redirect($destination)
    {
        // handle URL
        if (preg_match("/^https?:\/\//", $destination))
        {
            header("Location: " . $destination);
        }

        // handle absolute path
        else if (preg_match("/^\//", $destination))
        {
            $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
            $host = $_SERVER["HTTP_HOST"];
            header("Location: $protocol://$host$destination");
        }

        // handle relative path
        else
        {
            // adapted from http://www.php.net/header
            $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
            $host = $_SERVER["HTTP_HOST"];
            $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
            header("Location: $protocol://$host$path/$destination");
        }

        // exit immediately since we're redirecting anyway
        exit;
    }
    
     /**
     * Executes SQL statement, possibly with parameters, returning
     * an array of all rows in result set or false on (non-fatal) error.
     */
    function query(/* $sql [, ... ] */)
    {
        // SQL statement
        $sql = func_get_arg(0);

        // parameters, if any
        $parameters = array_slice(func_get_args(), 1);

        // try to connect to database
        static $handle;
        if (!isset($handle))
        {
            try
            {
                // connect to database
                $handle = new PDO("mysql:dbname=" . DATABASE . ";host=" . SERVER, USERNAME, PASSWORD);

                // ensure that PDO::prepare returns false when passed invalid SQL
                $handle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
            }
            catch (Exception $e)
            {
                // trigger (big, orange) error
                trigger_error($e->getMessage(), E_USER_ERROR);
                exit;
            }
        }

        // prepare SQL statement
        $statement = $handle->prepare($sql);
        if ($statement === false)
        {
            // trigger (big, orange) error
            trigger_error($handle->errorInfo()[2], E_USER_ERROR);
            exit;
        }

        // execute SQL statement
        $results = $statement->execute($parameters);

        // return result set's rows, if any
        if ($results !== false)
        {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            return false;
        }
    }
    
  
      /**
     * Apologizes to user with message.
     */
    function apologize($message)
    {
        print($message);
        exit;
    }

      /**
     * Returns a status code for a given
     * status text.  If no match, false is 
     * returned, otherwise a valid status code 
     * is returned.
     */

    function getProgStatusCode ($status_txt)
    {
        
        // query database and return rows from prog_status matching given status text
        $status_code_results = query("SELECT `status_code` FROM `prog_status` WHERE `status` LIKE ?", $status_txt);

        // if no results or more than one row returned there was an error
        if(empty($status_code_results) || count($status_code_results) > 1)
        {
            return false;
        }
        else
        {
            // else, get the status code and return to calling function
            extract($status_code_results[0]);
            return $status_code;
        }       
    } 

    /**
    * Updates database with details on a user's
    * progress for given pset and user ID
    */
    function updateProgStatus($pset, $status_txt, $user_id)
    {
        // convert the status text to a status code
        $status_code = getProgStatusCode($status_txt);
        
        // check if a status exist for user and pset
        $row_count = query("SELECT `user_prog_status`.`user_id` 
                            FROM user_prog_status 
                            WHERE `user_prog_status`.`user_id` = ? 
                            AND `user_prog_status`.`pset` = ?",  $user_id, $pset);
       
        if(empty($row_count))
        {
            // if no row for user and pset, add new row with status
            query("INSERT INTO  `matchCode`.`user_prog_status` (
                                            `user_id` ,
                                            `pset` ,
                                            `status_code` ,
                                            `created_on`
                                                               )
                 VALUES (?,  ?,  ?, CURRENT_TIMESTAMP)", $user_id, $pset, $status_code);       
        }
        else if (count($row_count) == 1)
        {
            // if one row matches update that data
            if($status_code == 'NS')
            {
                // if user is setting status to not started, remove
                // row from database for user and pset
                 query("DELETE FROM `user_prog_status`
                        WHERE `user_prog_status`.`user_id` = ? 
                        AND `user_prog_status`.`pset`= ?", $user_id, $pset); 
            }
            else
            {
                // else update the status for the user and pset to new value
                query("UPDATE  `matchCode`.`user_prog_status` 
                       SET  `status_code` =  ?
                       WHERE  `user_prog_status`.`user_id` = ? 
                       AND `user_prog_status`.`pset`= ?", $status_code, $user_id, $pset);
                print("UPDATE " .   $user_id . "--" . $pset . "--" . $status_code);                
            }
        } 
        else
        {
            // if more than one row matches, there was an error.        
            die("There was a database error. Please try again.");
        }
    }
?>
