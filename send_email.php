<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailheader = "From:".$name."<".">\r\n";

    $recipient = "zakyit531@gmail.com";

    mail($recipient, $subject, $message, $mailheader) or die("Error!");

    echo'
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mail-form-style.css">
        <title>Email sent</title>
    </head>
    <body>
        <div class="box">
            <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
            <p class="back">Go back to <a href="main-form.html">Contact Form</a></p>
        </div>
    </body>
    </html>
    ';
?>