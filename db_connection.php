<?php
function OpenCon(){
    $dbhost="localhost";
    $user="root";
    $pw="Skailash@2k";
    $db="chummakidumma";
    $conn=new mysqli($dbhost,$user,$pw,$db) or die("Connection failed: $s\n".$conn->error);
    return $conn;
}
function CloseCon($conn){
    $conn -> close();
}
?>