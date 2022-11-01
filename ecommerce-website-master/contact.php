<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zaman's Fashion | Online Shopping Site for Men</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/4e2c58dad7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body style="margin-bottom:200px">
    <!--Header-->
    <?php
include 'includes/header_menu.php';
?>
    <!--Header ends-->
    <div id="content">
        <div id="bg" class=" ">
            <div class="container" style="padding-top:150px">
            <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;" >
            <h1>Give us Your feedback :)</h1>
            <p>Email to reach us </p>
            <a href="contact.php#contact" class="btn btn-warning btn-lg text-white">Contact</a>
            

            </div>
            </div>

        </div>
    </div>
    <div class="text-center pt-4 h3">
        * Be fashionable and Stay Cool *
    </div>

    <section id="contact-details" class="section-p1">
        <div style="display: flex; padding: 40px;">
            <div class="details">
            <span>Get in Touch</span>
            </br><h2>Visit one of our shops or contact us today</h2></br>
            <h3>Head Office</h3></br>
        
        <div>
            <li>
                <i class="fal fa-map"></i>
                <p>200/2, West shewrapara, Mirpur, Dhaka-1216</p>
            </li>
            <li>
                <i class="far fa-envelope"></i>
                <p>zamansfashion@gmail.com</p>
            </li>
            <li>
                <i class="fas fa-phone-alt"></i>
                <p>+8801799924208</p>
            </li>
            <li>
                <i class="far fa-clock"></i>
                <p>Saturday to Thursday: 10.00am to 5.00pm</p>
            </li>
        </div>
        </div>
        <div class="map" style="padding-left: 50px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.702686007088!2d90.3712125538425!3d23.79359940186233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c734b2a3d2b1%3A0xb117f53bc6013dc!2zVyBTaGV3cmFwYXJhIE1vc3F1ZSBSZCwg4Kai4Ka-4KaV4Ka-!5e0!3m2!1sbn!2sbd!4v1663324408927!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </div>

    </section>

    <section id="form-details">
        <div id="contact" style="display: flex; border: 1px solid #000; padding: 50px;">
        <form action="">
            <h2 style="margin-bottom: 25px;">We would Love to hear from you</h2>
            <input type="text" placeholder="Your Name"></br></br>
            <input type="text" placeholder="E-mail"></br></br>
            <input type="text" placeholder="Subject"></br></br>
            <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea></br></br>
            <button class="normal" style="width: 100%;">Submit</button></br>
        </form>

        <div class="people" style="padding-left: 80px;">
            </br></br></br>
            <div>
                <img src="images/p1.jpg" alt="">
                <p><span>Ferdous Wahid</span> Senior Msrketing Manager <br>
                     Phone: +88017******** <br> Email: wahid@example.com</p>
            </div>
            <div>
                <img src="images/p1.jpg" alt="">
                <p><span>Ferdous Wahid</span> Senior Msrketing Manager <br>
                     Phone: +88017******** <br> Email: wahid@example.com</p>
            </div>
            <div>
                <img src="images/p1.jpg" alt="">
                <p><span>Ferdous Wahid</span> Senior Msrketing Manager <br>
                     Phone: +88017******** <br> Email: wahid@example.com</p>
            </div>
        </div>
        </div>
    </section>

    
    <!--footer -->
    <?php include 'includes/footer.php'?>
    <!--footer end-->




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

if(window.location.href.indexOf('#login') != -1) {
  $('#login').modal('show');
}

});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
    
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>




</html>