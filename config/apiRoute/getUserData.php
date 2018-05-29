<?php
session_start();
$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

//data request baru sebaiknya menggunakan eksplisit variabel juga
function dataUserLogin($dataUser as $request){
 $data['username'] = $_POST['username'];
 $data['password'] = md5($_POST['password']);
 return data();
}

if ($err) {
 echo "cURL Error #:" . $err;
} else {
 echo $response;
}
session_destroy();
?>
