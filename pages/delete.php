<?php
include'connetr.php';
.
if (isset($_GET['did'])){
    $did = $_GTE['did'];

$spl = "DELETE FROM crud WHERE id = $did";

$result = myspli_query($con, $sql);

if($result){
    header('location:display.php');
}else{
   die(myspli_error($con));
}     