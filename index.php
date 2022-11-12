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
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="images/wreath_logo_white_favicon.png">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="swiper-bundle.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
    <!-- Boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
    <section class="header">
        <nav>
            <a class="header-logo" href="index.php"><img src="images/wreath_logo_white_3.png"></a>
            <!--<i class="fa fa-facebook"></i>-->
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    <div class="text-box">
        <h1>The Wreath Crafteria</h1>
        <p>Making wreaths is my passion.  I love creating all kinds including
        mesh, ribbon, and rope.<br> Scroll Down or search the gallery to learn more!
        </p>
        <a href="gallery.php" class="hero-btn">Gallery</a>
    </div>    
    </section>

<!------ Design ------->
<section class="design">
    <h1>Wreaths</h1>
    <p>Design Basis</p>
    <div class="row">
        <div class="design-col">
            <h3>Deco Mesh</h3>
            <p>Deco mesh is extremely versitile and can be used for some draw dropping designs.  Anything from
                unicorns and the Grinch to a magical spiral background.  Deco mesh is always a great option for 
                any wreath.
            </p>
        </div>
        <div class="design-col">
            <h3>Poly Burlap</h3>
            <p>This mesh is a much thicker water proof mesh.  It is a great tool for creating different forms of 
                sunflowers.  It can come in different lengths, sizes, and colors!
            </p>
        </div>
        <div class="design-col">
            <h3>yarn</h3>
            <p>Yarn can be a great base for many forms of wreaths.  It can be utilized to give any wreath a warm cozy feel.
                It is also an amazing tool to make beautiful dog paw prints.
            </p>
        </div>
    </div>

</section>

<!------- wreathTypes ------->

<section class="wreathTypes">
    <h1>Options</h1>
    <p>Wreaths can come in all shapes and sizes!</p>

    <div class="row">
        <div class="wreathTypes-col">
            <img src="images/wreaths/dog_paw_1_adjusted.jpeg">
            <div class="layer">
                <h3>Custom</h3>
            </div>
        </div>
        <div class="wreathTypes-col">
            <img src="images/wreaths/St_Patricks_1_adjusted.jpeg">
            <div class="layer">
                <h3>Holidays</h3>
            </div>
        </div>
        <div class="wreathTypes-col">
            <img src="images/wreaths/bees_adjusted.jpeg">
            <div class="layer">
                <h3>Seasonal</h3>
            </div>
        </div>
    </div>
</section>

  <!------ Gifts ------->
  <section class="gifts">
    <h1>Gifts</h1>
    <p>A wreath is a perfect present for anyone!</p>

    <div class="row">
        <div class="gifts-col">
            <img src="images/wreaths/unicorn.jpeg" alt="">
            <h3>Children</h3>
            <p>Is your daughter obsessed with unicorns?  Does your son love baseball?  No
            matter what the theme there is a wreath that makes the perfect surprise.  That will
            give your child the expression they need to show their passion.
            </p>
        </div>
        <div class="gifts-col">
            <img src="images/heart_2.jpeg" alt="">
            <h3>Significant Other</h3>
            <p>It can sometimes be difficult to find a gift for that special someone.  
            You want to find something unique that blows them away.  Possibly something they 
            have never even thought of before?  Look no further a custom wreath is the perfect 
            present for that special someone.
            </p>
        </div>
        <div class="gifts-col">
            <img src="images/wreaths/dog_paw_2.jpeg" alt="">
            <h3>Pet Enthusiast</h3>
            <p>Not everyone is a pet person.  However, when someone is they love their best 
            friend more than anything.  If you love dogs or cats or horses or any other animal 
            there is a wreath to show them off.
            </p>
        </div>
    </div>

  </section>
<!------- Process Design Slider -------->

