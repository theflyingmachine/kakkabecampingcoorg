<?php
$url = "https://api.instagram.com/oauth/access_token";
echo('Please wait while we fetch your access_token');
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
  "Content-Type: application/x-www-form-urlencoded",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = "client_id=746720933176046&client_secret=6fbcc075c5afd5d8556a8bdcc814d5f3&grant_type=authorization_code&redirect_uri=https://cybergirl.in/auth.php&code=".$_GET['code'];
// echo($data);
</br>
echo('Checking.....');

</br>
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);
curl_close($curl);
// var_dump($resp);
echo($resp);
// echo(var_dump($resp));
?>
