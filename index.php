  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour and travel agency</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- custom the css file -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- custom the js file link -->
    <script src="js/script.js" defer></script>

</head>
<body>
   <!-- header section starts  -->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <i class="fas fa-paper-plane"></i>travel </a>

    <nav class="navbar">
        <a data-aos="zoom-in-left" data-aos-delay="300" href="#home">home</a>
        <a data-aos="zoom-in-left" data-aos-delay="450" href="#about">about</a>
        <a data-aos="zoom-in-left" data-aos-delay="600" href="#destination">destination</a>
        <a data-aos="zoom-in-left" data-aos-delay="750" href="#services">services</a>
        <a data-aos="zoom-in-left" data-aos-delay="900" href="#gallery">gallery</a>
        <a data-aos="zoom-in-left" data-aos-delay="1150" href="#blogs">blogs</a>
    </nav>

    <a data-aos="zoom-in-left" data-aos-delay="1300"  class="btn" onclick="btn11()">Go on tour</a>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <span data-aos="face-up" data-aos-delay="150">follow us</span>
        <h3  data-aos="face-up" data-aos-delay="300">to the unknown</h3>
        <p  data-aos="face-up" data-aos-delay="450">Travel slogans are the perfect way to communicate your blog or business’ mission, values, and promise to your target audience</p>
        <a class="btn1" onclick="btn11()">tours</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="video-container" data-aos="face-right" data-aos-delay="300">
        <video src="images/about-vid-1.mp4" muted autoplay loop class="video"></video>
        <div class="controls">
            <span class="control-btn" data-src="images/about-vid-1.mp4"></span>
            <span class="control-btn" data-src="images/about-vid-2.mp4"></span>
            <span class="control-btn" data-src="images/about-vid-3.mp4"></span>
        </div>
    </div>

    <div class="content" data-aos="face-left" data-aos-delay="600">
        <span>why choose us?</span>
        <h3>Nature's Majesty Awaits You</h3>
        <p>We are a small group of nature lovers who live and breathe travel. We always talk about our undying love for it, the tips and tricks that we have gathered along the way makes us affordable tour & travel agency in Kolkata. We deal in domestic & international tour packages.</p>
        <!-- <a href="#" class="btn">book now</a> -->
    </div>

</section>

<!-- about section ends -->

<!-- destination section starts  -->

