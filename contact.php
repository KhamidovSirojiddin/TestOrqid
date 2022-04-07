<?php

if (empty($_POST['name']) || empty($_POST['email'])) {
    echo 'Validation Error';
    die();
}
if (empty($_POST['captcha'])) {
    echo '*Please check the captcha field.';
    die();
}
$secret="6LdSuYUcAAAAAPPAwtmKLoqbLknnAAtLImcEHQ_c";
$token = $_POST["captcha"];

// call curl to POST request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => $secret, 'response' => $token)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);


// verify the response
if($arrResponse["success"] != '1' ) {
  echo "Captcha validation failed. Please try again.";
  die();
}

// $to = "info@azterik.com";
// $subject = "Contact Request from ".$_POST['name'];
$to = "info@orqid.io";
$subject = "Orqid Prospect";
$msg = "Visitor Name: ".$_POST['name']. ",  Visitor Email: ".$_POST['email']. ",  Visitor Phone: ".$_POST['phone']. ",  Visitor Subject: ".$_POST['subject']. ",  Visitor Message:".$_POST['message'];

if(mail($to,$subject,$msg)) {
    echo 'success';
} else {
    echo 'Something went wrong. Please try again later.';
}
die();

?>




<?php  /*

  if ($_POST) {
    $toEmail = 'info@azterik.com';
    $values = [];
    
    if ($_POST['name']) {
      $subject = 'Contact Request From ' . htmlspecialchars($_POST['name']);
    } else {
      $subject = 'Contact Request';
    }

    foreach ($_POST as $propName => $propValue) {
      if ($propName !== 'message') {
        $values[] = 'Visitor ' . htmlspecialchars($propName) . ': ' . htmlspecialchars($propValue);
      }
    }

    if ($_POST['message']) {
      $values[] = '<br>Visitor message:<br><br>' . htmlspecialchars($_POST['message']);
    }

    $body = implode('<br>', $values);
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
    
    if ($_POST['name'] || $_POST['email']) {
      $headers .= "From: ";
    }

    if ($_POST['name']) {
      $headers .= htmlspecialchars($_POST['name']);
    }

    if ($_POST['email']) {
      $headers .= "<" .htmlspecialchars($_POST['email']). ">";
    }

   $headers .= "\r\n";

    mail($toEmail, $subject, $body, $headers);
  } */

?>