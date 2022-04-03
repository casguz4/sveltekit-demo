<?php
 $input = json_decode(file_get_contents('php://input'), false);
 $to = 'zach.squeegeebros@gmail.com';
 $subject = 'Requested Services';
 $headers = 'From: Squeegee Bros Windows<donot-reply@squeegeebroswindows.com>';
 $message = 'Hi Bros, \n';
 $message .= 'You have recieved a service request!\n';
 $message .= "
    Name: $input->firstName $input->lastName
    Email: $input->email 
    Phone: $input->phone 
    Preferred Method: 
        text: $input->methodText
        phone: $input->methodPhone
        email: $input->methodEmail
 ";

 if ($input->comments != '') {
     $message .= "
        Questions: $input->comments
     ";
 }

//  echo 'true'; #this is for testing
 try {
     if (mail($to, $subject, $message, $headers)) {
         echo 'true';
     } else {
         throw new Error('mail didnt send');
     }
 } catch (\Throwable $th) {
     echo 'false';
     echo $th;
 }