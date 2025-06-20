<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Your Trip Homepage</title>

        <!-- font awesome cdn link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- swiper css link -->
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

        <!-- custom css file link -->
        <link rel="stylesheet" href="style.css">

        <!-- animate.css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        
        <!-- chatbot css -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chatbot@1.2.3/dist/chatbot.min.css">
    </head>
    <body>

        <!-- header section start -->
        <header class="header">
           <img src="images/your_trip.png" alt="" width="50px" height="50px">
            <a href="" class="logo"> Your trip </a>

            <nav class="navbar">
                <div id="nav-close" class="fas fa-times"></div>
                <a href="#home">Home</a>
                <a href="#category">Category</a>
                <a href="#packages">Packages</a>
                <a href="#services">Services</a>     
                <a href="#review">Review</a>
                <a href="#blogs">Blogs</a>
                <a href="#about">About</a>
            </nav>

            <div class="icons">
                <div id="menu-btn" class="fas fa-bars"></div>
                <a href="user.php" class="fas fa-user"></a>
                <div id="search-btn" class="fas fa-search"></div>
                <div class="language-selector">
                    <select id="language-select">
                        <option value="en">English</option>
                        <option value="es">Español</option>
                        <option value="fr">Français</option>
                        <option value="de">Deutsch</option>
                        <option value="hi">हिन्दी</option>
                        <option value="ta">தமிழ்</option>
                    </select>
                </div>
            </div>
        </header>
         <!-- header section ends -->

         <!-- search form -->
         <div class="search-form">
            <form action="">
            <input type="text" id="searchBar" placeholder="Search here...">
            <button type="submit" id="search-btn" style="color: green !important; height:50px; width:50px; border-radius: 5px;"><i class="fas fa-search"></i></button>
            <button type="submit" id="close-search"  style="color: green !important; height:40px; width:40px; border-radius: 5px" ><i class="fa fa-times-circle" aria-hidden="true"></i></button>
            </form>
         </div>
         <!-- search form ends -->

         <!-- home section starts-->
         <section class="home" id="home">
                <div class="swiper home-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="box" style="background: url(images/image\ 6.jpg) no-repeat;">
                                <div class="content">
                                    <span>Never Stop</span>
                                    <h3>Exploring the world</h3>
                                    <p>Welcome TO Our Page</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="box second" style="background: url(images/image\ 2.jpg) no-repeat;">
                                <div class="content">
                                    <span>Ride In Your Own Way</span>
                                    <h3>Around the world</h3>
                                    <p>Enjoy The Ride</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="box" style="background: url(images/image\ 3.jpg) no-repeat;">
                                <div class="content">
                                    <span>Make Every Moment </span>
                                    <h3>Beatuiful</h3>
                                    <p>With Your Special One</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
         </section>
         <!--home section ends-->

         <!--category section starts-->
         <section class="category" id="category">
                <h1 class="heading animate__animated animate__fadeInDown">Travel Categories</h1>
                
                <div class="box-container">
                    <div class="box animate__animated animate__zoomIn animate__delay-1s">
                        <div class="image">
                            <i class="fas fa-mountain category-icon"></i>
                        </div>
                        <div class="content">
                            <h3>Adventure</h3>
                            <p>Thrilling experiences for adrenaline seekers</p>
                            <a href="#" class="btn">Explore</a>
                        </div>
                    </div>
                    
                    <div class="box animate__animated animate__zoomIn animate__delay-1s">
                        <div class="image">
                            <i class="fas fa-umbrella-beach category-icon"></i>
                        </div>
                        <div class="content">
                            <h3>Beach</h3>
                            <p>Relaxing getaways by the sea</p>
                            <a href="#" class="btn">Explore</a>
                        </div>
                    </div>
                    
                    <div class="box animate__animated animate__zoomIn animate__delay-1s">
                        <div class="image">
                            <i class="fas fa-city category-icon"></i>
                        </div>
                        <div class="content">
                            <h3>City Tours</h3>
                            <p>Explore vibrant urban destinations</p>
                            <a href="#" class="btn">Explore</a>
                        </div>
                    </div>
                    
                    <div class="box animate__animated animate__zoomIn animate__delay-2s">
                        <div class="image">
                            <i class="fas fa-heart category-icon"></i>
                        </div>
                        <div class="content">
                            <h3>Romantic</h3>
                            <p>Perfect trips for couples</p>
                            <a href="#" class="btn">Explore</a>
                        </div>
                    </div>
                    
                    <div class="box animate__animated animate__zoomIn animate__delay-2s">
                        <div class="image">
                            <i class="fas fa-hiking category-icon"></i>
                        </div>
                        <div class="content">
                            <h3>Trekking</h3>
                            <p>Explore nature's wonders on foot</p>
                            <a href="#" class="btn">Explore</a>
                        </div>
                    </div>
                    
                    <div class="box animate__animated animate__zoomIn animate__delay-2s">
                        <div class="image">
                            <i class="fas fa-monument category-icon"></i>
                        </div>
                        <div class="content">
                            <h3>Heritage</h3>
                            <p>Discover historical landmarks</p>
                            <a href="#" class="btn">Explore</a>
                        </div>
                    </div>
                </div>
         </section>
         <!--category section ends-->

         <!--Packages section starts-->
         <section class="packages" id="packages">
                <h1 class="heading">Our Packages</h1>

                <div class="swiper packages-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="box-container">
                                <div class="box">
                                    <div class="image">
                                        <img src="images/image 9.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>🌿 Custom Package</h3>
                                        <p class="packages-sub-heading">Design Your Own Journey</p>                 
                                        <p>Choose your destinations, travel dates, and experiences across Tamil Nadu—</p>
                                        <p>crafted entirely around your preferences.</p>
                                        <p>Ideal for solo travelers, families, or unique group needs.</p>                
                                        <a href="custom_package.php" class="btn">Book Now</a>
                                        <div class="price-tag">From ₹15,999</div>
                                    </div>
                                </div>

                                <div class="box">
                                    <div class="image">
                                        <img src="images/image 9.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>🌄 Basic Package</h3>
                                        <p class="packages-sub-heading">Essential Tamil Nadu Getaway</p>                 
                                        <p>A budget-friendly escape covering key highlights like</p>
                                        <p> Chennai, Mahabalipuram, and Pondicherry with</p>
                                        <p>comfortable stays and guided local tours.</p>                
                                        <a href="basic_package.php" class="btn">Book Now</a>
                                        <div class="price-tag">From ₹8,999</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="swiper-slide">
                            <div class="box-container">
                                <div class="box">
                                    <div class="image">
                                        <img src="images/image 9.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>🏞️ Standard Package</h3>
                                        <p class="packages-sub-heading">Culture & Nature Combined</p>                 
                                        <p>Explore temple towns like Madurai, heritage sites in Thanjavur,</p>
                                        <p>and scenic hill stations like Kodaikanal—</p>
                                        <p>perfect for a balanced Tamil Nadu experience.</p>                
                                        <a href="standard_package.php" class="btn">Book Now</a>
                                        <div class="price-tag">From ₹12,499</div>
                                    </div>
                                </div>

                                <div class="box">
                                    <div class="image">
                                        <img src="images/image 9.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>🏖️ Premium Package</h3>
                                        <p class="packages-sub-heading">Luxury Tamil Nadu Experience</p>                 
                                        <p>Travel in style with handpicked resorts, chauffeur-driven vehicles</p>
                                        <p> exclusive access to hidden gems, and</p>
                                        <p>curated cultural experiences across Tamil Nadu.</p>                
                                        <a href="premium_packages.php" class="btn">Book Now</a>
                                        <div class="price-tag">From ₹24,999</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
         </section>
         <!--Packages section ends-->

         <!--Services section starts-->
         <section class="services" id="services">
                <h1 class="heading"> What We Offering </h1>
                
                <div class="swiper services-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="box-container">
                                <div class="box">
                                    <img src="images/image 15.jpg" alt="">
                                    <h3>Complete Guide</h3>
                                    <p>Expert guides to help you explore destinations with confidence and local insights.</p>
                                    <a href="#" class="btn">Learn More</a>
                                </div>

                                <div class="box">
                                    <img src="images/image 16.jpg" alt="">
                                    <h3>Custom Package</h3>
                                    <p>Tailored itineraries designed specifically for your travel preferences.</p>
                                    <a href="#" class="btn">Design Yours</a>
                                </div>

                                <div class="box">
                                    <img src="images/image 17.jpg" alt="">
                                    <h3>Solo Trip</h3>
                                    <p>Specially curated experiences for solo travelers with safety and fun in mind.</p>
                                    <a href="#" class="btn">Explore</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="swiper-slide">
                            <div class="box-container">
                                <div class="box">
                                    <img src="images/image 18.jpg" alt="">
                                    <h3>Couple Trip</h3>
                                    <p>Romantic getaways designed to create unforgettable memories.</p>
                                    <a href="#" class="btn">Plan Getaway</a>
                                </div>

                                <div class="box">
                                    <img src="images/image 19.jpg" alt="">
                                    <h3>College IV</h3>
                                    <p>Exciting group tours perfect for college students and young travelers.</p>
                                    <a href="#" class="btn">Organize Trip</a>
                                </div>

                                <div class="box">
                                    <img src="images/image 20.jpg" alt="">
                                    <h3>Family Trip</h3>
                                    <p>Fun-filled vacations suitable for all family members and ages.</p>
                                    <a href="#" class="btn">Find Options</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
         </section>
         <!--Services section ends-->

         <!--Blogs section starts-->
         <section class="blogs" id="blogs">
                <h1 class="heading"> Our Blogs </h1>
                <div class="swiper blogs-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide">
                            <img src="images/image 27.jpg" alt="">
                            <div class="icons">
                                <a href="#" class="fas fa-calendar"> 21st March, 2025 </a>
                                <a href="#" class="fas fa-user"> By Admin </a>
                            </div>
                            <h3>Title 1</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                            <a href="Blog 1.php" class="btn">Read More</a>
                        </div>

                        <div class="swiper-slide slide">
                            <img src="images/image 28.jpg" alt="">
                            <div class="icons">
                                <a href="#" class="fas fa-calendar"> 21st March, 2025 </a>
                                <a href="#" class="fas fa-user"> By Admin </a>
                            </div>
                            <h3>Title 2</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                            <a href="Blog 2.php" class="btn">Read More</a>
                        </div>

                        <div class="swiper-slide slide">
                            <img src="images/image 29.jpg" alt="">
                            <div class="icons">
                                <a href="#" class="fas fa-calendar"> 21st March, 2025 </a>
                                <a href="#" class="fas fa-user"> By Admin </a>
                            </div>
                            <h3>Title 3</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                            <a href="Blog 3.php" class="btn">Read More</a>
                        </div>
                        
                        <div class="swiper-slide slide">
                            <img src="images/image 30.jpg" alt="">
                            <div class="icons">
                                <a href="#" class="fas fa-calendar"> 21st March, 2025 </a>
                                <a href="#" class="fas fa-user"> By Admin </a>
                            </div>
                            <h3>Title 4</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                            <a href="Blog 4.php" class="btn">Read More</a>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
         </section>
         <!--Blogs section ends-->

         <!--Review section starts-->
         <section class="review" id="review">
                <h1 class="heading"> Client's Review </h1>
                <div class="swiper review-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                            <div class="user">
                                <img src="images/image 21.jpg" alt="">
                                <div class="info">
                                    <h3>Andrew Garfield</h3>
                                    <span>Traveler</span>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide slide">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                            <div class="user">
                                <img src="images/image 22.jpg" alt="">
                                <div class="info">
                                    <h3>Megan Fox</h3>
                                    <span>Traveler</span>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide slide">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                            <div class="user">
                                <img src="images/image 23.jpg" alt="">
                                <div class="info">
                                    <h3>Robert Downey Jr.</h3>
                                    <span>Traveler</span>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>    

                        <div class="swiper-slide slide">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                            <div class="user">
                                <img src="images/image 24.jpg" alt="">
                                <div class="info">
                                    <h3>Ana de Armas</h3>
                                    <span>Traveler</span>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide slide">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                            <div class="user">
                                <img src="images/image 25.jpg" alt="">
                                <div class="info">
                                    <h3>Chris Evans</h3>
                                    <span>Traveler</span>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide slide">
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                            <div class="user">
                                <img src="images/image 26.jpg" alt="">
                                <div class="info">
                                    <h3>Sadie Sink</h3>
                                    <span>Traveler</span>
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
         </section>
         <!--Review section ends-->

         <!--clients section starts-->
         <section class="clients">
                <h1 class="heading"> Our Clients </h1>
                <div class="swiper clients-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide"><img src="images/image 31.jpg" alt=""></div>
                        <div class="swiper-slide slide"><img src="images/image 32.jpg" alt=""></div>
                        <div class="swiper-slide slide"><img src="images/image 33.jpg" alt=""></div>
                        <div class="swiper-slide slide"><img src="images/image 34.jpg" alt=""></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
         </section>
         <!--clients section ends-->

         <!--about section starts-->
         <section class="about" id="about">
                <div class="image">
                    <img src="images/image 8.jpg" alt="">
                </div>
                <div class="content">
                    <h3>About Us</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                    <a href="#" class="btn">Read More</a>
                </div>
         </section>
         <!-- about section ends -->

         <!--footer section starts-->
         <section class="footer">
                <div class="box-container">
                    <div class="box">
                        <h3>Quick Links</h3>
                       <a href="#home">Home</a>
                       <a href="#category">Category</a>
                       <a href="#packages">Packages</a>
                       <a href="#services">Services</a>
                       <a href="#review">Review</a>
                       <a href="#blogs">Blogs</a>
                       <a href="#about">About</a>
                    </div>

                    <div class="box">
                        <h3>Extra Links</h3>
                        <a href="#">My Account</a>
                        <a href="#">My Favorite</a>
                        <a href="#">My Reviews</a>
                        <a href="#">My Blogs</a>
                        <a href="#">My Packages</a>
                        <a href="#">Terms Of User</a>
                        <a href="#">Privacy Policy</a>
                    </div>

                    <div class="box">
                        <h3>Contact Us</h3>
                        <a href="#"> <i class="fas fa-phone"></i> +123-456-7890</a>
                        <a href="#"> <i class="fas fa-phone"></i> +111-222-3333</a>
                        <a href="#"> <i class="fas fa-envelope"></i> tour@gmail.com </a>
                        <a href="#"> <i class="fas fa-map"></i> New York, USA - 123456 </a>
                    </div>

                    <div class="box">
                        <h3>Follow Us</h3>
                        <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
                        <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
                        <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
                        <a href="#"> <i class="fab fa-linkedin"></i> LinkedIn </a>
                        <a href="#"> <i class="fab fa-github"></i> Github </a>
                    </div>
                </div>

                <div class="credit">Created By<span>Your Trip</span>!All Rights Reserved!</div>
                <div class="credit"> &copy; copyright @ 2025 by <span>Your Trip</span> </div>
                <div class="credit">Design By <span>Your Trip</span></div>
         </section>
         <!--footer section ends-->

         <!-- scroll to top button -->
         <a href="#home" class="scroll-top">
            <i class="fas fa-arrow-up"></i>
         </a>
         

         <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
         <!-- custom js file link -->
         <script src="script.js"></script>
         <!-- chatbot js -->
         <script src="https://cdn.jsdelivr.net/npm/chatbot@1.2.3/dist/chatbot.min.js"></script>
         <!-- translation library -->
         <script src="https://cdn.jsdelivr.net/npm/i18next@21.6.10/i18next.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/i18next-http-backend@1.3.2/i18nextHttpBackend.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/jquery-i18next@1.2.1/jquery-i18next.min.js"></script>

         <style>
            /* Fixed CSS link syntax */
            /* Improved category section styling */
            .category {
                padding: 5rem 9%;
                background: #f9f9f9;
            }
            
            .category .box-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
                gap: 2rem;
            }
            
            .category .box {
                background: #fff;
                border-radius: 1rem;
                overflow: hidden;
                box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
                transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                height: 100%;
                display: flex;
                flex-direction: column;
                transform: translateY(20px);
                opacity: 0;
            }
            
            .category .box.animate__zoomIn {
                transform: translateY(0);
                opacity: 1;
            }
            
            .category .box:hover {
                transform: translateY(-10px) scale(1.02);
                box-shadow: 0 1.5rem 3rem rgba(0,0,0,0.15);
            }
            
            .category .box .image {
                height: 20rem;
                background: #f0f0f0;
                display: flex;
                align-items: center;
                justify-content: center;
                background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            }
            
            .category-icon {
                font-size: 6rem;
                color: #2980b9;
                transition: all 0.4s ease;
            }
            
            .category .box:hover .category-icon {
                transform: scale(1.2) rotate(10deg);
                color: #e74c3c;
            }
            
            .category .box .content {
                padding: 2.5rem;
                text-align: center;
                flex-grow: 1;
                display: flex;
                flex-direction: column;
            }
            
            .category .box .content h3 {
                font-size: 2.2rem;
                color: #333;
                margin-bottom: 1.5rem;
                transition: color 0.3s ease;
            }
            
            .category .box:hover .content h3 {
                color: #2980b9;
            }
            
            .category .box .content p {
                font-size: 1.5rem;
                color: #666;
                padding: 1rem 0;
                line-height: 1.6;
                min-height: 4.5rem;
                flex-grow: 1;
            }
            
            .category .box .content .btn {
                margin-top: auto;
                align-self: center;
                transition: all 0.3s ease;
            }
            
            .category .box:hover .content .btn {
                background: #2980b9;
                color: white;
            }
            
            /* Packages section styling */
            .packages .swiper-slide {
                padding: 2rem 0;
            }
            
            .packages .box-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
                gap: 2rem;
                padding: 0 5%;
            }
            
            .packages .box {
                background: #fff;
                border-radius: 1rem;
                overflow: hidden;
                box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                height: 100%;
                display: flex;
                flex-direction: column;
                position: relative;
            }
            
            .packages .box:hover {
                transform: translateY(-10px);
                box-shadow: 0 1rem 2rem rgba(0,0,0,0.15);
            }
            
            .packages .box .image {
                height: 20rem;
                overflow: hidden;
            }
            
            .packages .box .image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.5s ease;
            }
            
            .packages .box:hover .image img {
                transform: scale(1.1);
            }
            
            .packages .box .content {
                padding: 2rem;
                flex-grow: 1;
                display: flex;
                flex-direction: column;
            }
            
            .packages .box .content h3 {
                font-size: 2.2rem;
                color: #333;
                margin-bottom: 0.5rem;
            }
            
            .packages-sub-heading {
                font-size: 1.4rem;
                color: #2980b9;
                font-weight: bold;
                margin-bottom: 1rem;
            }
            
            .packages .box .content p {
                font-size: 1.4rem;
                color: #666;
                line-height: 1.6;
                margin-bottom: 0.5rem;
            }
            
            .packages .box .content .btn {
                margin-top: 1.5rem;
                align-self: flex-start;
            }
            
            .price-tag {
                position: absolute;
                top: 1rem;
                right: 1rem;
                background: rgba(41, 128, 185, 0.9);
                color: white;
                padding: 0.5rem 1rem;
                border-radius: 0.5rem;
                font-weight: bold;
                font-size: 1.4rem;
            }
            
            /* Services section styling (similar to packages) */
            .services .swiper-slide {
                padding: 2rem 0;
            }
            
            .services .box-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
                gap: 2rem;
                padding: 0 5%;
            }
            
            .services .box {
                background: #fff;
                border-radius: 1rem;
                overflow: hidden;
                box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
                transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                height: 100%;
                display: flex;
                flex-direction: column;
                position: relative;
            }
            
            .services .box:hover {
                transform: translateY(-10px) scale(1.02);
                box-shadow: 0 1.5rem 3rem rgba(0,0,0,0.15);
            }
            
            .services .box img {
                width: 100%;
                height: 20rem;
                object-fit: cover;
                transition: transform 0.5s ease;
            }
            
            .services .box:hover img {
                transform: scale(1.1);
            }
            
            .services .box h3 {
                font-size: 2rem;
                color: #333;
                padding: 1.5rem;
                margin: 0;
                transition: color 0.3s ease;
            }
            
            .services .box:hover h3 {
                color: #2980b9;
            }
            
            .services .box p {
                font-size: 1.4rem;
                color: #666;
                padding: 0 1.5rem 1.5rem;
                line-height: 1.6;
                flex-grow: 1;
            }
            
            .services .box .btn {
                margin: 0 1.5rem 1.5rem;
                align-self: flex-start;
                transition: all 0.3s ease;
            }
            
            .services .box:hover .btn {
                background: #2980b9;
                color: white;
            }
            
            /* Scroll to top button */
            .scroll-top {
                position: fixed;
                bottom: 3rem;
                right: 3rem;
                width: 5rem;
                height: 5rem;
                background: #2980b9;
                color: #fff;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 2rem;
                z-index: 1000;
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
                box-shadow: 0 0.5rem 1.5rem rgba(0,0,0,.1);
                cursor: pointer;
            }
            
            .scroll-top.show {
                opacity: 1;
                visibility: visible;
            }
            
            .scroll-top:hover {
                background: #3498db;
                transform: translateY(-0.5rem) scale(1.1);
            }
            
            /* Animation classes */
            .animate__animated {
                animation-duration: 1s;
                animation-fill-mode: both;
            }
            
            .animate__fadeInDown {
                animation-name: fadeInDown;
            }
            
            .animate__zoomIn {
                animation-name: zoomIn;
            }
            
            @keyframes fadeInDown {
                from {
                    opacity: 0;
                    transform: translate3d(0, -20px, 0);
                }
                to {
                    opacity: 1;
                    transform: translate3d(0, 0, 0);
                }
            }
            
            @keyframes zoomIn {
                from {
                    opacity: 0;
                    transform: scale3d(0.3, 0.3, 0.3);
                }
                50% {
                    opacity: 1;
                }
            }
            
            .animate__delay-1s {
                animation-delay: 1s;
            }
            
            .animate__delay-2s {
                animation-delay: 2s;
            }
            
            /* Language selector */
            .language-selector {
                margin-left: 2rem;
                position: relative;
            }
            
            .language-selector select {
                padding: 0.8rem 1.5rem 0.8rem 1rem;
                border-radius: 2rem;
                border: 1px solid #ddd;
                background: #f9f9f9;
                color: #333;
                font-size: 1.4rem;
                cursor: pointer;
                appearance: none;
                transition: all 0.3s ease;
                background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
                background-repeat: no-repeat;
                background-position: right 1rem center;
                background-size: 1.5rem;
                padding-right: 3rem;
            }
            
            .language-selector select:hover {
                background-color: #f0f0f0;
                border-color: #bbb;
            }
            
            .language-selector select:focus {
                outline: none;
                box-shadow: 0 0 0 2px rgba(41, 128, 185, 0.3);
                border-color: #2980b9;
            }
            
      
         </style>

         <script>
            document.addEventListener('DOMContentLoaded', () => {
                const searchBar = document.getElementById('searchBar');
                const closeSearch = document.getElementById('close-search');
                const searchBtn = document.getElementById('search-btn');
                const searchForm = document.querySelector('.search-form');

                const sections = {
                    'home': document.getElementById('home'),
                    'category': document.getElementById('category'),
                    'packages': document.getElementById('packages'),
                    'services': document.getElementById('services'),
                    'review': document.getElementById('review'),
                    'blogs': document.getElementById('blogs'),
                    'about': document.getElementById('about')
                };

                const keywords = {
                    'home': ['home', 'welcome', 'explore', 'tourism', 'travel'],
                    'category': ['category', 'adventure', 'explore', 'ride', 'ideas'],
                    'packages': ['packages', 'tours', 'trips', 'book', 'booking', 'custom', 'basic', 'standard', 'premium'],
                    'services': ['services', 'guide', 'solo', 'couple', 'family', 'college', 'trip', 'offering'],
                    'review': ['review', 'reviews', 'client', 'clients', 'testimonial', 'feedback'],
                    'blogs': ['blog', 'blogs', 'article', 'articles', 'post', 'posts'],
                    'about': ['about', 'us', 'contact', 'team', 'company']
                };

                function showSection(sectionName) {
                    for (const key in sections) {
                        if (sections[key]) {
                            sections[key].style.display = (key === sectionName) ? 'block' : 'none';
                        }
                    }
                    if (sections[sectionName]) {
                        sections[sectionName].scrollIntoView({ behavior: 'smooth' });
                    }
                }

                if (searchBtn && searchForm && searchBar) {
                    searchBtn.addEventListener('click', (e) => {
                        e.preventDefault();
                        searchForm.classList.add('active');
                        searchBar.focus();
                    });
                }

                if (closeSearch && searchForm) {
                    closeSearch.addEventListener('click', () => {
                        searchForm.classList.remove('active');
                    });
                }

                if (searchBar) {
                    searchBar.addEventListener('input', () => {
                        const query = searchBar.value.trim().toLowerCase();

                        if (query === '') {
                            for (const key in sections) {
                                if (sections[key]) sections[key].style.display = 'block';
                            }
                            return;
                        }

                        let matched = false;
                        for (const section in keywords) {
                            if (keywords[section].some(keyword => query.includes(keyword))) {
                                showSection(section);
                                matched = true;
                                break;
                            }
                        }

                        if (!matched) {
                            for (const key in sections) {
                                if (sections[key]) sections[key].style.display = 'block';
                            }
                        }
                    });
                }

                const formElement = document.querySelector('.search-form form');
                if (formElement) {
                    formElement.addEventListener('submit', (e) => {
                        e.preventDefault();
                        searchForm.classList.remove('active');
                    });
                }

                // Initialize all sliders with autoplay and navigation
                const initSlider = (selector, delay = 3000) => {
                    return new Swiper(selector, {
                        loop: true,
                        grabCursor: true,
                        autoplay: {
                            delay: delay,
                            disableOnInteraction: false,
                        },
                        navigation: {
                            nextEl: `${selector} .swiper-button-next`,
                            prevEl: `${selector} .swiper-button-prev`,
                        },
                        pagination: {
                            el: `${selector} .swiper-pagination`,
                            clickable: true,
                        },
                        effect: 'slide',
                        speed: 1000,
                    });
                };

                // Initialize all sliders
                const homeSlider = initSlider('.home-slider', 5000);
                const packagesSlider = initSlider('.packages-slider');
                const servicesSlider = initSlider('.services-slider');
                const blogsSlider = initSlider('.blogs-slider');
                const reviewSlider = initSlider('.review-slider');
                const clientsSlider = initSlider('.clients-slider', 2500);

                // Scroll to top button
                const scrollTopBtn = document.querySelector('.scroll-top');
                window.addEventListener('scroll', () => {
                    if (window.pageYOffset > 300) {
                        scrollTopBtn.classList.add('show');
                    } else {
                        scrollTopBtn.classList.remove('show');
                    }
                });

                // Smooth scroll for all links
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        e.preventDefault();
                        document.querySelector(this.getAttribute('href')).scrollIntoView({
                            behavior: 'smooth'
                        });
                    });
                });
                
                // Initialize animations when elements come into view
                const animateOnScroll = () => {
                    const elements = document.querySelectorAll('.animate__animated');
                    elements.forEach(element => {
                        const elementPosition = element.getBoundingClientRect().top;
                        const screenPosition = window.innerHeight / 1.3;
                        
                        if (elementPosition < screenPosition) {
                            element.style.opacity = '1';
                        }
                    });
                };
                
                window.addEventListener('scroll', animateOnScroll);
                animateOnScroll(); // Run once on page load
                
              
                // Language translation functionality
                const languageSelect = document.getElementById('language-select');
                
                // Initialize i18next
                i18next
                    .use(i18nextHttpBackend)
                    .init({
                        lng: 'en',
                        fallbackLng: 'en',
                        debug: true,
                        backend: {
                            loadPath: 'locales/{{lng}}/translation.json'
                        }
                    });
                
                // Change language
                languageSelect.addEventListener('change', (e) => {
                    const lang = e.target.value;
                    i18next.changeLanguage(lang, (err, t) => {
                        if (err) return console.log('something went wrong loading', err);
                        updateContent();
                    });
                });
                
                // Function to update content based on language
                function updateContent() {
                    document.querySelectorAll('[data-i18n]').forEach(element => {
                        const key = element.getAttribute('data-i18n');
                        element.textContent = i18next.t(key);
                    });
                }
                
                // Sample translation (in a real app, you'd have separate JSON files)
                // For demo purposes, we'll simulate some translations
                const translations = {
                    en: {
                        "home": "Home",
                        "category": "Category",
                        "packages": "Packages",
                        "services": "Services",
                        "review": "Review",
                        "blogs": "Blogs",
                        "about": "About"
                    },
                    es: {
                        "home": "Inicio",
                        "category": "Categoría",
                        "packages": "Paquetes",
                        "services": "Servicios",
                        "review": "Reseña",
                        "blogs": "Blogs",
                        "about": "Acerca de"
                    },
                    fr: {
                        "home": "Accueil",
                        "category": "Catégorie",
                        "packages": "Forfaits",
                        "services": "Prestations de service",
                        "review": "La revue",
                        "blogs": "Blogs",
                        "about": "Sur"
                    },
                    de: {
                        "home": "Zuhause",
                        "category": "Kategorie",
                        "packages": "Pakete",
                        "services": "Dienstleistungen",
                        "review": "Rezension",
                        "blogs": "Blogs",
                        "about": "Über"
                    },
                    hi: {
                        "home": "घर",
                        "category": "श्रेणी",
                        "packages": "पैकेज",
                        "services": "सेवाएं",
                        "review": "समीक्षा",
                        "blogs": "ब्लॉग",
                        "about": "के बारे में"
                    },
                    ta: {
                        "home": "வீடு",
                        "category": "வகை",
                        "packages": "தொகுப்புகள்",
                        "services": "சேவைகள்",
                        "review": "விமர்சனம்",
                        "blogs": "வலைப்பதிவுகள்",
                        "about": "பற்றி"
                    }
                };
                
                // Simulate loading translations
                i18next.addResources('en', 'translation', translations.en);
                i18next.addResources('es', 'translation', translations.es);
                i18next.addResources('fr', 'translation', translations.fr);
                i18next.addResources('de', 'translation', translations.de);
                i18next.addResources('hi', 'translation', translations.hi);
                i18next.addResources('ta', 'translation', translations.ta);
                
                // Add data-i18n attributes to elements that need translation
                document.querySelectorAll('.navbar a').forEach((link, index) => {
                    const keys = Object.keys(translations.en);
                    if (index < keys.length) {
                        link.setAttribute('data-i18n', keys[index]);
                    }
                });
                
                // Animate category boxes on load
                const categoryBoxes = document.querySelectorAll('.category .box');
                categoryBoxes.forEach((box, index) => {
                    setTimeout(() => {
                        box.classList.add('animate__zoomIn');
                    }, index * 200);
                });
            });
         </script>

                  <!-- Enhanced AI Travel Assistant Chatbot -->
