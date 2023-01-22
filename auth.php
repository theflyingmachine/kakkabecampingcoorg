<?php
$url = "https://api.instagram.com/oauth/access_token";
echo('Please wait while we fetch your access_token');
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
echo('\n');
echo($_GET['code']);
$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{
  "client_id": 746720933176046,
  "client_secret": "6fbcc075c5afd5d8556a8bdcc814d5f3",
  "grant_type": "authorization_code",
  "redirect_uri": "https://cybergirl.in/auth.php",
  "code": $_GET['code'],
}
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
echo('Checking.....');
$resp = curl_exec($curl);
curl_close($curl);

echo $resp;
?>
