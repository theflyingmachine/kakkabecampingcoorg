
<?php
$url = 'https://api.instagram.com/oauth/access_token';
echo('Please wait while we fetch your access_token');
$data = array('client_id' => '746720933176046', 'client_secret' => '6fbcc075c5afd5d8556a8bdcc814d5f3', 'grant_type' => 'authorization_code', 'redirect_uri' => 'https://cybergirl.in/auth.php', 'code' => $_GET['code']);
echo($_GET['code']);
echo('Checking.....');
// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);
?>

