

<?php 
if(isset($_POST['submit'])){
    $to = "tahjibahmedsiddique@example.com"; 
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $age = $_POST['age'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " " . $age . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); 
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";

    }
?>

