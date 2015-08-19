<?php
/**
 * Created by PhpStorm.
 * User: renzo de mesa
 * Date: 8/1/2015
 * Time: 9:48 AM
 */

function get_db(){
    return $db = new mysqli('localhost', 'root', '', 'late_exit_validation');
}