<section class="destination" id="destination">

    <div class="heading">
        <span>our destination</span>
        <h1>make yours destination</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <div class="image">
                <img src="images/des-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Alaska</h3>
                <p>Ever dreamed of cruising to Alaska? With Norwegian Bliss on the horizon and various Cruise Tours to make the most of your time away.</p>
                <br>
                <h2>100₹ PER/PERSON</h2>
                <!-- <a href="#">read more <i class="fas fa-angle-right"></i></a> -->
                <a  href="#book-form" class="btn"onclick="btn1()">book now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <div class="image">
                <img src="images/des-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Brazil</h3>
                <p>Brazil (Portuguese: Brasil; Brazilian Portuguese: [bɾaˈziw]),[nt 1] officially the Federative Republic of Brazil (Portuguese: República Federativa do Brasil).</p>
                <br>
                <h2>200₹ PER/PERSON</h2>
                <!-- <a href="#">read more <i class="fas fa-angle-right"></i></a> -->
                <a  href="#book-form" class="btn"onclick="btn2()">book now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <div class="image">
                <img src="images/des-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>New york</h3>
                <p>New York City comprises 5 boroughs sitting where the Hudson River meets the Atlantic Ocean. At its core is Manhattan, a densely populated borough that’s among .</p>
                <br>
                <h2>300₹ PER/PERSON</h2>
                <!-- <a href="#">read more <i class="fas fa-angle-right"></i></a> -->
                <a  href="#book-form" class="btn"onclick="btn3()">book now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="600">
            <div class="image">
                <img src="images/des-4.jpg" alt="">
            </div>
            <div class="content">
                <h3>Iceland</h3>
                <p>Iceland, a Nordic island nation, is defined by its dramatic landscape with volcanoes, geysers, hot springs and lava fields.</p>
                <br>
                <h2>400₹ PER/PERSON</h2>
                <!-- <a href="#">read more <i class="fas fa-angle-right"></i></a> -->
                <a  href="#book-form" class="btn"onclick="btn4()">book now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="750">
            <div class="image">
                <img src="images/des-5.jpg" alt="">
            </div>
            <div class="content">
                <h3>Greenland</h3>
                <p>Greenland, an autonomous nation within the Kingdom of Denmark, can truly be said to be a world apart.</p>
                <br>
                <h2>500₹ PER/PERSON</h2>
                <!-- <a href="#">read more <i class="fas fa-angle-right"></i></a> -->
                <a  href="#book-form" class="btn"onclick="btn5()">book now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="900">
            <div class="image">
                <img src="images/des-6.jpg" alt="">
            </div>
            <div class="content">
                <h3>Maldive</h3>
                <p>Maldives, officially the Republic of Maldives, is an archipelagic state located in South Asia, situated in the Indian Ocean.</p>
                <br>
                <h2>600₹ PER/PERSON</h2>
                <!-- <a href="#">read more <i class="fas fa-angle-right"></i></a> -->
                <a  href="#book-form" class="btn"onclick="btn6()">book now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="1150">
            <div class="image">
                <img src="images/des-7.jpg" alt="">
            </div>
            <div class="content">
                <h3>Thailand</h3>
                <p>Thailand is a Southeast Asian country. It's known for tropical beaches, opulent royal palaces, ancient ruins and ornate temples displaying figures of Buddha.</p>
                <br>
                <h2>700₹ PER/PERSON</h2>
                <!-- <a href="#">read more <i class="fas fa-angle-right"></i></a> -->
                <a  href="#book-form" class="btn"onclick="btn7()">book now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="1300">
            <div class="image">
                <img src="images/des-8.jpg" alt="">
            </div>
            <div class="content">
                <h3>Europe</h3>
                <p>Europe is the perfect place for travellers of any kind. If you are looking for a backpacker trip or a luxurious relaxed trip.</p>
                <br>
                <h2>800₹ PER/PERSON</h2>
                <!-- <a href="#">read more <i class="fas fa-angle-right"></i></a> -->
                <a  href="#book-form" class="btn"onclick="btn8()">book now</a>
            </div>
        </div>
    </div>
</section>

<!-- destination section ends -->


<!-- services section start -->

<section class="services" id="services">
    <div class="heading">
        <span>our services</span>
        <h1>countless experiences</h1>
    </div>

    <div class="box-container">

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
        <i class="fas fa-globe"></i>
        <h3>world wide</h3>
        <p>this a destination that offers novel, authentic experiences.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
        <i class="fas fa-hiking"></i>
        <h3>adeventure</h3>
        <p>Behold! And we will take you on an adventure trip packed with exploration.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
        <i class="fas fa-utensils"></i>
        <h3>food and drinks</h3>
        <p>Food and Beverage Services is a comprehensive textbook that covers all the aspects of food.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
        <i class="fas fa-hotel"></i>
        <h3>affortable hotels</h3>
        <p>Book at City Centre Budget Hotel, Melbourne. No Reservation Costs. Great Rates.</p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
        <i class="fas fa-wallet"></i>
        <h3>affortable price</h3>
        <p>We have created a business model that allows us to offer a wide range.<p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
        <i class="fas fa-headset"></i>
        <h3>24/7 support</h3>
        <p>We give 24/7 service for aur cilent and take happy for all time.</p>
        </div>

    </div>
</section>

<!-- services section end -->

<!-- gallery section start -->

<section class="gallery" id="gallery">
    <div class="heading">
        <span>our gallery</span>
        <h1>we record memories</h1>
    </div>
    <div class="box-container">
        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/gallery-img-1.jpg" alt="">
            <span>travel spot</span>
            <h3>iceland</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/gallery-img-2.jpg" alt="">
            <span>travel spot</span>
            <h3>greenland</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/gallery-img-3.jpg" alt="">
            <span>travel spot</span>
            <h3>alaska</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/gallery-img-4.jpg" alt="">
            <span>travel spot</span>
            <h3>thailand</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/gallery-img-5.jpg" alt="">
            <span>travel spot</span>
            <h3>brazil</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/gallery-img-6.jpg" alt="">
            <span>travel spot</span>
            <h3>maldive</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="images/gallery-img-7.jpg" alt="">
            <span>travel spot</span>
            <h3>iceland</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="images/gallery-img-8.jpg" alt="">
            <span>travel spot</span>
            <h3>alaska</h3>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="images/gallery-img-9.jpg" alt="">
            <span>travel spot</span>
            <h3>maldive</h3>
        </div>
    </div>

