<?php


$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "5289196367:AAFWBawtvCF6c7KY-HBsRiJ0pmndeWERMko";
$chat_id = " -730446333";
$arr = array(
   'Имя:' => $name,
   'Номер' =>$phone,
   'Email' =>$email
);

foreach ($arr as $key => $value) {
 	$txt .="<b>".$key. "</b> " .$value."%0A";
 };

 $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&prase_mode=html&text={$txt}","r"); 
 if ($sendToTelegram){
 	echo '<h1 class="success">Спасибо!</h1>';
 	  return true;
 }else{
 	header('Location:thank-you.html');
 }
?>