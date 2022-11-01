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
            <h1>We sell Happiness :)</h1>
            <p>Flat 40% OFF on premium brands </p>
            <a href="products.php" class="btn btn-warning btn-lg text-white">Shop Now</a>

            </div>
            </div>

        </div>
    </div>
    <div class="text-center pt-4 h3">
        * Be fashionable and Stay Cool *
    </div>

  <div style="display: flex;">
  <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/bl2.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Exclusive Cotton fabrics</h4>
                <p>The most important component of a garment is the fabric.
                     It doesn't matter how well crafted the seams of the garment are - 
                     if it the clothing is made from the wrong fabric,
                     it will not do justice to the design and will look like a disaster....</p>
                <a href="https://blog.makersvalley.net/3-key-points-to-choose-the-right-fabric">read more</a>     
            </div>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/bl1.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Our Ultimate Fashion Blog Post</h4>
                <p>With fashion businesses recognizing the benefits that blogging can bring to their websites, 
                   it’s understandable that many are rushing to create their own blogs. 
                   There is no shortage of potential blog post topics to select from,
                   and a fashion blog is not only cheaper than traditional advertising, 
                   but it can have greater reach as well....</p>
                <a href="https://thecontentpanel.com/blog-post-ideas/fashion-topics/">read more</a>     
            </div>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/bl3.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>90 Best UK Fashion Blogs and Websites</h4>
                <p>The best UK Fashion blog list curated from thousands of blogs on the web and ranked by traffic,
                     social media followers, domain authority & freshness....</p>
                <a href="https://blog.feedspot.com/fashion_blogs_uk/">read more</a>     
            </div>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/bl4.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>When Fashion Gets Easy</h4>
                <p>When it comes to fashion, visuals are key. It’s no wonder, then,
                   that many lovers of style turn to Instagram and fashion blogs to get their fill of all things fashion....</p>
                <a href="https://influencermarketinghub.com/best-fashion-blogs/">read more</a>     
            </div>
        </div> 
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/bl5.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>A Quick Guide for Organic Fabrics and Eco-Friendly Fashion Alternatives</h4>
                <p>As we mention in our blog post The Return of Sustainable Fashion - 
                    the fashion industry isn’t as glamorous or clean as it may portray.
                     With so much of our unwanted clothing filtering into landfill each day....</p>
                <a href="https://blog.makersvalley.net/3-key-points-to-choose-the-right-fabric">read more</a>     
            </div>
        </div>
    </section>

  </div>

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