<?php include_once 'query.php'; ?>
<?php
/**
 * Created by PhpStorm.
 * User: renzo de mesa
 * Date: 8/1/2015
 * Time: 10:14 AM
 */

//login attempt
function login_attempt($username, $password) {
    $found_user = select_user_by_username($username);
    if ($found_user) {
        $user = mysqli_fetch_assoc($found_user);
        if ($user['password'] == $password) {
            return $user;
        } else {
            return false;
        }
    } else {
       return false;
    }
}

//after successfully login
function login_success() {
    $_SESSION['login_status'] = true;
}

//end session
function end_session() {
    session_unset();
    session_destroy();
}
//after successfully logout
function logout_success() {
    $_SESSION['login_status'] = false;
    end_session();
}
//is user login?
function login_status() {
    return $_SESSION['login_status']  ? true : false;
}
//page redirection
function redirect_to($location) {
    header('Location:' . $location);
    exit;
}

function protected_page() {
    if (!login_status()) {
        redirect_to('index.php');
    }
}