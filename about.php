<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Wreath Crafteria</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/png" href="images/wreath_logo_white_favicon.png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
    <section class="sub-header">
        <nav>
            <a class="header-logo" href="index.php"><img src="images/wreath_logo_white_3.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <!--<li><a href="blog.php">BLOG</a></li>-->
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>About Us</h1>
    </section>

<!-------- about us content -------->
<section class="about-us">
    <div class="row">
        <div class="about-col">
            <h1>Wreaths<br/>Maine<br/>Animals</h1>
            <p>Amy loves three things wreaths, Maine, and her dogs Jimmy and Payton.  She has rarely made the 
                same wreath twice and has been able to experiement and create some unique art.  This includes 
                both the Maine wreath and dog print wreaths she has made.  Amy is very passionate about creating
                something that can be taylor made to someones heartfelt vision.  Do you love your animal, 
                significant others querk, or personal love?  Amy is ready to personalize a beautiful creation 
                and do what she loves to help you express yours.
            </p>
            <div>
            <a href="contact.php" class="hero-btn red-btn">CONTACT ME</a>
            </div>
        </div>
        <div class="about-col">
            <img src="images/dogs_3.jpeg">
        </div>
    </div>
</section>

<!------- Footer -------->
<section class="footer">
    <h4>About Us</h4>
    <p class="footer-para">Amy is very passionate about creating quality products that everyone will love.  She is extremely specific
    when doing what she loves and everything must be perfect.  Her belief is quality is most important and she will
    only put out work which she would be proud to call hers. To learn more Don't hesitate to contact her using the 
    contact us page.  
    </p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>   
            <i class="fa fa-etsy"></i> 
        </div>
        <p>
            Made with <i class="fa fa-heart-o"></i> by Amy        
        </p>
        <p class="footer-copyrights">
            ALL RIGHTS RESERVED <i class="fa fa-copyright"></i> 2022 The Wreath Crafteria
        </p>
 </section>

<!--------JavaScript for Toggle Menu-------->
<script>
    var navLink = document.getElementById("navLinks");

    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }

</script>

</body>
</html>