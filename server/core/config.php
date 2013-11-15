<?php 
$con=mysql_connect("127.0.0.1","root","");
$db=mysql_select_db("sms",$con);
if(!$db){
	echo 'database gagal';
}