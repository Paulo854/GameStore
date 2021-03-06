<?php

$curl = curl_init();
$name = $_POST['name']; 
$email = $_POST['email']; 
$subject = $_POST['subject']; 
$message = $_POST['message'];

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.sendgrid.com/v3/mail/send",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n  \"personalizations\": [\n    {\n      \"to\": [\n        {\n          \"email\": \"dcsantos136@gmail.com\"\n        }\n      ],\n      \"subject\": \"$subject\"\n    }\n  ],\n  \"from\": {\n    \"email\": \"dcsantos136@gmail.com\"\n  },\n  \"content\": [\n    {\n      \"type\": \"text/html\",\n      \"value\": \"Nome: $name<br>$email<br>$subject<br>$message\"\n    }\n  ]\n}",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer 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",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
header('Location: index.html');

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

?>