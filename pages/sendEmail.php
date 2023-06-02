<?php

    require_once '../vendor/autoload.php';

    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.example.org', 25))
    ->setUsername('your username')
    ->setPassword('your password')
    ;

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    // Create a message
    $message = (new Swift_Message('Wonderful Subject'))
    ->setFrom(['john@doe.com' => 'John Doe'])
    ->setTo(['receiver@domain.org', 'other@domain.org' => 'A name'])
    ->setBody('Here is the message itself')
    ;

    // Send the message
    $result = $mailer->send($message);
    // $name = $_POST["firstName"] . " " . $_POST["lastName"];
    // $email = $_POST["email"];
    // $message = $_POST["message"];
    
    // $subject = "Contact form email van " . $name;
    
    // $comment = $name . " heeft het volgende geschreven: \n\n" . $message . "\n\n Naam: " . $name . "\nemail: " . $email;

    // $target = "jcpverbruggen@hotmail.com";

    // $emailStatus = mail($target,$subject,$comment);

    // if ($emailStatus) 
    // {
    //     echo "De email is succesvol verstuurd. Bedankt " . $name . ". Ik zal binnenkort contact met je opnemen.";
    // } 
    // else 
    // {
    //     echo "Er is iets fout gegaan met het versturen van de email.";
    // }

    
?>