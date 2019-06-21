<?php

 $to = 'vredes@live.com'; // replace this mail with yours
 $firstname = $_POST["name"];
 $e_mail= $_POST["email"];
 $text= $_POST["message"];
 $subject= $_POST["subject"];

 $headers = 'MIME-Version: 1.0' . "\r\n";
 $headers .= "From: " . $e_mail . "\r\n"; // Sender's E-mail
 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
 $message ='<table style="width:100%">
     <tbody><tr>
         <td>'.$firstname.'  '.$subject.'</td>
          </tr>
          <tr><td>Email: '.$e_mail.'</td></tr>
          <tr><td>phone: '.$subject.'</td></tr>
          <tr><td>Text: '.$text.'</td></tr>
         </tbody></table>';
        if (@mail($to, $email, $message, $headers))
            {
              echo 'The message has been sent.';
            }else{
              echo 'failed';
            }

?>
