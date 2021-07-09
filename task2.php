
<?php

include('task2.html');


   $1=$_POST['1'];
   $2=$_POST['2'];
   $3=$_POST['3'];
   $4=$_POST['4'];
   $5=$_POST['5'];
$conn = new mysqli('localhost','root','', '','mydatabase')

if($conn->php_error){
	die('Connection Failed :'.$conn->php_error);




}
else{
	$stmt = $conn->prepare("insert into registration(1,2,3,4,5) values(?,?,?,?,?)");
	$stmt->bind_param("sssss",$1,$2,$3,$4,$5);
	$stmt->execute();
	echo"registration SUccessfully...";
	$stmt->close();
	$conn->close();


}
















?> 