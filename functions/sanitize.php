<?php
/**
 * Created by PhpStorm.
 * User: renzo de mesa
 * Date: 8/1/2015
 * Time: 12:39 PM
 */

//sanitize html
function h ($string) {
    return htmlspecialchars($string);
}


//sanitize js
function j ($string) {
    return json_encode($string);
}

//sanitize url
function u ($string) {
    return urlencode($string);
}