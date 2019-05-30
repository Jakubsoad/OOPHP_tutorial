<?php
require_once 'include/newclass.inc.php';

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <title>

    </title>
</head>
<body>

    <?php
    $object = new A;
    echo $object . "<br>";
    echo $object->modulo(1823981238, 131)."<br>";
    echo $object->divide(1823981238, 131);



    ?>

</body>

</html>

