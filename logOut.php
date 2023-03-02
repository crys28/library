<?php
     include_once 'database.php';
    $sql_update_status = "UPDATE users SET logged='0' WHERE logged = '1';";
    mysqli_query($conn, $sql_update_status);
    $sql_update_status2 = "UPDATE shoppingcart SET logged='0' WHERE logged = '1';";
    mysqli_query($conn, $sql_update_status2);
?>