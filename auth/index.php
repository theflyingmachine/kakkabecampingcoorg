<?php
$url = "https://api.instagram.com/oauth/access_token";
echo('Please wait while we fetch your access_token');
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
//   "Content-Type: form-data",
  "Content-Type: application/x-www-form-urlencoded",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = "client_id=746720933176046&client_secret=17ffcda4f168253c3e6dd9b3bf4bc137&grant_type=authorization_code&redirect_uri=https://cybergirl.in/auth/&code=".$_GET['code'];
// echo($data);
echo("\r\n");
echo('Checking.....');
echo($_GET['code']);
echo("\r\n");
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);
curl_close($curl);
// var_dump($resp);
echo($resp);
// echo(var_dump($resp));
?>
