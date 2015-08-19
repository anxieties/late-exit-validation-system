<?php
/**
 * Created by PhpStorm.
 * User: renzo de mesa
 * Date: 8/1/2015
 * Time: 9:45 AM
 */
include_once 'start.php';

$message = "";
$username = "";
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = login_attempt($username, $password);
    if ($user) {
        login_success();
        redirect_to('search.php');
    } else {
        $message = 'Username\Password Incorrect';
    }
}
?>
<div class="container">
<div class="login">
    <?php
    //display message
    if($message != "") {
        echo '<div class="message">' . h($message) . '</div>' . '<br>';
    }
    ?>
    <form method="post" action="index.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="<?php echo h($username); ?>"/><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"/><br>
        <input type="submit" name="submit" value="Login">
    </form>
</div>
</div>

<?php if (isset($_SESSION['login_status'])) {
    redirect_to('home.php');
} ?>