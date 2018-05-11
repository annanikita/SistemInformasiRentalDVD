<?php
//check login file
//coders : Aditia Darma Nasution

session_start();
include('./config/db/mysql/db.conf');

//get login variabel
$username = $this -> input -> post['txtUsername'];
$password = $this -> input -> post['txtPassword'];
?>
