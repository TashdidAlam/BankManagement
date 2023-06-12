<?php
//time zone
date_default_timezone_set('Asia/Kolkata');
//database connection
$con=mysqli_connect("tashdid-db.czk1aergjpmh.eu-west-2.rds.amazonaws.com","root","12345678","blmsdb");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

  ?>
