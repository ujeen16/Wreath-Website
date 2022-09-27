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
<!--
<script>
    $(document).ready(function(){
        $("form").submit(function(event) {
            event.preventDefault();
            var name = $("#mail-name").val();
            var email = $("#mail-email").val();
            var gender = $("#mail-gender").val();
            var message = $("#mail-message").val();
            var submit = $("#mail-submit").val();
            $(".form-message").load("form-handler.php", {
                name: name,
                name: email,
                name: gender,
                name: message,
                submit: submit
            });
        });
    });
</script>
-->

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
        <h1>Contact Us</h1>
        </script>
    </section>

<!-------- contact us -------->

<section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45382.376534539435!2d-73.4625727249945!3d44.691061778627464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cca38a8e8a57ed7%3A0xb5b0e8a1c5537415!2sPlattsburgh%2C%20NY!5e0!3m2!1sen!2sus!4v1661697682013!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class="contact-us">

    <div class="row">

        <div class="contact-col">
            <div>
                <i class="fa fa-home"></i>
                <span>
                    <h5>Plattsburgh, New York 12901</h5>
                    <p>available for pickup/drop off or postage</p>
                </span>
            </div>
            <div class="contact-col-email">
                <i class="fa fa-envelope-o"></i>
                <span>
                    <h5>support@<wbr>thewreathcrafteria.com</h5>
                    <p>please include a subject with any inquiries thank you</p>
                </span>
            </div>
        </div>

        <!------ Email Form ------->   
        
        <div class="contact-col-form">
            <div class="contact-col-form-box">
                <!--<form action="form-handler.php" method="post">-->
                <h3>Get in Touch</h3>
                <div class="form-name">
                    <i class="fa fa-user"></i>
                    <input type="text" name="name" placeholder="Name" id="name">
                </div>
                <div class="form-email">
                    <i class="fa fa-envelope"></i>
                    <input type="email" placeholder="Email" id="email" name="email">
                </div>
                <div class="form-subject">
                    <i class="fa fa-thumb-tack"></i>
                    <input type="text" placeholder="Subject" id="subject" name="subject">
                </div>
                <div class="form-message-box">
                    <textarea id="msg" name="msg" cols="30" rows="10" placeholder="Message"></textarea>
                </div>
                <div class="form-button">
                    <button type="submit" id="send" onclick="message()">Send</button>
                </div>
                <div class="form-validation-message">
                    <div class="form-success" id="success">Your Message Successfully Sent</div>
                    <div class="form-danger" id="danger">Feilds Can't be Empty</div>
                </div>
            <!--</form> -->
            </div>
        </div>
    
        <!--
        <div class="contact-col">

            <form action="form-handler.php" method="post">
                <input type="text" name="name" placeholder="Enter your name" required>
                <input type="email" name="email" placeholder="Enter email address" required>
                <input type="text" name="subject" placeholder="Enter your subject" required>
                <textarea rows="8" name="message" placeholder="Message" required></textarea>
                <button type="submit" class="hero-btn red-btn">Send Message</button>
            </form>
        </div>
    -->
    </div>
</section>
<!--
<form action="mail.php" method="POST">
    <input id="mail-name" type="text" name="name" placeholder="Full name">
    <br>
    <input id="mail-email" type="text" name="email" placeholder="E-mail">
    <br>
    <select id="mail-gender" name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <br>
    <textarea id="mail-message" name="message" placeholder="Message"></textarea>
    <br>
    <button id="mail-submit" type="submit" name="submit">Send e-mail</button>
    <p class="form-message"></p> 
</form>
-->

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
<script src="form_validation-1.5.js"></script>

</body>
</html>