<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <title>PHP Contact Form</title>
</head>

<link rel="stylesheet href"styles.css"> 
<body>
  
<style>
body {
  background: #6ba1ff;
  font-family: "Roboto", sans-serif;
}

main {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: auto;
  border: 5px black;
  
}

input[type='text'] { 
  font-size: 14px; 
  height: 15px;
  width: 390px;
}

h2 {
font-weight: bold;
}

label {
  font-weight: bold;  
  padding: 10 0;
}

textarea {
  font-family: "Roboto";
}

button {
  font-weight: bold;
  display: block;
  width: 100px;
  height: 35px;
  border-radius: 10px;
  font-size: 15px; 
}

</style>

<div id="container">
<main>
  <h2>Contact Me</h2><br>

  <form class="contact-form" action="contactform.php" method="post">

    <label>Full Name</label><br>
    <input type="text" class="textbox" name="name" required><br>

    <label>Email Address</label><br>
    <input type="text" class="texbox" name="mail" required><br>

    <label>Subject</label><br>
    <input type="text" class="textbox" name="subject" required><br>  

    <label>Your Message</label><br>
    <textarea id="message" name="message" rows="8" cols="53" required></textarea><br>

    <button type="submit" name="submit">Send Mail</button>
</main>
</div>



<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "pjmofperk@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "Mail from".$name.".\r\n".$message;


  mail($mailTo. $subject, $text, $headers);
  header("location: index.php?mailsend");
}

?>

</body>
</html>