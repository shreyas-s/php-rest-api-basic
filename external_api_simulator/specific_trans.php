<?php 
require_once('db_conn.php');

 $transId = $_GET['trans_id'];
$res = mysqli_query($con,"SELECT  name , status , type from transactions where id = $transId");
// Fetch all
$resp = mysqli_fetch_row($res);
echo json_encode($resp);
// Free result set
mysqli_free_result($res);
 
mysqli_close($con);

?>