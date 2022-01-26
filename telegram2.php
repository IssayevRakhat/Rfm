<?php

$name = $_POST['Name'];
$phone = $_POST['Phone_number'];
$email = $_POST['Email_adress'];
$token = "5258785494:AAHitaji2X-1EEzKsKvZJ7wOdL6BR52BVDM";
$chat_id = "-642749805";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email,
  'Класс' => 'Комфорт'
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>