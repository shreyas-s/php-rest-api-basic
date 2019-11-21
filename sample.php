<?php 
require('api_actions.php');
$httpMethodType = $_SERVER['REQUEST_METHOD'];

switch($httpMethodType){
  case "POST" : createTransaction();
                break;
  case "GET": chkSpecificGetType();
            break;
  case "DELETE": deleteTransaction();
            break;
  case "PUT": modifyTransaction();
        break;
   case "PATCH": patchModifyTransaction();
    break;
    default: echo "No MEtHOD registered for this";
}

function chkSpecificGetType(){
 return  (!(empty($_REQUEST['trans_id']))) ? getTransactionDetailById($_REQUEST['trans_id']) : getAllTransactions();

}
?>