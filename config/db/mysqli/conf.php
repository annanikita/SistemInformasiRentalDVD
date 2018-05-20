<?php
session_start();
$conn = new mysqli('localhost','root','pixelkre','');
if(!$conn){
echo mysqli_error();
}else{
return(false);
}
?>
