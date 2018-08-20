<?php

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$to = "info@jknailspa.com";
$subject = "New Message";

mail ($to, $subject, $comment, "From:" . $email );
echo "Your Message has been sent";


?>