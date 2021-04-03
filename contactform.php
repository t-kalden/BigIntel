<?php
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];

        $mailTo = "info@bigintel.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have received a message from ".$name.".\n\n".$message;


        mail($mailTo, $txt, $headers);
        header("Location: www.bigintel.com/contact.html");
        echo '<script>alert("Contact Form")</script>'; 
    }
   
?>