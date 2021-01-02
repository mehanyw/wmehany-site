<?php
    $to = "mehanyw@gmail.com";
    $header = "From: Contact Form";
    $subject = "My subject";
    $txt = "Hello world!";
    if(mail($to, $subject, $txt, $header)) {
        echo("seccess!");
    }
    


    // if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"])) {

    //     $content  = "Name: "        . $_POST["name"]    . "\r\n";
    //     $content .= "Email: "       . $_POST["email"]   . "\r\n";
    //     $content .= "Subject: "     . $_POST["subject"]   . "\r\n";
    //     $content .= "Message: "     . "\r\n" . $_POST["message"];
    //     $subject = $_POST["subject"];

    //     if (mail($to, $subject, $content, $header)) {
    //         $result = array(
    //             "message"    => "Thanks for contacting us.",
    //             "sendstatus" => 1
    //         );

    //         echo json_encode($result);
    //     } else {
    //         $result = array(
    //             "message"    => "Sorry, something is wrong.",
    //             "sendstatus" => 0
    //         );

    //         echo json_encode($result);
    //     }

    // }

?>