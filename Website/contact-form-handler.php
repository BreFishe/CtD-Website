<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "brennen.fisher11@gmail.com";

    $email_from = "New Form Submission";

    $email_from = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to = "brennen.fisher11@gmail.com";

    $headers = "From: $email_from\r\n";

    $headers .= "Reply-To: $visitor_email\r\n";

    mail($to,$email,_subject,$email_body,$headers);

    header("location: contact.html");

    ?>