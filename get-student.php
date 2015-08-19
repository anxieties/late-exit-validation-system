<?php
/**
 * Created by PhpStorm.
 * User: Malyn
 * Date: 8/4/2015
 * Time: 2:33 PM
 */

include_once 'start.php';

protected_page();

$ID_number = isset($_GET['ID_number']) ? $_GET['ID_number']: null;

$users = select_students_by_id_number($ID_number);

$message = "";

$table  = '<table class="table table-hover">';
$table .=   '<tr>';
$table .=     '<th>Student Name</th>';
$table .=     '<th>Class Status</th>';
$table .= '</tr>';
while ($row = mysqli_fetch_assoc($users)) {
    $table .= '<tr>';
    $table .=   '<td>' . $row['last_name'] . ' ' . ',' . ' ' . $row['first_name'] .'</td>';
    $table .=   '<td>' . "may pasok o wala" . '</td>';
    $table .= '</tr>';
}
$table .= '</table>';

if (isset($_GET['ID_number']) && $users->num_rows > 0) {
    echo $table;
} else {
    $message = 'User not found';
}

if ($message != "") {
    echo '<p class="bg-info">' . $message . '</p>';
}

