<?php 
require_once('db_conn.php');
//table schema - create table `transactions`(id INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(50), `status` VARCHAR(10),`type` VARCHAR(10),delivery_status VARCHAR(20)) ; 

$data = json_decode(file_get_contents('php://input'), true);
file_put_contents('log_dat.log',print_r($data,true),FILE_APPEND);
$name = $data['name'];
$status = $data['status'];
$type = $data['type'];
$deliveryState = $data['delivery_status'];

// mysqli_query($con,"INSERT INTO transactions (name,status,type,delivery_status)
// VALUES ('RAM','S1','D1','OOA')");


mysqli_query($con,"INSERT INTO transactions (name,status,type,delivery_status)
 VALUES ('$name','$status','$type','$deliveryState')");

 
mysqli_close($con);
echo "successfully done";

?>