</section>

<!-- gallery section end -->

<!-- review section start -->
  
    <section class="review">
        <div class="content" data-aos="face-right" data-aos-delay="150">
            <span>testimonial</span>
            <h3>good new from our cilents</h3>
            <p>please let me express after our return to Europe our warmest thanks for the wonderful organization of your part of our recent India trip. You provided us a new, always clean car with a very friendly, punctual, experienced and secure driver, Mr. Ganesh. The local guides, all knowledgeable and speaking very good English introduced us to your country in a very agreeable way.</p>
        </div>
        <div class="box-container" data-aos="fade-left" data-aos-delay="150">
            <div class="box">
                <p>Once again, many thanks for making such a trip possible.</p>
                <div class="user">
                    <img src="images/pic-1.png" alt="">
                    <div class="info">
                        <!-- <h3>john deo</h3> -->
                        <a href="https://www.instagram.com/natural_photography123_/">john deo</a>
                        <span>manager</span>
                    </div>
                </div>
            </div>

            <div class="box">
                <p>It is a great pleasure to let you know that above tour you organized.</p>
                <div class="user">
                    <img src="images/pic-2.png" alt="">
                    <div class="info">
                        <!-- <h3>john deo</h3> -->
                        <a href="https://www.instagram.com/natural_photography123_/">mayra kio</a>
                        <span>doctor</span>
                    </div>
                </div>
            </div>

            <div class="box">
                <p>I must say I was delighted with the service you provided - it was just what I wanted</p>
                <div class="user">
                    <img src="images/pic-3.png" alt="">
                    <div class="info">
                        <!-- <h3>john deo</h3> -->
                        <a href="https://www.instagram.com/natural_photography123_/">palroma div</a>
                        <span>designer</span>
                    </div>
                </div>
            </div>

            <div class="box">
                <p>Many many thanks for organising what was one of our outstanding holidays.</p>
                <div class="user">
                    <img src="images/pic-4.png" alt="">
                    <div class="info">
                        <!-- <h3>john deo</h3> -->
                        <a href="https://www.instagram.com/natural_photography123_/">rio kasido</a>
                        <span>tecnologist</span>
                    </div>
                </div>
            </div>
        </div>
    </section>



<!-- review section end -->

