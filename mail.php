<?php
$mail = $_POST['mail'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$text = $_POST['text'];

$to = "dominik.schlaepfer@meta-vue.ch";
$message ="You received  a mail from".$mail;
$message .="Text of the message:".$text;

if(mail($to, $subject,$message)){
  echo "Message sent successfully!";
}
else{
  echo "There occured errors sending the mail. Please send it manually to dominik.schlaepfer@meta-vue.ch";
}
?>