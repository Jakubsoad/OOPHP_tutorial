<?php
require_once 'include/dbh.inc.php';
require_once 'include/user.inc.php';
require_once 'include/viewUser.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>

<?php

    $users = new ViewUser();
    $users->showAllUsers();
?>

</body>

</html>