<!-- blog section start -->

    <section class="blogs" id="blogs">
        <div class="heading">
            <span>blogs & posts</span>
            <h1>we untold stories</h1>
        </div>
        <div class="box-container">
            <div class="box" data-aos="face-up" data-aos-delay="150">
                <div class="image">
                    <img src="images/blog-1.jpg" alt="">
                </div>
                <div class="content">
                <a href="#" class="link">life is a journey , not a destination</a>
                <p>This is just to say thank you for again organising a good tour for me in India.</p>
                <div class="icon">
                    <a href="https://www.thediscoveriesof.com/best-places-to-go-in-october/"><i class="fas fa-clock"></i>25th dec,2022</a>
                    <a href="https://www.instagram.com/nature___.beauty_/"><i class="fas fa-user"></i>milona dio</a>
                </div>
                </div>
            </div>
       
            <div class="box" data-aos="face-up" data-aos-delay="300">
                <div class="image">
                    <img src="images/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="link">journey is the best thing.</a>
                    <p>I would like to thank you and you team for organising a fabulous tour for us.</p>
                    <div class="icon">
                        <a href="https://www.instagram.com/nature___.beauty_/"><i class="fas fa-clock"></i>14th feb,2022</a>
                        <a href="https://www.instagram.com/nature___.beauty_/"><i class="fas fa-user"></i>kamrole nik</a>
                </div>
            </div>
        </div>
              
            
                <div class="box" data-aos="face-up" data-aos-delay="450">
                    <div class="image">
                        <img src="images/blog-3.jpg" alt="">
                    </div>
                    <div class="content">
                        <a href="#" class="link">i like journey</a>
                        <p>We are finally back home from our trip and I would like to thank you for organizing our trip </p>
                        <div class="icon">
                            <a href="https://www.instagram.com/nature___.beauty_/"><i class="fas fa-clock"></i>26th march,2022</a>
                            <a href="https://www.instagram.com/nature___.beauty_/"><i class="fas fa-user"></i>koven lio</a>
                        </div>
                  </div>
               </div>
        
            </section>
            <!-- blog section end -->

             <!-- footer section start -->

             <section class="footer">

                <div class="box-container">
   
                   <div class="box"  >
                       <a href="#" class="logo"> <i class="fas fa-paper-plane"></i>travel </a>
                       <p>We Process Same-day Online™ for Business & Trip. Support Available.</p>
                       <div class="share">
                           <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                           <a href="https://twitter.com/i/flow/login" class="fab fa-twitter"></a>
                           <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                           <a href="https://www.linkedin.com/login" class="fab fa-linkedin"></a>
                       </div>
                   </div>
           
                  <div class="box">
                   <h3>quick links</h3>
                  <a href="#home" class="links"><i class="fas fa-arrow-right"></i>home</a>
                  <a href="#about" class="links"><i class="fas fa-arrow-right"></i>about</a>
                  <a href="#destination" class="links"><i class="fas fa-arrow-right"></i>destination</a>
                  <a href="#services" class="links"><i class="fas fa-arrow-right"></i>services</a>
                  <a href="#gallery" class="links"><i class="fas fa-arrow-right"></i>gallery</a>
                  <a href="#blogs" class="links"><i class="fas fa-arrow-right"></i>blogs</a>
               </div>
   
               <div class="box" >
                   <h3>contact info</h3> 
                   <p><a href="https://www.google.com/maps/search/travel+agency/@22.7455117,75.8177715,13z"><i class="fas fa-location"></i>mumbai,india </a></p>
                   <p><i class="fas fa-phone"></i>+91 748-911-8419</p>
                   <p><i class="fas fa-envelope"></i>devrajkashyap1000@gmail.com</p>
                   <p><i class="fas fa-clock"></i>7:00am - 10:00pm</p>
               </div>
   
               <div class="box" >
                   <h3>make tour for:</h3>
                   <p>
                       <li>alaska</li>
                       <li>brazil</li>
                       <li>New york</li>
                       <li>iceland</li>
                       <li>greenland</li>
                       <li>maldive</li>
                       <li>thailand</li>
                       <li>europe</li>
                      
               </p>
               </div>
       </div>
   </section>
   
   <!-- footer section end -->

         <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script> 

   <script>
    function btn1(){
        window.location.href="http://localhost/dev/tour%20and%20travel%20agency/bookingform.php"
    }
    function btn2(){
        window.location.href="http://localhost/dev/tour%20and%20travel%20agency/bookingform1.php"
    }
    function btn3(){
        window.location.href="http://localhost/dev/tour%20and%20travel%20agency/bookingform2.php"
    }
    function btn4(){
        window.location.href="http://localhost/dev/tour%20and%20travel%20agency/bookingform3.php"
    }
    function btn5(){
        window.location.href="http://localhost/dev/tour%20and%20travel%20agency/bookingform4.php"
    }
    function btn6(){
        window.location.href="http://localhost/dev/tour%20and%20travel%20agency/bookingform4.php"
    }
    function btn7(){
        window.location.href="http://localhost/dev/tour%20and%20travel%20agency/bookingform5.php"
    }
    function btn8(){
        window.location.href="http://localhost/dev/tour%20and%20travel%20agency/bookingform6.php"
    }
    function btn9(){
        window.location.href="http://localhost/dev/tour%20and%20travel%20agency/bookingform7.php"
    }
    function btn11(){
        window.location.href="#destination"
    }

    AOS.init(
       {
           duration: 800,
           offset:150,
       }
    );
 </script>
          
</body>

</html>