<?php
  error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
  $name=htmlspecialchars($_POST['name']);
  $email=htmlspecialchars($_POST['email']);
  $subject=htmlspecialchars($_POST['subject']);
  $message=htmlspecialchars($_POST['message']);
  if($name=='' || $email=='' || $subject=='' || $message==''){
    echo "Լրացրեք բոլոր դաշտերը";
    exit;
  }

  $subject="=?utf-8?B?".base64_encode($subject)."?=";
  $headers="From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
  if(mail("snarek@yandex.ru", $subject,$message,$headers)){
    echo "Նամակը ուղղարկված է";
  }else {
    echo "Նամակը չի ուղղարկվել";
  }
?>
