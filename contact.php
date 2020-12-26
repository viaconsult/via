<?php

$message_sent=false;
echo"Veuillez remplir tous les champs du formulaire";

if(isset($_POST['submit']))
    {
        //submit the form

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $to="viamaroc@yahoo.fr";
        $body="";

         $body.="From:".$name."\r\n";
         $body.="From:".$email."\r\n";
		 $body.="From:".$subject."\r\n";
         $body.="From:".$message."\r\n";


        mail($to,$subject,$body);

        $message_sent=true;
	    echo"Votre message est envoyé avec succès";
    }
	
?>

