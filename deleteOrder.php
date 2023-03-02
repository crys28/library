<?php 

include_once 'database.php'; 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `comenzi` WHERE `idComenzi`='$user_id'";

     $result = mysqli_query($conn, $sql);
     if ($result == TRUE) {

        header("Location: ../library/ordersLogged.php?record_deleted");

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>