<div class="chatbot-container" id="chatbotContainer">
    <div class="chatbot-header">
        <div class="chatbot-header-left">
            <img src="https://cdn-icons-png.flaticon.com/512/4712/4712035.png" alt="Travel Assistant" class="chatbot-logo">
            <h3 data-i18n="chatbot.title">Travel Assistant</h3>
        </div>
        <div class="chatbot-header-right">
            <div class="language-selector">
                <select id="chatbotLanguage">
                    <option value="en">English</option>
                    <option value="ta">தமிழ்</option>
                    <option value="hi">हिन्दी</option>
                    <option value="fr">Français</option>
                    <option value="es">Español</option>
                    <option value="de">Deutsch</option>
                    <option value="ja">日本語</option>
                    <option value="zh">中文</option>
                </select>
            </div>
            <div class="chatbot-close" id="chatbotClose">&times;</div>
        </div>
    </div>
    <div class="chatbot-tabs">
        <button class="chatbot-tab active" data-tab="chat">Chat</button>
        <button class="chatbot-tab" data-tab="packages">Packages</button>
        <button class="chatbot-tab" data-tab="destinations">Destinations</button>
        <button class="chatbot-tab" data-tab="deals">Deals</button>
    </div>
    <div class="chatbot-content">
        <div class="chatbot-tab-content active" data-tab-content="chat">
            <div class="chatbot-messages" id="chatbotMessages">
                <div class="chatbot-message bot-message">
                    <img src="https://cdn-icons-png.flaticon.com/512/4712/4712035.png" alt="Bot" class="chatbot-avatar">
                    <div class="message-content">
                        <p data-i18n="chatbot.welcome">Hello! I'm your travel assistant. Where would you like to go today?</p>
                        <div class="quick-questions">
                            <button class="quick-question" data-i18n="chatbot.quick.tamilnadu">Tamil Nadu</button>
                            <button class="quick-question" data-i18n="chatbot.quick.india">India</button>
                            <button class="quick-question" data-i18n="chatbot.quick.international">International</button>
                            <button class="quick-question" data-i18n="chatbot.quick.couple">Couple Package</button>
                            <button class="quick-question" data-i18n="chatbot.quick.family">Family Package</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chatbot-input">
                <input type="text" id="chatbotInput" placeholder="Ask about travel..." data-i18n-placeholder="chatbot.placeholder">
                <button id="chatbotSend"><i class="fas fa-paper-plane"></i></button>
                <button id="chatbotMic"><i class="fas fa-microphone"></i></button>
                <button id="chatbotAttach"><i class="fas fa-paperclip"></i></button>
            </div>
        </div>
        
        <div class="chatbot-tab-content" data-tab-content="packages">
            <div class="package-categories">
                <button class="package-category active" data-category="all">All Packages</button>
                <button class="package-category" data-category="tamilnadu">Tamil Nadu</button>
                <button class="package-category" data-category="india">India</button>
                <button class="package-category" data-category="international">International</button>
                <button class="package-category" data-category="couple">Couple</button>
                <button class="package-category" data-category="family">Family</button>
                <button class="package-category" data-category="adventure">Adventure</button>
                <button class="package-category" data-category="luxury">Luxury</button>
            </div>
            <div class="package-list">
                <div class="package-card" data-categories="tamilnadu couple luxury">
                    <div class="package-image" style="background-image: url('https://images.unsplash.com/photo-1582974115351-70f54a569d7d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')">
                        <span class="package-badge">Romantic</span>
                    </div>
                    <div class="package-details">
                        <h4>Tamil Nadu Romantic Getaway</h4>
                        <p class="package-duration">7 Days / 6 Nights</p>
                        <div class="package-highlights">
                            <span><i class="fas fa-bed"></i> Luxury Resorts</span>
                            <span><i class="fas fa-utensils"></i> Private Dinners</span>
                            <span><i class="fas fa-spa"></i> Couple Spa</span>
                        </div>
                        <div class="package-price">
                            <span>From ₹24,999</span>
                            <button class="package-view">View Details</button>
                        </div>
                    </div>
                </div>
                
                <div class="package-card" data-categories="tamilnadu family">
                    <div class="package-image" style="background-image: url('https://images.unsplash.com/photo-1582974115351-70f54a569d7d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')">
                        <span class="package-badge">Family Fun</span>
                    </div>
                    <div class="package-details">
                        <h4>Tamil Nadu Family Explorer</h4>
                        <p class="package-duration">5 Days / 4 Nights</p>
                        <div class="package-highlights">
                            <span><i class="fas fa-child"></i> Kids Activities</span>
                            <span><i class="fas fa-swimming-pool"></i> Resort Stay</span>
                            <span><i class="fas fa-bus"></i> Comfortable Transport</span>
                        </div>
                        <div class="package-price">
                            <span>From ₹18,499</span>
                            <button class="package-view">View Details</button>
                        </div>
                    </div>
                </div>
                
                <div class="package-card" data-categories="india adventure">
                    <div class="package-image" style="background-image: url('https://images.unsplash.com/photo-1582974115351-70f54a569d7d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')">
                        <span class="package-badge">Adventure</span>
                    </div>
                    <div class="package-details">
                        <h4>Himalayan Trekking Adventure</h4>
                        <p class="package-duration">10 Days / 9 Nights</p>
                        <div class="package-highlights">
                            <span><i class="fas fa-hiking"></i> Guided Treks</span>
                            <span><i class="fas fa-mountain"></i> Himalayan Views</span>
                            <span><i class="fas fa-campground"></i> Camping</span>
                        </div>
                        <div class="package-price">
                            <span>From ₹32,999</span>
                            <button class="package-view">View Details</button>
                        </div>
                    </div>
                </div>
                
                <div class="package-card" data-categories="international luxury">
                    <div class="package-image" style="background-image: url('https://images.unsplash.com/photo-1582974115351-70f54a569d7d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60')">
                        <span class="package-badge">Luxury</span>
                    </div>
                    <div class="package-details">
                        <h4>European Luxury Tour</h4>
                        <p class="package-duration">14 Days / 13 Nights</p>
                        <div class="package-highlights">
                            <span><i class="fas fa-hotel"></i> 5-Star Hotels</span>
                            <span><i class="fas fa-wine-glass-alt"></i> Wine Tasting</span>
                            <span><i class="fas fa-plane"></i> Business Class Flights</span>
                        </div>
                        <div class="package-price">
                            <span>From ₹2,49,999</span>
                            <button class="package-view">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="chatbot-tab-content" data-tab-content="destinations">
            <div class="destination-search">
                <input type="text" placeholder="Search destinations..." data-i18n-placeholder="chatbot.search.destinations">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="destination-categories">
                <h4 data-i18n="chatbot.destination.tamilnadu">Tamil Nadu Highlights</h4>
                <div class="destination-grid">
                    <div class="destination-card">
                        <img src="https://images.unsplash.com/photo-1582974115351-70f54a569d7d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Chennai">
                        <div class="destination-info">
                            <h5>Chennai</h5>
                            <p>Beaches & Culture</p>
                        </div>
                    </div>
                    <div class="destination-card">
                        <img src="https://images.unsplash.com/photo-1582974115351-70f54a569d7d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Madurai">
                        <div class="destination-info">
                            <h5>Madurai</h5>
                            <p>Temples & Heritage</p>
                        </div>
                    </div>
                    <div class="destination-card">
                        <img src="https://images.unsplash.com/photo-1582974115351-70f54a569d7d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Ooty">
                        <div class="destination-info">
                            <h5>Ooty</h5>
                            <p>Hill Station</p>
                        </div>
                    </div>
                    <div class="destination-card">
                        <img src="https://images.unsplash.com/photo-1582974115351-70f54a569d7d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Kodaikanal">
                        <div class="destination-info">
                            <h5>Kodaikanal</h5>
                            <p>Misty Mountains</p>
                        </div>
                    </div>
                </div>
                
                <h4 data-i18n="chatbot.destination.india">India Highlights</h4>
                <div class="destination-grid">
                    <div class="destination-card">
                        <img src="https://images.unsplash.com/photo-1582974115351-70f54a569d7d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Goa">
                        <div class="destination-info">
                            <h5>Goa</h5>
                            <p>Beaches & Nightlife</p>
                        </div>
                    </div>
                    <div class="destination-card">
                        <img src="https://images.unsplash.com/photo-1582974115351-70f54a569d7d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Kerala">
                        <div class="destination-info">
                            <h5>Kerala</h5>
                            <p>Backwaters & Nature</p>
                        </div>
                    </div>
                    <div class="destination-card">
                        <img src="https://images.unsplash.com/photo-1582974115351-70f54a569d7d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Rajasthan">
                        <div class="destination-info">
                            <h5>Rajasthan</h5>
                            <p>Palaces & Forts</p>
                        </div>
                    </div>
                    <div class="destination-card">
                        <img src="https://images.unsplash.com/photo-1582974115351-70f54a569d7d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Himalayas">
                        <div class="destination-info">
                            <h5>Himalayas</h5>
                            <p>Mountains & Adventure</p>
                        </div>
                    </div>
                </div>
                
                <h4 data-i18n="chatbot.destination.international">International Highlights</h4>
                <div class="destination-grid">
                    <div class="destination-card">
                        <img src="https://images.unsplash.com/photo-1582974115351-70f54a569d7d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Bali">
                        <div class="destination-info">
                            <h5>Bali</h5>
                            <p>Island Paradise</p>
                        </div>
                    </div>
                    <div class="destination-card">
                        <img src="https://images.unsplash.com/photo-1582974115351-70f54a569d7d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Switzerland">
                        <div class="destination-info">
                            <h5>Switzerland</h5>
                            <p>Alpine Beauty</p>
                        </div>
                    </div>
                    <div class="destination-card">
                        <img src="https://images.unsplash.com/photo-1582974115351-70f54a569d7d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Japan">
                        <div class="destination-info">
                            <h5>Japan</h5>
                            <p>Culture & Technology</p>
                        </div>
                    </div>
                    <div class="destination-card">
                        <img src="https://images.unsplash.com/photo-1582974115351-70f54a569d7d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Dubai">
                        <div class="destination-info">
                            <h5>Dubai</h5>
                            <p>Modern Marvels</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="chatbot-tab-content" data-tab-content="deals">
            <div class="deals-container">
                <div class="deal-card featured">
                    <div class="deal-badge">Featured</div>
                    <img src="https://images.unsplash.com/photo-1582974115351-70f54a569d7d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Special Deal">
                    <div class="deal-content">
                        <h4>Summer Special: Tamil Nadu</h4>
                        <p class="deal-description">Enjoy 7 days exploring Tamil Nadu's best destinations with 30% off!</p>
                        <div class="deal-price">
                            <span class="original-price">₹28,999</span>
                            <span class="discounted-price">₹20,299</span>
                            <span class="deal-savings">Save 30%</span>
                        </div>
                        <div class="deal-expiry">
                            <i class="fas fa-clock"></i> <span>Offer ends in 5 days</span>
                        </div>
                        <button class="deal-book">Book Now</button>
                    </div>
                </div>
                
                <div class="deal-card">
                    <div class="deal-badge">Last Minute</div>
                    <img src="https://images.unsplash.com/photo-1582974115351-70f54a569d7d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Last Minute Deal">
                    <div class="deal-content">
                        <h4>Weekend Getaway: Pondicherry</h4>
                        <p class="deal-description">2 nights in luxury beach resort with breakfast included</p>
                        <div class="deal-price">
                            <span class="original-price">₹12,999</span>
                            <span class="discounted-price">₹8,999</span>
                            <span class="deal-savings">Save ₹4,000</span>
                        </div>
                        <div class="deal-expiry">
                            <i class="fas fa-clock"></i> <span>Limited availability</span>
                        </div>
                        <button class="deal-book">Book Now</button>
                    </div>
                </div>
                
                <div class="deal-card">
                    <div class="deal-badge">Family</div>
                    <img src="https://images.unsplash.com/photo-1582974115351-70f54a569d7d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Family Deal">
                    <div class="deal-content">
                        <h4>Family Adventure: Kodaikanal</h4>
                        <p class="deal-description">4 days of fun activities for the whole family</p>
                        <div class="deal-price">
                            <span class="original-price">₹35,999</span>
                            <span class="discounted-price">₹28,799</span>
                            <span class="deal-savings">Save 20%</span>
                        </div>
                        <div class="deal-expiry">
                            <i class="fas fa-clock"></i> <span>Valid until Aug 30</span>
                        </div>
                        <button class="deal-book">Book Now</button>
                    </div>
                </div>
                
                <div class="deal-card">
                    <div class="deal-badge">Honeymoon</div>
                    <img src="https://images.unsplash.com/photo-1582974115351-70f54a569d7d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Honeymoon Deal">
                    <div class="deal-content">
                        <h4>Romantic Escape: Maldives</h4>
                        <p class="deal-description">5 nights in overwater villa with private pool</p>
                        <div class="deal-price">
                            <span class="original-price">₹1,49,999</span>
                            <span class="discounted-price">₹1,19,999</span>
                            <span class="deal-savings">Save ₹30,000</span>
                        </div>
                        <div class="deal-expiry">
                            <i class="fas fa-clock"></i> <span>Limited time offer</span>
                        </div>
                        <button class="deal-book">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="chatbot-toggle" id="chatbotToggle">
    <i class="fas fa-plane"></i>
    <span class="chatbot-notification">1</span>
