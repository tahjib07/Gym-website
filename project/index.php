<html>
  <head>
    <title>PHP Test</title>
    <style>
    body {
        margin: 0;
        padding: 0;

        background-image: url('img/bg.jpg');
        background-repeat: no-repeat;
        background-size: 1800px 1000px;

        color: white;

    }

    .left {
        
        display: inline-block;
        font-family: monospace;
        
        

    }

    .mid {
        
        display: block;
        width: 36%;
        margin: -6px auto;
        font-family: 'Baloo Bhaina 2', cursive;
        
    }


    .right {
        
        display: inline-block;
        position: absolute;
        top: 15px;
        right: 100px;
        font-family: 'Baloo Bhaina 2', cursive;
 }

    .navbar {
        display: inline-block;
    }

    .navbar li {
        display: inline-block;
        font-size: medium;

    }

    .navbar li a {
        color: white;
        font-size: large;
        text-decoration: none;
        padding: 19px;
    }

    .navbar li a:hover {
        text-decoration: underline;
        color: grey;
    }

    .left img {
        width: 88px;
        filter: invert(100%);
        position: absolute;
        top: 0px;
        left: 100px;


    }

    .left div {

        text-align: center;
        padding: 0px 10px;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        position: absolute;
        top: 59px;
        left: 87px;
    }

    .btn {
        padding: 5px 15px;
        background-color: rgb(0, 0, 0);
        color: white;
        border: 2px solid grey;
        border-radius: 10px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: rgb(41, 40, 40);

    }

    .container {
        border: 2px solid white;
        margin: 108px 550px;
        padding: 25px 3px;
        width: 32%;
        border-radius: 21px;
        background-color: rgba(0, 0, 0, 0.472);
    }

    .form-group input {
        text-align: center;
        display: block;
        width: 295px;
        border: 2px solid black;
        margin: 3px auto;
        padding: 0px;
        font-size: 12px;
        border-radius: 6px;
        font-family: 'Baloo Bhaina 2', cursive;      
    }
    .container h1{
        text-align: center;
    }
    .container button{
        display: block;
        margin: 14px auto;
        width: 55%;
    }
</style>
  </head>
  <body>

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

 <header class="header">
        <div class="left">
            <img src="img/logo.jpg" alt="">
            <div>Tahjib Fitness</div>

        </div>
        <div class="mid">
            <ul class="navbar">
                <li> <a href="#">Home</a></li>
                <li> <a href="#">About Us</a></li>
                <li> <a href="#"> Fitness Calculator</a></li>
                <li> <a href="#"> Contact Us</a></li>
            </ul>

        </div>
        <div class="right">
            <button class="btn">Call Us</button>
            <button class="btn">Email Us</button>

        </div>
    </header>
    <div class="container">
        <h1>Join the best gym of Chattogram Now</h1>
        <form action="index.php" method="POST">
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter Your Name...">
            </div>            
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter Your Email...">
            </div>
            <div class="form-group">
                <input type="number" name="age" placeholder="Enter Your Age...">
            </div>
            <div class="form-group">
                <input type="text" name="gender" placeholder="Enter Your Gender...">
            </div>
            <div class="form-group">
                <input type="text" name="locality" placeholder="Enter Your Locality...">
            </div>
            <button type="submit" name="submit" class="btn">Submit</button>
        </form>

    </div>
  </body>
</html>