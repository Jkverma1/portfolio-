<?php 

$message_sent = false;

if(isset($_POST['email']) && $_POST['email'] != ''){

    if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

        $name = $_POST['name'];

        $email = $_POST['email'];

        $website = $_POST['message'];

        $subject = $_POST['subject'];


        $from = 'admin@jatinkumar.xyz';

        $subject = "quotation information";

        $email_body = "User Name: $name.\n".
                            "User Email: $email.\n".
                                    "subject: $subject.\n".
                                        "User Message: $message.\n";

        $to = "jatins9227@gmail.com";

        $headers = "From: $from \r\n";

        mail($to, $subject, $email_body, $headers);

        $message_sent = true;

}
}
?>