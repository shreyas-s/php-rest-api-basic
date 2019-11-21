<?php


function createTransaction(){
  echo " inside create";
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