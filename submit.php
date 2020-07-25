<?php 
if(isset($_POST['submit'])){
    $to = "sutharbhargav1997@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    header('Location: contact.html');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>