<?php


function createTransaction(){

    
$data = array(
    'name' => 'sampl',
    'status' => '0123445',
    'type' => 'demoA1',
    'delivery_status' => 'd1'
);

$payload = json_encode($data);

// Prepare new cURL resource
$ch = curl_init('http://localhost/custom_rest_php_api/external_api_simulator/create_trans.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);


// Further processing ...
//if ($server_output == "OK") { ... } else { ... }

// Set HTTP Header for POST request 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($payload))
);
  //echo " inside create";

  $server_output = curl_exec($ch);
  $err = curl_error($ch);
  if($err){
      echo "curl err:";
      echo $err;
  }

  echo $server_output;
  curl_close ($ch);
  
}

function getAllTransactions(){
 echo "inside all";

}

function getTransactionDetailById($id){
 echo " inside detail";
 echo "Id for: $id";
}

function deleteTransaction(){
 echo "inside delete";
 if(!(empty($_REQUEST['trans_id']))){
    //echo  $_REQUEST['trans_id'];
 }

}

function modifyTransaction(){
    echo "inside PUT";
}

function patchModifyTransaction(){
    echo "inside patch";
}

?>