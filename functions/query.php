<?php include_once 'connection.php'; ?>
<?php
/**
 * Created by PhpStorm.
 * User: renzo de mesa
 * Date: 8/1/2015
 * Time: 10:14 AM
 */


function select_user_by_username($username) {
    $query = " SELECT * FROM admins where username = '{$username}' LIMIT 1";
    $result = get_db()->query($query);
    return $result;
}

function select_students_by_id_number($id) {
    $query = " SELECT * FROM students where ID_number = '{$id}'";
    $result = get_db()->query($query);
    return $result;
}

