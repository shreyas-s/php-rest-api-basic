<?php 
require_once('db_conn.php');


$res = mysqli_query($con,"SELECT  name , status , type from transactions ");
// Fetch all
$resp = mysqli_fetch_all($res,MYSQLI_ASSOC);
echo json_encode($resp);
// Free result set
mysqli_free_result($res);
 
mysqli_close($con);

?>