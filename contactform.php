<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['Subject'];
  $mailFrom = $_POST['EMAIL'];
  $message = $_POST['Message'];

  $mailto ="admin@submarinesound.me";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an email from ".$name ".\n\n".$message;

  mail($mailto, $subject, $txt, $headers);
  header("Location: contact.php?mailsend")
}
