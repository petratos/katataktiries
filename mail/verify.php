<?php

$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array('secret' => '6Ld-SrEUAAAAAKDyocls_Z7EWQAUsOChM-G4rcJz', 'response' => $_POST['response']);

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);

$context  = stream_context_create($options);
$result = json_decode(file_get_contents($url, false, $context));

echo json_encode($result);

?>