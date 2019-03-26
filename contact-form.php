<?php
 

$name = htmlspecialchars($_POST["name"]);
$fullname = htmlspecialchars($_POST["fullname"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);
 

$address = "iwmthia@gmail.com";
$sub = "Message from site";
 

$mes = "Message from site\n
Name: $name 
Fullname: $fullname
Email: $email
Mesage: $message";
 
{

$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
if (mail($address, $sub, $mes, $from)) {
 header('Refresh: 5; URL=http://__________');
 echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо отправлено, через 5 секунд вы вернетесь на страницу XXX</body>';}
else {
 header('Refresh: 5; URL=http://__________');
 echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо не отправлено, через 5 секунд вы вернетесь на страницу YYY</body>';}
}
exit; 
?>