<?php 
require_once('db_conn.php');
$data = json_decode(file_get_contents('php://input'), true);
$name = $data['name'];
$transId = $_REQUEST['trans_id'];
$res = mysqli_query($con,"update transactions set name = '$name' where id = $transId ");
 
mysqli_close($con);
echo "successfully done";

?>