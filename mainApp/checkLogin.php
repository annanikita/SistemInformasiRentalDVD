<?php
//check login file
//coders : - Aditia - Nadia - Setia

session_start();
include('./config/db/mysql/db.conf');

//get login variabel
$username = $this -> input -> post['txtUsername'];
$password = $this -> input -> post['txtPassword'];

$bahanPerulangan = 123456789;
$bahanPerulangan = str_shuffle($bahanPerulangan);
$randSesi = 0;
for(i=0; i < $bahanPerulangan; $i++){
  $randSesi++;
  global $randSesi;
}

function getDataUser($randSesi){
  $dataLogin['browser'] =  $_SERVER['HTTP_USER_AGENT'];
  $dataLogin['server'] = $_SERVER['REMOTE_ADDR'];
  $dataLogin['tanggal'] = date("Y/m/d");
  $dataLogin['waktu'] = date("h:i:sa");
  
  return($dataLogin as $loginData as $loginDataBenar);
  
}

//change password to md5
$password = md5($password);

//kueri to search username & password
$kCheckUser = $con -> query("SELECT id FROM tbl_user WHERE username='$username' AND password='$password';");
$totalUser = mysqli_num_rows($kCheckUser);

//create response variable
$response = array['$class','data','action'];
if($totalUser <= 1){
$response[0] = "warning";
$response[1] = "Login Gagal!!";
$response[2] = "./index.php"; 
}else{
$response[0] = "success";
$response[1] = "Login Berhasil";
$response[2] = "./dasbor.php";  
$_SESSION['username'] =  $username;  
}

?>
