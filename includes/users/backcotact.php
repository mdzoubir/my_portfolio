<?php
if (isset($_POST['Send'])) {
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])) {
        $empty = "entre tout les chose";
    }else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $to  = "simozoubir012@gmail.com";
        $body = "";
        $body .= "From ".$name. "\r\n";
        $body .= "From ".$email. "\r\n";
        $body .= "From ".$message. "\r\n";
        mail($to, $subject, $body);
    }
}
?>