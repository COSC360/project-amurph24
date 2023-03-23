<?php
$url = 'https://cosc360.ok.ubc.ca/phpmyadmin'; // URL to access
$username = '23286388'; // Replace with your username
$password = '23286388'; // Replace with your password

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password"); // Set username and password
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Ignore SSL verification (not recommended)
$response = curl_exec($ch);

if ($response === false) {
  echo 'Error: ' . curl_error($ch);
} else {
  echo $response;
}

curl_close($ch);
?>