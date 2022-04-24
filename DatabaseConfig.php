<?php
//Define your host here.
$HostName = "localhost";
//Define your database username here.
$HostUser = "id18818444_smsdb";
//Define your database password here.
$HostPass = "Johnicute@2000";
//Define your database name here.
$DatabaseName = "id18818444_smsdoorbell";

$con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
if($con){
	echo "DATA BASE CONNECTED \n";
}else{
	echo "NOT CONNECTD";
}
?>