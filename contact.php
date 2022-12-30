<?php

    if(isset($_POST['submit'])) {
        $to = "bouaghadmohamed@gmail.com";
        $subject = wordwrap($_POST['subject'], 70);
        $message = $_POST['message'];
        $header = "From: " . $_POST['email'];

        if (mail($to, $subject, $message, $header)) {
            echo "sent";
        }else {
            echo "some error";
        }
    }

?>