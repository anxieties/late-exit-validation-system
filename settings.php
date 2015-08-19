<?php
include_once 'start.php';

protected_page();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link href="css/project.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<div class="header">
    <ul>
        <li class="active"><a>Home</a></li>
        <li><a>Sign in</a></li>
        <li><a href="logout.php">Sign out</a></li>
    </ul>
</div>
<div class="content">
    <div class="content-header">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="search.php">Search</a></li>
            <li class="active" ><a href="settings.php">Settings</a></li>
        </ul>
    </div>
</div>
<div class="footer">

</div>
</body>
</html>