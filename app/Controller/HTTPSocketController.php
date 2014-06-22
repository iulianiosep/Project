<?php
class HTTPSocketController extends AppController{
//socket multipalyer

<?php

$ch = curl_init();

$data = array('Your' => 'Data');


curl_setopt($ch, CURLOPT_URL, "http://localhost/WeGame/multiplayer");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));


$result = curl_exec($ch);


curl_close($ch);

print_r($result); 

$HttpSocket = new HttpSocket();
$results = $HttpSocket->get($url, null, $options);

debug($HttpSocket->request);




?>