</div>

<style>
    /* Enhanced Chatbot Styles */
    .chatbot-container {
        position: fixed;
        bottom: 8rem;
        right: 3rem;
        width: 380px;
        height: 600px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.2);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        transform: translateY(20px);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 1001;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    .chatbot-container.active {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
    }
    
    .chatbot-header {
        background: linear-gradient(135deg, #2980b9 0%, #2c3e50 100%);
        color: white;
        padding: 1rem 1.5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .chatbot-header-left {
        display: flex;
        align-items: center;
    }
    
    .chatbot-logo {
        width: 30px;
        height: 30px;
        margin-right: 10px;
    }
    
    .chatbot-header h3 {
        margin: 0;
        font-size: 1.4rem;
        font-weight: 600;
    }
    
    .chatbot-header-right {
        display: flex;
        align-items: center;
    }
    
    .language-selector {
        margin-right: 15px;
    }
    
    .language-selector select {
        padding: 0.3rem 0.5rem;
        border-radius: 5px;
        border: none;
        background: rgba(255,255,255,0.2);
        color: white;
        font-size: 0.8rem;
        cursor: pointer;
    }
    
    .language-selector select option {
        color: #333;
    }
    
    .chatbot-close {
        font-size: 1.5rem;
        cursor: pointer;
        transition: transform 0.3s ease;
        line-height: 1;
    }
    
    .chatbot-close:hover {
        transform: rotate(90deg);
    }
    
    .chatbot-tabs {
        display: flex;
        background: #f5f7fa;
        border-bottom: 1px solid #e1e5eb;
    }
    
    .chatbot-tab {
        flex: 1;
        padding: 0.8rem;
        text-align: center;
        font-size: 0.9rem;
        font-weight: 600;
        color: #666;
        background: none;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
    }
    
    .chatbot-tab.active {
        color: #2980b9;
    }
    
    .chatbot-tab.active::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: #2980b9;
    }
    
    .chatbot-content {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }
    
    .chatbot-tab-content {
        display: none;
        flex-grow: 1;
        overflow-y: auto;
    }
    
    .chatbot-tab-content.active {
        display: block;
    }
    
    /* Chat Tab Styles */
    .chatbot-messages {
        flex-grow: 1;
        padding: 1rem;
        overflow-y: auto;
        background: #f5f7fa;
    }
    
    .chatbot-message {
        display: flex;
        margin-bottom: 1rem;
    }
    
    .bot-message {
        justify-content: flex-start;
    }
    
    .user-message {
        justify-content: flex-end;
    }
    
    .chatbot-avatar {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        margin-right: 0.8rem;
        align-self: flex-end;
    }
    
    .user-message .chatbot-avatar {
        order: 1;
        margin-right: 0;
        margin-left: 0.8rem;
    }
    
    .message-content {
        max-width: 75%;
    }
    
    .message-content p {
        background: white;
        padding: 0.8rem 1rem;
        border-radius: 12px;
        margin: 0;
        font-size: 0.9rem;
        line-height: 1.4;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    
    .bot-message .message-content p {
        border-top-left-radius: 0;
        background: #e3f2fd;
    }
    
    .user-message .message-content p {
        border-top-right-radius: 0;
        background: #2980b9;
        color: white;
    }
    
    .quick-questions {
        display: flex;
        flex-wrap: wrap;
        margin-top: 0.8rem;
        gap: 0.5rem;
    }
    
    .quick-question {
        background: white;
        border: 1px solid #ddd;
        border-radius: 20px;
        padding: 0.4rem 0.8rem;
        font-size: 0.8rem;
        cursor: pointer;
        transition: all 0.3s ease;
        white-space: nowrap;
    }
    
    .quick-question:hover {
        background: #2980b9;
        color: white;
        border-color: #2980b9;
    }
    
    .chatbot-input {
        display: flex;
        padding: 0.8rem;
        background: white;
        border-top: 1px solid #eee;
    }
    
    .chatbot-input input {
        flex-grow: 1;
        padding: 0.8rem 1rem;
        border: 1px solid #ddd;
        border-radius: 25px;
        outline: none;
        font-size: 0.9rem;
    }
    
    .chatbot-input button {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        border: none;
        background: #2980b9;
        color: white;
        margin-left: 0.5rem;
        cursor: pointer;
        transition: background 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .chatbot-input button:hover {
        background: #2c3e50;
    }
    
    /* Packages Tab Styles */
    .package-categories {
        display: flex;
        overflow-x: auto;
        padding: 0.8rem;
        gap: 0.5rem;
        background: #f5f7fa;
        border-bottom: 1px solid #e1e5eb;
    }
    
    .package-category {
        padding: 0.4rem 0.8rem;
        border-radius: 20px;
        border: 1px solid #ddd;
        background: white;
        font-size: 0.8rem;
        cursor: pointer;
        white-space: nowrap;
        transition: all 0.3s ease;
    }
    
    .package-category.active {
        background: #2980b9;
        color: white;
        border-color: #2980b9;
    }
    
    .package-list {
        padding: 0.8rem;
        overflow-y: auto;
    }
    
    .package-card {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        margin-bottom: 1rem;
        transition: transform 0.3s ease;
    }
    
    .package-card:hover {
        transform: translateY(-5px);
    }
    
    .package-image {
        height: 120px;
        background-size: cover;
        background-position: center;
        position: relative;
    }
    
    .package-badge {
        position: absolute;
        top: 0.5rem;
        left: 0.5rem;
        background: rgba(41, 128, 185, 0.9);
        color: white;
        padding: 0.2rem 0.5rem;
        border-radius: 3px;
        font-size: 0.7rem;
        font-weight: bold;
    }
    
    .package-details {
        padding: 0.8rem;
    }
    
    .package-details h4 {
        margin: 0 0 0.3rem 0;
        font-size: 1rem;
        color: #333;
    }
    
    .package-duration {
        font-size: 0.8rem;
        color: #666;
        margin-bottom: 0.5rem;
    }
    
    .package-highlights {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-bottom: 0.8rem;
    }
    
    .package-highlights span {
        font-size: 0.7rem;
        color: #555;
        display: flex;
        align-items: center;
    }
    
    .package-highlights i {
        margin-right: 0.3rem;
        color: #2980b9;
        font-size: 0.8rem;
    }
    
    .package-price {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .package-price span {
        font-size: 0.9rem;
        font-weight: bold;
        color: #2980b9;
    }
    
    .package-view {
        padding: 0.3rem 0.8rem;
        border-radius: 4px;
        border: none;
        background: #2980b9;
        color: white;
        font-size: 0.8rem;
        cursor: pointer;
        transition: background 0.3s ease;
    }
    
    .package-view:hover {
        background: #2c3e50;
    }
    
    /* Destinations Tab Styles */
    .destination-search {
        display: flex;
        padding: 0.8rem;
        background: #f5f7fa;
        border-bottom: 1px solid #e1e5eb;
    }
    
    .destination-search input {
        flex-grow: 1;
        padding: 0.6rem 1rem;
        border: 1px solid #ddd;
        border-radius: 25px;
        outline: none;
        font-size: 0.9rem;
    }
    
    .destination-search button {
        background: none;
        border: none;
        margin-left: 0.5rem;
        color: #2980b9;
        cursor: pointer;
    }
    
    .destination-categories {
        padding: 0.8rem;
    }
    
    .destination-categories h4 {
        margin: 0.5rem 0;
        font-size: 1rem;
        color: #333;
    }
    
    .destination-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 0.8rem;
        margin-bottom: 1.5rem;
    }
    
    .destination-card {
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }
    
    .destination-card:hover {
        transform: translateY(-5px);
    }
    
    .destination-card img {
        width: 100%;
        height: 80px;
        object-fit: cover;
    }
    
    .destination-info {
        padding: 0.6rem;
        background: white;
    }
    
    .destination-info h5 {
        margin: 0;
        font-size: 0.9rem;
        color: #333;
    }
    
    .destination-info p {
        margin: 0.2rem 0 0 0;
        font-size: 0.7rem;
        color: #666;
    }
    
    /* Deals Tab Styles */
    .deals-container {
        padding: 0.8rem;
    }
    
    .deal-card {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        margin-bottom: 1rem;
        position: relative;
    }
    
    .deal-card.featured {
        border: 2px solid #f39c12;
    }
    
    .deal-badge {
        position: absolute;
        top: 0.5rem;
        left: 0.5rem;
        background: #e74c3c;
        color: white;
        padding: 0.2rem 0.5rem;
        border-radius: 3px;
        font-size: 0.7rem;
        font-weight: bold;
        z-index: 1;
    }
    
    .deal-card img {
        width: 100%;
        height: 120px;
        object-fit: cover;
    }
    
    .deal-content {
        padding: 0.8rem;
        background: white;
    }
    
    .deal-content h4 {
        margin: 0 0 0.5rem 0;
        font-size: 1rem;
        color: #333;
    }
    
    .deal-description {
        font-size: 0.8rem;
        color: #666;
        margin-bottom: 0.8rem;
    }
    
    .deal-price {
        margin-bottom: 0.8rem;
    }
    
    .original-price {
        font-size: 0.9rem;
        color: #999;
        text-decoration: line-through;
        margin-right: 0.5rem;
    }
    
    .discounted-price {
        font-size: 1.1rem;
        font-weight: bold;
        color: #e74c3c;
    }
    
    .deal-savings {
        font-size: 0.7rem;
        background: #fde8e8;
        color: #e74c3c;
        padding: 0.2rem 0.4rem;
        border-radius: 3px;
        margin-left: 0.5rem;
    }
    
    .deal-expiry {
        font-size: 0.7rem;
        color: #666;
        display: flex;
        align-items: center;
        margin-bottom: 0.8rem;
    }
    
    .deal-expiry i {
        margin-right: 0.3rem;
    }
    
    .deal-book {
        width: 100%;
        padding: 0.5rem;
        border: none;
        border-radius: 5px;
        background: #2980b9;
        color: white;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.3s ease;
    }
    
    .deal-book:hover {
        background: #2c3e50;
    }
    
    /* Chatbot Toggle Button */
    .chatbot-toggle {
        position: fixed;
        bottom: 3rem;
        Left: 3rem;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #2980b9 0%, #2c3e50 100%);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        cursor: pointer;
        box-shadow: 0 5px 25px rgba(0,0,0,0.2);
        z-index: 1000;
        transition: all 0.3s ease;
    }
    
    .chatbot-toggle:hover {
        transform: scale(1.1);
    }
    
    .chatbot-toggle.active {
        transform: rotate(360deg);
        background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
    }
    
    .chatbot-notification {
        position: absolute;
        top: -5px;
        right: -5px;
        background: #e74c3c;
        color: white;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        font-size: 0.7rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .chatbot-container {
            width: 90%;
            right: 5%;
            height: 70vh;
            bottom: 8rem;
        }
        
        .destination-grid {
            grid-template-columns: 1fr;
        }
        
        .chatbot-toggle {
            width: 50px;
            height: 50px;
            font-size: 1.5rem;
            bottom: 2rem;
            right: 2rem;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Initialize chatbot
    const chatbotContainer = document.getElementById('chatbotContainer');
    const chatbotToggle = document.getElementById('chatbotToggle');
    const chatbotClose = document.getElementById('chatbotClose');
    const chatbotMessages = document.getElementById('chatbotMessages');
    const chatbotInput = document.getElementById('chatbotInput');
    const chatbotSend = document.getElementById('chatbotSend');
    const chatbotMic = document.getElementById('chatbotMic');
    const chatbotTabs = document.querySelectorAll('.chatbot-tab');
    const chatbotTabContents = document.querySelectorAll('.chatbot-tab-content');
    const packageCategories = document.querySelectorAll('.package-category');
    const packageCards = document.querySelectorAll('.package-card');
    
    // Sample travel-related responses with more details
    const botResponses = {
        'greeting': {
            en: "Hello! I'm your travel assistant. How can I help you plan your perfect trip today?",
            ta: "வணக்கம்! நான் உங்கள் பயண உதவியாளர். உங்கள் சிறந்த பயணத்தைத் திட்டமிட என்னால் எப்படி உதவ முடியும்?",
            hi: "नमस्ते! मैं आपका यात्रा सहायक हूँ। आज मैं आपकी सही यात्रा की योजना बनाने में कैसे मदद कर सकता हूँ?"
        },
        'packages': {
            en: "We offer several packages: Tamil Nadu Special, India Explorer, and International Getaways. We also have special packages for couples, families, and adventure seekers!",
            ta: "நாங்கள் பல தொகுப்புகளை வழங்குகிறோம்: தமிழ்நாடு சிறப்பு, இந்தியா எக்ஸ்ப்ளோரர் மற்றும் சர்வதேச கேட்வேக்கள். ஜோடிகள், குடும்பங்கள் மற்றும் சாகச தேடுபவர்களுக்கான சிறப்பு தொகுப்புகளும் எங்களிடம் உள்ளன!",
            hi: "हम कई पैकेज प्रदान करते हैं: तमिलनाडु विशेष, भारत एक्सप्लोरर और अंतर्राष्ट्रीय गेटवे। हमारे पास जोड़ों, परिवारों और साहसिक यात्रियों के लिए विशेष पैकेज भी हैं!"
        },
        'tamilnadu': {
            en: "Tamil Nadu offers beautiful destinations like Chennai's beaches, Madurai's temples, Ooty's hills, and Pondicherry's French heritage. Our Tamil Nadu packages start from ₹8,999.",
            ta: "தமிழ்நாடு சென்னையின் கடற்கரைகள், மதுரையின் கோயில்கள், உதகமண்டலத்தின் மலைகள் மற்றும் பாண்டிச்சேரியின் பிரஞ்சு மரபு போன்ற அழகான இடங்களை வழங்குகிறது. எங்கள் தமிழ்நாடு தொகுப்புகள் ₹8,999 முதல் தொடங்குகின்றன.",
            hi: "तमिलनाडु चेन्नई के समुद्र तटों, मदुरै के मंदिरों, ऊटी की पहाड़ियों और पांडिचेरी की फ्रांसीसी विरासत जैसे सुंदर स्थलों की पेशकश करता है। हमारे तमिलनाडु पैकेज ₹8,999 से शुरू होते हैं।"
        },
        'india': {
            en: "Explore incredible India with packages to Goa's beaches, Kerala's backwaters, Rajasthan's palaces, and the Himalayan adventures starting from ₹12,499.",
            ta: "கோவாவின் கடற்கரைகள், கேரளாவின் பின்னணி நீர், ராஜஸ்தானின் அரண்மனைகள் மற்றும் இமயமலையின் சாகசங்கள் ₹12,499 முதல் தொடங்கும் தொகுப்புகளுடன் அற்புதமான இந்தியாவை ஆராயுங்கள்.",
            hi: "गोवा के समुद्र तटों, केरल के बैकवाटर, राजस्थान के महलों और हिमालय के रोमांच के लिए ₹12,499 से शुरू होने वाले पैकेजों के साथ अविश्वसनीय भारत की खोज करें।"
        },
        'international': {
            en: "Our international packages include Bali's beaches, Switzerland's Alps, Japan's culture, and Dubai's modern marvels starting from ₹49,999.",
            ta: "எங்கள் சர்வதேச தொகுப்புகளில் பாலியின் கடற்கரைகள், சுவிட்சர்லாந்தின் ஆல்ப்ஸ், ஜப்பானின் கலாச்சாரம் மற்றும் டுபாயின் நவீன அதிசயங்கள் ₹49,999 முதல் தொடங்குகின்றன.",
            hi: "हमारे अंतरराष्ट्रीय पैकेजों में बाली के समुद्र तटों, स्विट्जरलैंड के आल्प्स, जापान की संस्कृति और दुबई के आधुनिक चमत्कार ₹49,999 से शुरू होते हैं।"
        },
        'couple': {
            en: "Our romantic couple packages include private dinners, luxury resorts, and special experiences starting from ₹19,999.",
            ta: "எங்கள் ரொமான்டிக் ஜோடி தொகுப்புகளில் தனிப்பட்ட இரவு உணவு, ஆடம்பர ரிசார்ட் மற்றும் சிறப்பு அனுபவங்கள் ₹19,999 முதல் தொடங்குகின்றன.",
            hi: "हमारे रोमांटिक कपल पैकेजों में निजी डिनर, लक्जरी रिसॉर्ट और विशेष अनुभव ₹19,999 से शुरू होते हैं।"
        },
        'family': {
            en: "Family packages include kid-friendly activities, spacious accommodations, and fun for all ages starting from ₹24,999.",
            ta: "குடும்ப தொகுப்புகளில் குழந்தைகளுக்கு ஏற்ற செயல்பாடுகள், விசாலமான வசிப்பிடங்கள் மற்றும் அனைத்து வயதினருக்கும் வேடிக்கை ₹24,999 முதல் தொடங்குகின்றன.",
            hi: "परिवार पैकेजों में बच्चों के अनुकूल गतिविधियाँ, विशाल आवास और सभी उम्र के लिए मज़ा ₹24,999 से शुरू होता है।"
        },
        'booking': {
            en: "You can book directly through our website or I can assist you with the process. Would you like me to check availability for a specific package?",
            ta: "எங்கள் வலைத்தளத்தின் மூலம் நேரடியாக பதிவு செய்யலாம் அல்லது நான் செயல்முறையில் உதவ முடியும். ஒரு குறிப்பிட்ட தொகுப்பிற்கான கிடைக்கும் தன்மையை சரிபார்க்க விரும்புகிறீர்களா?",
            hi: "आप हमारी वेबसाइट के माध्यम से सीधे बुक कर सकते हैं या मैं आपको इस प्रक्रिया में सहायता कर सकता हूँ। क्या आप चाहेंगे कि मैं किसी विशेष पैकेज की उपलब्धता जांचूं?"
        },
        'default': {
            en: "I'm not sure I understand. Could you rephrase that? I can help with package info, bookings, or travel advice.",
            ta: "நான் புரிந்து கொள்ளவில்லை என்று நினைக்கிறேன். அதை மீண்டும் சொல்ல முடியுமா? நான் தொகுப்பு தகவல், முன்பதிவுகள் அல்லது பயண ஆலோசனையில் உதவ முடியும்.",
            hi: "मुझे यकीन नहीं है कि मैं समझ पाया। क्या आप इसे दोबारा कह सकते हैं? मैं पैकेज जानकारी, बुकिंग या यात्रा सलाह में मदद कर सकता हूँ।"
        }
    };
    
    // Current language
    let currentLanguage = 'en';
    
    // Toggle chatbot visibility
    chatbotToggle.addEventListener('click', () => {
        chatbotContainer.classList.toggle('active');
        chatbotToggle.classList.toggle('active');
    });
    
    chatbotClose.addEventListener('click', () => {
        chatbotContainer.classList.remove('active');
        chatbotToggle.classList.remove('active');
    });
    
    // Tab switching
    chatbotTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const tabName = tab.getAttribute('data-tab');
            
            // Update active tab
            chatbotTabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
            
            // Show corresponding content
            chatbotTabContents.forEach(content => {
                content.classList.remove('active');
                if (content.getAttribute('data-tab-content') === tabName) {
                    content.classList.add('active');
                }
            });
        });
    });
    
    // Package category filtering
    packageCategories.forEach(category => {
        category.addEventListener('click', () => {
            const categoryName = category.getAttribute('data-category');
            
            // Update active category
            packageCategories.forEach(c => c.classList.remove('active'));
            category.classList.add('active');
            
            // Filter packages
            packageCards.forEach(card => {
                const categories = card.getAttribute('data-categories').split(' ');
                if (categoryName === 'all' || categories.includes(categoryName)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
    
    // Send message function
    function sendMessage() {
        const message = chatbotInput.value.trim();
        if (message === '') return;
        
        // Add user message
        addMessage(message, 'user');
        chatbotInput.value = '';
        
        // Simulate bot typing
        setTimeout(() => {
            const botResponse = generateBotResponse(message);
            addMessage(botResponse, 'bot');
        }, 1000);
    }
    
    // Add message to chat
    function addMessage(text, sender) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `chatbot-message ${sender}-message`;
        
        if (sender === 'bot') {
            messageDiv.innerHTML = `
                <img src="https://cdn-icons-png.flaticon.com/512/4712/4712035.png" alt="Bot" class="chatbot-avatar">
                <div class="message-content">
                    <p>${text}</p>
                </div>
            `;
        } else {
            messageDiv.innerHTML = `
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="User" class="chatbot-avatar">
                <div class="message-content">
                    <p>${text}</p>
                </div>
            `;
        }
        
        chatbotMessages.appendChild(messageDiv);
        chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
    }
    
    // Generate bot response based on language and query
    function generateBotResponse(message) {
        const lowerMessage = message.toLowerCase();
        
        if (lowerMessage.includes('hi') || lowerMessage.includes('hello') || lowerMessage.includes('hey')) {
            return botResponses['greeting'][currentLanguage];
        } else if (lowerMessage.includes('package') || lowerMessage.includes('tour') || lowerMessage.includes('trip')) {
            return botResponses['packages'][currentLanguage];
        } else if (lowerMessage.includes('tamil') || lowerMessage.includes('tamilnadu') || lowerMessage.includes('chennai') || lowerMessage.includes('madurai')) {
            return botResponses['tamilnadu'][currentLanguage];
        } else if (lowerMessage.includes('india') || lowerMessage.includes('indian') || lowerMessage.includes('goa') || lowerMessage.includes('kerala')) {
            return botResponses['india'][currentLanguage];
        } else if (lowerMessage.includes('international') || lowerMessage.includes('abroad') || lowerMessage.includes('foreign') || lowerMessage.includes('dubai') || lowerMessage.includes('bali')) {
            return botResponses['international'][currentLanguage];
        } else if (lowerMessage.includes('couple') || lowerMessage.includes('romantic') || lowerMessage.includes('honeymoon')) {
            return botResponses['couple'][currentLanguage];
        } else if (lowerMessage.includes('family') || lowerMessage.includes('kids') || lowerMessage.includes('children')) {
            return botResponses['family'][currentLanguage];
        } else if (lowerMessage.includes('book') || lowerMessage.includes('reserve') || lowerMessage.includes('buy')) {
            return botResponses['booking'][currentLanguage];
        } else {
            return botResponses['default'][currentLanguage];
        }
    }
    
    // Event listeners for chat
    chatbotSend.addEventListener('click', sendMessage);
    chatbotInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') sendMessage();
    });
    
    // Quick question buttons
    document.querySelectorAll('.quick-question').forEach(button => {
        button.addEventListener('click', () => {
            const question = button.textContent;
            addMessage(question, 'user');
            
            setTimeout(() => {
                const botResponse = generateBotResponse(question);
                addMessage(botResponse, 'bot');
            }, 1000);
        });
    });
    
    // Language change handler
    const languageSelect = document.getElementById('chatbotLanguage');
    languageSelect.addEventListener('change', (e) => {
        currentLanguage = e.target.value;
        // In a real app, you would update all translatable content here
        console.log(`Language changed to ${currentLanguage}`);
    });
    
    // Voice recognition
    if ('webkitSpeechRecognition' in window) {
        const recognition = new webkitSpeechRecognition();
        recognition.continuous = false;
        recognition.interimResults = false;
        
        chatbotMic.addEventListener('click', () => {
            recognition.start();
            chatbotMic.innerHTML = '<i class="fas fa-microphone-slash"></i>';
        });
        
        recognition.onresult = (event) => {
            const transcript = event.results[0][0].transcript;
            chatbotInput.value = transcript;
            chatbotMic.innerHTML = '<i class="fas fa-microphone"></i>';
            sendMessage();
        };
        
        recognition.onerror = () => {
            chatbotMic.innerHTML = '<i class="fas fa-microphone"></i>';
        };
        
        recognition.onend = () => {
            chatbotMic.innerHTML = '<i class="fas fa-microphone"></i>';
        };
    } else {
        chatbotMic.style.display = 'none';
    }
    
    // Sample function to simulate package viewing
    document.querySelectorAll('.package-view').forEach(button => {
        button.addEventListener('click', () => {
            // Switch to chat tab
            document.querySelector('.chatbot-tab[data-tab="chat"]').click();
            
            // Simulate asking about the package
            const packageName = button.closest('.package-card').querySelector('h4').textContent;
            addMessage(`Tell me more about ${packageName}`, 'user');
            
            setTimeout(() => {
                addMessage(`The ${packageName} is one of our most popular packages! It includes... [more details would go here]`, 'bot');
            }, 1500);
        });
    });
    
    // Sample function to simulate deal booking
    document.querySelectorAll('.deal-book').forEach(button => {
        button.addEventListener('click', () => {
            // Switch to chat tab
            document.querySelector('.chatbot-tab[data-tab="chat"]').click();
            
            // Simulate asking about booking
            const dealName = button.closest('.deal-card').querySelector('h4').textContent;
            addMessage(`I want to book the ${dealName}`, 'user');
            
            setTimeout(() => {
                addMessage(`Great choice! The ${dealName} is available. Let me check the dates for you...`, 'bot');
            }, 1500);
        });
    });
});
</script>

    </body>
</html>