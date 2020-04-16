<?php
    include 'db_connection.php';
    $conn=OpenCon();
    echo "Successfully connected !";
    CloseCon($conn);
?>