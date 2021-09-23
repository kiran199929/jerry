<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}else{
    echo "No Connection";
}

mysqli_select_db($con, 'userinfodata');

$id = $_POST['id'];
$uname = $_POST['uname'];
$unumber = $_POST['unumber'];
$uemail= $_POST['uemail'];
$umessage = $_POST['umessage'];

$query = "insert into users(id, uname, unumber, uemail, umessage) VALUES ('$id','$uname','$unumber','$uemail','$umessage') " ;

echo "$query";


?>