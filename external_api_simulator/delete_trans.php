<?php 
require_once('db_conn.php');
$transId = $_REQUEST['trans_id'];
file_put_contents('log_del_Act.log',print_r($_SERVER['REQUEST_METHOD'],true),FILE_APPEND);
$res = mysqli_query($con,"DELETE FROM transactions where id = $transId ");
// Fetch all
//$resp = mysqli_fetch_all($res,MYSQLI_ASSOC);
// Free result set
if($res){
    echo "done with deleting";
}
else{
    echo "issue in deleting";
}
 
mysqli_close($con);

?>