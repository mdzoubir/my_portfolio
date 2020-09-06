<?php
if (isset($_POST['Send'])) {
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])) {
        $empty = "entre tout les chose";
    }else{
        if (filter_var($_POST['email'] , FILTER_VALIDATE_EMAIL)) {
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
}
?>
<section id="contact">
    <div class="contact container">
        <div><h1 class="section-title">Contact <span>Info</span></h1></div>
        <div class="contact-items">
            <div class="contact-item">
                <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" alt=""></div>
                <div class="contact-info">
                    <h1>Phone</h1>
                    <h2>061-7198-646</h2>
                    <h2>061-7198-646</h2>
                </div>
            </div>
            <div class="contact-item">
                <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" alt=""></div>
                <div class="contact-info">
                    <h1>Email</h1>
                    <h2>simozoubir012@gmail.com</h2>
                </div>
            </div>
            <div class="contact-item">
                <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" alt=""></div>
                <div class="contact-info">
                    <h1>Adersse</h1>
                    <h2>tafrant, tagzhirt, beni mellal Maroc</h2>
                </div>
            </div>
        </div>
        <div class="contactSec">
        <p><?php if (isset($empty)) {
                    echo $empty;
                }?></p>
            <form action="" method="POST">
                <div class="item1">
                    <label for="">Full name</label>
                    <input type="text" name="name" require  placeholder="Full name">
                </div>
                <div class="item2">
                    <label for="">Email</label>
                    <input type="email" name="email" require placeholder="Your Email">
                </div>
                <div class="item3">
                    <label for="">Subject</label>
                    <input type="text" name="subject" require placeholder="Subject">
                </div>
                <div class="item4">
                    <label for="">Message</label>
                    <textarea type="text" name="message" require placeholder="Enter Message"></textarea>
                </div>
                    <input type="submit" name="Send" value="Envey" id="" class="send">    
            </form>
           
        </div>
    </div>
</section>