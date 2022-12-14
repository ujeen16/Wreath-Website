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
    <link rel="stylesheet" href="lightbox.css">
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
        <h1>Gallery</h1>
    </section>

<!-------- Gallery -------->
<div class="gallerycontainer">
    <div class="gallery">
        <!--
        <div class="gallery-flowers">
            <h1>Flowers</h1>
            <img src="images/wreaths/green_flower.jpeg" alt="">
        </div>
        --->        
        
        <!-- these are flowers -->
        <a href="images/wreaths/sun_flower_4_adjusted.jpeg" data-lightbox="wreaths" data-title="Flower 1">           
            <img src="images/wreaths/sun_flower_4_adjusted.jpeg" alt="">
        </a>
        <a href="images/wreaths/sun_flower_6_adjusted.jpeg" data-lightbox="wreaths" data-title="Flower 2">           
            <img src="images/wreaths/sun_flower_6_adjusted.jpeg" alt="">
        </a>
        <a href="images/wreaths/RWB_flower_2.jpeg" data-lightbox="wreaths" data-title="Flower 3">           
            <img src="images/wreaths/RWB_flower_2.jpeg" alt="">
        </a>
        <a href="images/wreaths/sun_flower_7_adjusted.jpeg" data-lightbox="wreaths" data-title="Flower 4">           
            <img src="images/wreaths/sun_flower_7_adjusted.jpeg" alt="">
        </a>
        <a href="images/wreaths/sun_flower_8.jpeg" data-lightbox="wreaths" data-title="Flower 5">           
            <img src="images/wreaths/sun_flower_8.jpeg" alt="">
        </a>
        <a href="images/wreaths/green_flower_adjusted.jpeg" data-lightbox="wreaths" data-title="Flower 6">           
            <img src="images/wreaths/green_flower_adjusted.jpeg" alt="">
        </a>
        <a href="images/wreaths/RWB_flower_1.jpeg" data-lightbox="wreaths" data-title="Flower 7">           
            <img src="images/wreaths/RWB_flower_1.jpeg" alt="">
        </a>
        <a href="images/wreaths/sun_flower_5.jpeg" data-lightbox="wreaths" data-title="Flower 8">           
            <img src="images/wreaths/sun_flower_5.jpeg" alt="">
        </a>
        <a href="images/wreaths/sun_flower.jpeg" data-lightbox="wreaths" data-title="Flower 9">           
            <img src="images/wreaths/sun_flower.jpeg" alt="">
        </a>
        <a href="images/wreaths/maine.jpeg" data-lightbox="wreaths" data-title="Flower 10">           
            <img src="images/wreaths/maine.jpeg" alt="">
        </a>
        <!--
        <img src="images/wreaths/sun_flower_4_adjusted.jpeg" alt=""> 
        <img src="images/wreaths/sun_flower_6_adjusted.jpeg" alt="">
        <img src="images/wreaths/RWB_flower_2.jpeg" alt="">
        <img src="images/wreaths/sun_flower_7_adjusted.jpeg" alt="">
        <img src="images/wreaths/sun_flower_8.jpeg" alt="">      
        <img src="images/wreaths/green_flower_adjusted.jpeg" alt="">
        <img src="images/wreaths/RWB_flower_1.jpeg" alt=""> 
        <img src="images/wreaths/sun_flower_5.jpeg" alt="">      
        <img src="images/wreaths/sun_flower.jpeg" alt="">      
        <img src="images/wreaths/maine.jpeg" alt="">
        -->

        <!-- these are easter--> 
        <a href="images/wreaths/easter_eggs_adjusted.jpeg" data-lightbox="wreaths" data-title="Easter 1">           
            <img src="images/wreaths/easter_eggs_adjusted.jpeg" alt="">
        </a>
        <a href="images/wreaths/bunny_2.jpeg" data-lightbox="wreaths" data-title="Easter 2">           
            <img src="images/wreaths/bunny_2.jpeg" alt="">
        </a>
        <a href="images/wreaths/easter.jpeg" data-lightbox="wreaths" data-title="Easter 3">           
            <img src="images/wreaths/easter.jpeg" alt="">
        </a>
        <a href="images/wreaths/bunny_adjusted.jpeg" data-lightbox="wreaths" data-title="Easter 4">           
            <img src="images/wreaths/bunny_adjusted.jpeg" alt="">
        </a>
        <a href="images/wreaths/bunny_3_adjusted.jpeg" data-lightbox="wreaths" data-title="Easter 5">           
            <img src="images/wreaths/bunny_3_adjusted.jpeg" alt="">
        </a>    
        <!--
        <img src="images/wreaths/easter_eggs_adjusted.jpeg" alt="">
        <img src="images/wreaths/bunny_2.jpeg" alt="">
        <img src="images/wreaths/easter.jpeg" alt="">
        <img src="images/wreaths/bunny_adjusted.jpeg" alt="">      
        <img src="images/wreaths/bunny_3_adjusted.jpeg" alt="">
        -->

        <!-- other -->
        <a href="images/wreaths/dog_paw_1_adjusted.jpeg" data-lightbox="wreaths" data-title="Pet 1">           
            <img src="images/wreaths/dog_paw_1_adjusted.jpeg" alt="">
        </a>
        <a href="images/wreaths/dog_paw_2.jpeg" data-lightbox="wreaths" data-title="Pet 2">           
            <img src="images/wreaths/dog_paw_2.jpeg" alt="">
        </a>
        <a href="images/wreaths/heart_adjusted.jpeg" data-lightbox="wreaths" data-title="Heart 1">           
            <img src="images/wreaths/heart_adjusted.jpeg" alt="">
        </a>
        <a href="images/wreaths/heart_gnomes_adjusted.jpeg" data-lightbox="wreaths" data-title="Heart 2">           
            <img src="images/wreaths/heart_gnomes_adjusted.jpeg" alt="">
        </a>
        <a href="images/wreaths/mardi_gras_adjusted.jpg" data-lightbox="wreaths" data-title="Mardi Gras 1">           
            <img src="images/wreaths/mardi_gras_adjusted.jpg" alt="">
        </a>
        <a href="images/wreaths/bees_adjusted.jpeg" data-lightbox="wreaths" data-title="Bees 1">           
            <img src="images/wreaths/bees_adjusted.jpeg" alt="">
        </a>   
        <a href="images/wreaths/peddles_1_adjusted.jpeg" data-lightbox="wreaths" data-title="Kids 1">           
            <img src="images/wreaths/peddles_1_adjusted.jpeg" alt="">
        </a>   
        <a href="images/wreaths/mickey_1_adjusted.jpeg" data-lightbox="wreaths" data-title="Kids 2">           
            <img src="images/wreaths/mickey_1_adjusted.jpeg" alt="">
        </a>   
        <a href="images/wreaths/unicorn.jpeg" data-lightbox="wreaths" data-title="Kids 3">           
            <img src="images/wreaths/unicorn.jpeg" alt="">
        </a>   
        <a href="images/wreaths/grinch_1_adjusted.jpeg" data-lightbox="wreaths" data-title="Christmas 1">           
            <img src="images/wreaths/grinch_1_adjusted.jpeg" alt="">
        </a>
        <a href="images/wreaths/St_Patricks_1_adjusted.jpeg" data-lightbox="wreaths" data-title="St Patricks 1">           
            <img src="images/wreaths/St_Patricks_1_adjusted.jpeg" alt="">
        </a>
        <a href="images/wreaths/snow_globe_1_adjusted.jpeg" data-lightbox="wreaths" data-title="Other 1">           
            <img src="images/wreaths/snow_globe_1_adjusted.jpeg" alt="">
        </a>
        <a href="images/wreaths/recipe_board_adjusted.jpeg" data-lightbox="wreaths" data-title="Other 2">           
            <img src="images/wreaths/recipe_board_adjusted.jpeg" alt="">
        </a>
        <!--
        <img src="images/wreaths/dog_paw_1_adjusted.jpeg" alt="">
        <img src="images/wreaths/dog_paw_2.jpeg" alt="">
        <img src="images/wreaths/heart_adjusted.jpeg" alt="">
        <img src="images/wreaths/heart_gnomes_adjusted.jpeg" alt="">
        <img src="images/wreaths/mardi_gras_adjusted.jpg" alt="">  
        <img src="images/wreaths/bees_adjusted.jpeg" alt="">
        <img src="images/wreaths/peddles_1_adjusted.jpeg" alt="">
        <img src="images/wreaths/St_Patricks_1_adjusted.jpeg" alt="">
        <img src="images/wreaths/unicorn.jpeg" alt="">
        <img src="images/wreaths/grinch_1_adjusted.jpeg" alt="">
        <img src="images/wreaths/mickey_1_adjusted.jpeg" alt="">
        <img src="images/wreaths/snow_globe_1_adjusted.jpeg" alt="">
        <img src="images/wreaths/recipe_board_adjusted.jpeg" alt="">  
        -->    
        <!---
        <img src="images2/1.jpg">
        <img src="images2/2.jpg">
        <img src="images2/3.jpg">
        <img src="images2/4.jpg">
        <img src="images2/5.jpg">
        <img src="images2/6.jpg">
        <img src="images2/7.jpg">
        <img src="images2/8.jpg">
        -->
    </div>
</div>


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
    <script src="lightbox-plus-jquery.js"></script>
</body>
</html>