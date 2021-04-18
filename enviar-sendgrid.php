<?php

require("./sendgrid-php/sendgrid-php.php");

$email_site = "brunoalbarado19@gmail.com";
$nome_site = "CakeExpress";

$email_user = $_POST["brunoalbarado27@outlook.com"];
$nome_user = $_POST["brunoalbarado27"];

$body_content = "";
foreach( $_POST as $field => $value) {
  if( $field !== "leaveblank" && $field !== "dontchange" && $field !== "enviar") {
    $sanitize_value = filter_var($value, FILTER_SANITIZE_STRING);
    $body_content .= "$field: $value \n";
  }
}

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom($email_site, $nome_site);
$email->addTo($email_site, $nome_site);

$email->setReplyTo($email_user, $nome_user);

$email->setSubject("Formulário Bikcraft");
$email->addContent("text/plain", $body_content);

$sendgrid = new \SendGrid("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");
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo "Caught exception: ". $e->getMessage() ."\n";
}