<section class="Design-Slider">
      <div class="design-slider-content mySwiper">
      <h1>The Wreath Crafting Process</h1>
        <div class="design-slide swiper-wrapper">
          <!-- content 1 -->
          <div class="slide-content swiper-slide">
            <!--<h1>The Wreath Crafting Process</h1>-->
            <div class="split-holder">
              <div class="left-content">
                <img src="images/slider/firstcontact.png" alt="" class="image" />
                <a class="accredit" href="http://www.freepik.com">Designed by vector4stock / Freepik</a>
              </div>
              <div class="right-content">
                <h2>Stage 1: First Contact/Contact Form</h2>
                <p>
                  The first step toward any wreath is by using the contact form. If there is a wreath you specifically
                  want that has been made before it can be remade. However, Amy
                  has a large stock of wreath making materials and if you would
                  like to explore alternative designs or colors that is
                  absolutely part of the process. If you have any questions or
                  would just like a consultation please fill out the form or
                  send an email and we can talk through the process together.
                </p>
              </div>
            </div>
            <div class="design-slider-buttons">
              <a href="contact.php" class="hero-btn red-btn">Pricing</a>
              <a href="contact.php" class="hero-btn red-btn">Contact Me</a>
            </div>
          </div>
          <!-- content 2 -->
          <div class="slide-content swiper-slide">
            <div class="split-holder">
              <div class="left-content">
                <img
                  src="images/slider/design.png"
                  alt=""
                  class="image"
                />
                <a class="accredit" href="http://www.freepik.com">Designed by vector4stock / Freepik</a>
              </div>
              <div class="right-content">
                <h2>Stage 2: Planning/Drafting</h2>
                <p>
                  After contacting The Wreath Crafteria there will be a
                  consultation phase which may take place via messaging or a
                  phone call. In this consultation you may either request a
                  specific wreath or have a discussion on the possible designs.
                  Any theme has potential to make an amazing wreath!
                </p>
              </div>
            </div>
            <div class="design-slider-buttons">
              <a href="contact.php" class="hero-btn red-btn">Pricing</a>
              <a href="contact.php" class="hero-btn red-btn">Contact Me</a>
            </div>
          </div>
           <!-- content 3 -->
          <div class="slide-content swiper-slide">
            <div class="split-holder">
              <div class="left-content">
                <img src="images/slider/building.png" alt="" class="image" />
                <a class="accredit" href="http://www.freepik.com">Designed by pch.vector / Freepik</a>
              </div>
              <div class="right-content">
                <h2>Stage 3: Building/Revisions</h2>
                <p>
                  Once a wreath design has been decided upon the next stage is
                  the building phase. Some wreaths take longer than others and
                  Amy will not put out work that is subpar with fraying. This
                  phase should not take longer than a week and once the initial
                  wreath is finished a picture will be sent to the recipient
                  prior to purchase. It is possible to change some things about
                  the wreath after the building phase such as the sign.
                </p>
              </div>
            </div>
            <div class="design-slider-buttons">
              <a href="contact.php" class="hero-btn red-btn">Pricing</a>
              <a href="contact.php" class="hero-btn red-btn">Contact Me</a>
            </div>
          </div>
          <!-- content 4 -->
          <div class="slide-content swiper-slide">
            <div class="split-holder">
              <div class="left-content">
                <img src="images/slider/shippinga.png" alt="" class="image" />
                <a class="accredit" href="http://www.freepik.com">Designed by vector4stock / Freepik</a>
              </div>
              <div class="right-content">
                <h2>Stage 4: Shipping/Payment</h2>
                <p>
                  If you are local to Plattsburgh then local delivery could be
                  plausible. Otherwise, the customer must cover the cost of
                  shipping as an additional charge with the cost of the wreath.
                  Payment may be sent through paypal and the wreath should reach
                  the customer within one business week. If there are any
                  questions or desire for other payment method please contact
                  The Wreath Crafteria with any concerns.
                </p>
              </div>
            </div>
            <div class="design-slider-buttons">
              <a href="contact.php" class="hero-btn red-btn">Pricing</a>
              <a href="contact.php" class="hero-btn red-btn">Contact Me</a>
            </div>
          </div>
          <!-- content 5 -->
          <div class="slide-content swiper-slide">
            <div class="split-holder">
              <div class="left-content">
                <img
                  src="images/slider/support.png"
                  alt=""
                  class="image"
                />
                <a class="accredit" href="http://www.freepik.com">Designed by vector4stock / Freepik</a>
              </div>
              <div class="right-content">
                <h2>Stage 5: Support</h2>
                <p>
                  After the wreath has been shipped you're not on your own. The
                  Wreath Crafteria guarantees that you will love your wreath and
                  if you do not then you are eligible for a full refund. If
                  there are any questions or cause for concern do not hesitate
                  to reach out to 'support@thewreathcrafteria.com'.
                </p>
              </div>
            </div>
            <div class="design-slider-buttons">
              <a href="contact.php" class="hero-btn red-btn">Pricing</a>
              <a href="contact.php" class="hero-btn red-btn">Contact Me</a>
            </div>
          </div>
        </div>
        <div class="swiper-button-next nav-btn"></div>
        <div class="swiper-button-prev nav-btn"></div>
        <div class="swiper-pagination"></div>
      </div>
    </section>


<!-------- testimonials -------->

<section class="testimonials">
    <h1>Wreath Owners!</h1>
    <p>What people have to say about their experience</p>
    <div class="row">
        <div class="testimonial-col">
            <img src="images/mrsa flowers.JPG">
            <div>
                <p>Amy did an amazing job creating my dream wreath.  I am obsessed
                with bees and she was able to create the perfect wreath for me.  It
                was custom and everything I wanted.  After that I just needed her to 
                make an easter wreath for me!  Easter is my favorite holiday and again
                she is absolutle incredible.  I highly recommend her to anyone interested
                in decorating or expressing the things that they love.
                 <h3>Marissa Tessier</h3>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                </p>
            </div>
        </div>
        <div class="testimonial-col">
            <img src="images/corinna_christmas.jpg">
            <div>
                <p>I love Christmas and I love watching the Grinch every single year!!  When Amy 
                said she could make me a Grinch wreath I was skeptical.  However, She has totally 
                blown me away.  I am so excited to display my Grinch wreath every year on our front
                door.  If you're considering contacting her... just do it. She is amazing.
                 <h3>Corinna Fish</h3>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                </p>
            </div>
        </div>
    </div>
</section>

<!-------- Call To Action -------->

<section class="cta">
    <h1>Contact Me For A Custom Wreath Or Check The Gallery For One You 
        Love
    </h1>
    <a href="contact.php" class="hero-btn">CONTACT US</a>
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

<!-------- Swiper JS --------->
<script src="swiper-bundle.min.js"></script>

<!-- Java Script for slider -->
<script src="script.js"></script>

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