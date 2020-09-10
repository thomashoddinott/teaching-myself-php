<?php

if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = ""; //can generate throwaway address at: https://temp-mail.org/en/
  $headers = "From: ".$mailFrom;
  $txt = "You have received an e-mail from ".$name.".\n\n".$message;

  //inbuilt function - wicked!
  mail($mailTo, $subject, $txt, $headers);
  //n.b. this won't work without more configuring of localhost 
  //if you have a site that can serve PHP you could test it there
  //will leave it untested as the code is easy to understand
  header("Location: index.php?mailsend");
}