
<?php
   $Title = "";
   $MetaDescription = "";
   $MetaKeywords = "";
?>

<?php
   include __DIR__ . '/A_Layout/Header/header.php';
?>
        <!-- Slider -->
        <header id="slider-area" class="header slider-fade">
            <div class="owl-carousel owl-theme">
                <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
                <div class="text-left item bg-img" data-overlay-dark="4" data-background="images/slider/hotel.jpg">
                    <div class="v-middle caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <h1>Hotel Design</h1>
                                    <p>Designing hospitality spaces focused on guest experience, combining luxury, efficiency, and brand identity across rooms, amenities, and public areas.</p>
                                    <!-- <a href="project-page.html" class="button-light">View Project</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-left item bg-img" data-overlay-dark="3" data-background="images/slider/1.jpg">
                    <div class="v-middle caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <h1>House Design</h1>
                                    <p>Planning and creating residential spaces that balance functionality, comfort, and aesthetic appeal, tailored to the lifestyle and needs of the occupants.</p>
                                    <!-- <a href="project-page.html" class="button-light">View Project</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-left item bg-img" data-overlay-dark="4" data-background="images/slider/lake.jpeg">
                    <div class="v-middle caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <h1>Lake Development</h1>
                                    <p>Enhancing and managing lakefront areas for recreational, ecological, or residential use, with careful integration of environmental sustainability and infrastructure.</p>
                                    <!-- <a href="project-page.html" class="button-light">View Project</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thumbnail-preview-container">
                <div class="thumbnail-card position-relative">
                    <img src="images/headerSlide/1.jpeg" class="thumbnail img-fluid rounded" alt="Thumb 1" data-id="1"
                        data-index="0"
                        data-images='["images/headerSlide/1.jpeg", "images/headerSlide/2.jpeg", "images/headerSlide/3.jpeg"]'>
                    <button class="arrow-icon-btn position-absolute top-0 end-0 m-2" data-id="1">›</button>
                </div>
                <div class="thumbnail-card position-relative">
                    <img src="images/headerSlide/4.jpg" class="thumbnail img-fluid rounded" alt="Thumb 2" data-id="1"
                        data-index="0"
                        data-images='["images/headerSlide/4.jpg", "images/headerSlide/5.PNG", "images/headerSlide/6.png"]'>
                    <button class="arrow-icon-btn position-absolute top-0 end-0 m-2" data-id="2">›</button>
                </div>
                <div class="thumbnail-card position-relative">
                    <img src="images/headerSlide/7.png" class="thumbnail img-fluid rounded" alt="Thumb 3" data-id="1"
                        data-index="0"
                        data-images='["images/headerSlide/7.png", "images/headerSlide/8.png", "images/headerSlide/9.png"]'>
                    <button class="arrow-icon-btn position-absolute top-0 end-0 m-2" data-id="3">›</button>
                </div>
            </div>
        </header>
        <!-- About -->
        <section class="about section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <div class="sub-title border-bot-light">Who are we?</div>
                    </div>
                    <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                        <div class="section-title"><span>About</span> Us</div>
                        <p>AAMUKH ARCHITECTS is a forward-thinking design studio specializing in comprehensive architectural and interior solutions. Established in 2021 by Ar. Raj Unjiya , the studio was envisioned as a platform to shape spaces that are not only functional but emotionally engaging. Our work spans across residential , commercial and landscape domains always driven by a design philosophy rooted in clarity , innovation , and enduring elegance.</p>
                        <div class="section-title"><span>Our</span> Studio</div>
                        <p>AAMUKH ARCHITECTS is a dynamic Ahmedabad-based architecture and design studio.</p>
                        <p>Built on a foundation of creative energy and practical insight , the firm brings a youthful perspective to architectural and interior design. AAMUKH ARCHITECTS is actively engaged in a diverse range of projects across Gujarat residential , commercial and bespoke interiors. all aimed at delivering thoughtful , context-driven design solutions.</p>
                        <br>
                        <!-- <div class="row">
                            <div class="col col-md-4">
                                <div class="about-box"> <img src="images/icon-1.png" class="icon" alt="">
                                    <h5>Architecture</h5>
                                </div>
                            </div>
                            <div class="col col-md-4">
                                <div class="about-box"> <img src="images/icon-2.png" class="icon" alt="">
                                    <h5>Interior</h5>
                                </div>
                            </div>
                            <div class="col col-md-4">
                                <div class="about-box"> <img src="images/icon-3.png" class="icon" alt="">
                                    <h5>Planing</h5>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Projects -->
        <div class="projects2 section-padding">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="sub-title border-bot-light">Discover</div>
                    </div>
                    <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                        <div class="section-title">Creative <span>Projects</span></div>
                        <p>AAMUKH ARCHITECTS creativity goes beyond convention. Our Creative Projects blend art , architecture and innovation to craft unique , expressive spaces that stand out. From conceptual installations and experimental designs to bespoke structures. we push boundaries to bring bold ideas to life. These projects often explore unconventional materials , forms and narratives. Each creation is a reflection of imagination , vision and purpose designed to inspire and engage.</p>
                    </div>
                </div>
                <!-- Swiper Slider Wrapper -->
                <div class="projects2-slider swiper mySwiper">
                    <div class="swiper-wrapper">
        
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <a href="images/indexProject/1.jpg" title="Image Gallery" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/indexProject/1.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail text-center"> <i class="ti-fullscreen"></i> </div>
                                </div>
                            </a>
                        </div>
        
                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <a href="images/indexProject/2.jpg" title="Image Gallery" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/indexProject/2.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail text-center"> <i class="ti-fullscreen"></i> </div>
                                </div>
                            </a>
                        </div>
        
                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <a href="images/indexProject/3.jpg" title="Image Gallery" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/indexProject/3.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail text-center"> <i class="ti-fullscreen"></i> </div>
                                </div>
                            </a>
                        </div>
        
                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <a href="images/indexProject/4.jpg" title="Image Gallery" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/indexProject/4.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail text-center"> <i class="ti-fullscreen"></i> </div>
                                </div>
                            </a>
                        </div>
        
                        <!-- Slide 5 -->
                        <div class="swiper-slide">
                            <a href="images/indexProject/5.jpg" title="Image Gallery" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/indexProject/5.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail text-center"> <i class="ti-fullscreen"></i> </div>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="images/indexProject/6.jpg" title="Image Gallery" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/indexProject/6.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail text-center"> <i class="ti-fullscreen"></i> </div>
                                </div>
                            </a>
                        </div>

                        <div class="swiper-slide">
                             <a href="images/indexProject/7.jpg" title="Image Gallery" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/indexProject/7.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail text-center"> <i class="ti-fullscreen"></i> </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testiominals -->
        <section class="testimonials">
            <div class="background bg-img bg-fixed section-padding" data-background="images/slider/4.jpg"
                data-overlay-dark="6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-30">
                            <h3 class="sub-title border-bot-dark">Testiominals</h3>
                        </div>
                        <div class="col-md-8">
                            <div class="section-title">What Client's Say?</div>
                            <div class="wrap">
                                <div class="owl-carousel owl-theme">
                                    <div class="item"> <span class="quote"><img src="images/quot.png" alt=""></span>
                                        <p>They transformed our vision into a beautiful , functional space that perfectly reflects our lifestyle.</p>
                                        <div class="info">
                                            <div class="author-img"> <img src="images/TESTI/3.png" alt=""> </div>
                                            <div class="cont">
                                                <h6>MAHESH PATEL</h6> <span>ShowRoom Design</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> <span class="quote">
                                            <img src="images/quot.png" alt="">
                                        </span>
                                        <p>Creative , professional and detail oriented exceeded all of our expectations.</p>
                                        <div class="info">
                                            <div class="author-img"> <img src="images/TESTI/2.png" alt=""> </div>
                                            <div class="cont">
                                                <h6>DEEPAK SHAH</h6> <span>Interior Design</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item"> <span class="quote">
                                            <img src="images/quot.png" alt="">
                                        </span>
                                        <p>Working with AAMUKH ARCHITECTS was a seamless experience. Their creativity , professionalism and commitment to quality truly set them apart. The final result exceeded our expectations in every way.</p>
                                        <div class="info">
                                            <div class="author-img"> <img src="images/TESTI/1.png" alt=""> </div>
                                            <div class="cont">
                                                <h6>ANUP MITAL</h6> <span>Bungalow Design</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog -->
        <!-- <section class="blog-home section-padding">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <div class="sub-title border-bot-light">Blog</div>
                    </div>
                    <div class="col-md-8">
                        <div class="section-title"><span>Latest</span> News</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="item">
                            <div class="post-img">
                                <a href="post.html">
                                    <div class="img"> <img src="images/blog/1.jpg" alt=""> </div>
                                </a>
                            </div>
                            <div class="cont">
                                <h4><a href="post.html">5 Best Villa ideas in 2025</a></h4>
                                <div class="info"> <a href="blog"><span>Exterior Design</span></a> <a
                                        href="blog">Dec, 24</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                            <div class="post-img">
                                <a href="post.html">
                                    <div class="img"> <img src="images/blog/2.jpg" alt=""> </div>
                                </a>
                            </div>
                            <div class="cont">
                                <h4><a href="post.html">Luxury kitchen ideas</a></h4>
                                <div class="info"> <a href="blog"><span>Interior Design</span></a> <a
                                        href="blog">Dec, 21</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                            <div class="post-img">
                                <a href="post.html">
                                    <div class="img"> <img src="images/blog/3.jpg" alt=""> </div>
                                </a>
                            </div>
                            <div class="cont">
                                <h4><a href="post.html">Home Decorating Inspiration</a></h4>
                                <div class="info"> <a href="blog"><span>Interior Design</span></a> <a
                                        href="blog">Dec, 18</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--Project Count-->
        <section class="statistics section-padding">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3">
                        <div class="counter">
                            <span class="count" data-target="30">0</span><span>+</span>
                            <p>Clients</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter">
                            <span class="count" data-target="50">0</span><span>+</span>
                            <p>Projects</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter">
                            <span class="count" data-target="5">0</span><span>+</span>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter">
                            <span class="count" data-target="100">0</span><span>+</span>
                            <p>Workers</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--What We do-->
        <section class="services section-padding">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="sub-title border-bot-light">What We Do?</div>
                    </div>
                    <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                        <div class="section-title">How <span>We Work?</span></div>
                        <p>Every project at AAMUKH begins with a careful reading of the site's story. its character , history and surroundings. This deep contextual understanding shapes our design decisions ensuring that each space we craft is authentic , relevant and timeless. We blend contemporary expression with sensitivity to the past creating designs that are both progressive and grounded.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="WhatWedo-item custom-WhatWedo-item">
                            <div class="WhatWedo-icon">
                                <!-- Architecture icon (SVG) -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="none" stroke="#333"
                                    stroke-width="2" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24">
                                    <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                                    <path d="M2 17l10 5 10-5"></path>
                                    <path d="M2 12l10 5 10-5"></path>
                                </svg>
                            </div>
                            <h4 class="WhatWedo-title">Design & Documentation</h4>
                            <p>AAMUKH ARCHITECTS turn your vision into detailed , build-ready designs. whether it's a flat , bungalow or commercial space. Our Ahmedabad based team blends aesthetics , functionality and innovation to deliver timeless architecture. From concept to construction , we ensure clarity through meticulous documentation. Experience your space in advance with immersive VR walkthroughs. Every detail is thoughtfully crafted to match your needs and exceed expectations.</p>                    
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="WhatWedo-item custom-WhatWedo-item">
                            <div class="WhatWedo-icon">
                                <!-- Interior Design icon (SVG) -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="none" stroke="#333"
                                    stroke-width="2" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24">
                                    <path d="M9 7h6v6H9z"></path>
                                    <path d="M12 14v7"></path>
                                    <path d="M5 20h14"></path>
                                    <path d="M5 7h14"></path>
                                    <path d="M5 7l7-5 7 5"></path>
                                </svg>
                            </div>
                            <h4 class="WhatWedo-title">Execution & Supervision</h4>
                            <p>AAMUKH ARCHITECTS go beyond design offering comprehensive execution and turnkey project solutions ,  that bring your vision to life with precision. Our professional supervision ensures seamless coordination , quality control and on-time delivery. making the journey from concept to completion efficient and stress-free With a sharp eye for detail and a commitment to excellence. we help you realize your dream space exactly as envisioned.</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="WhatWedo-item custom-WhatWedo-item">
                            <div class="WhatWedo-icon">
                                <!-- Landscape Design icon (SVG) -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="none" stroke="#333"
                                    stroke-width="2" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24">
                                    <path d="M3 10h18"></path>
                                    <path d="M3 14h18"></path>
                                    <path d="M12 7c-3 3-6 0-9 3h18c-3-3-6 0-9-3z"></path>
                                </svg>
                            </div>
                            <h4 class="WhatWedo-title">Building Redevelopment</h4>
                            <p>Redevelopment is about reviving aging structures and transforming them to meet today's lifestyle , safety and structural standards. At AAMUKH ARCHITECTS we reimagine existing buildings through thoughtful design , efficient planning and modern construction techniques. ensuring spaces are not only safer but more valuable and functional for their users. Led by experienced architects in Ahmedabad. we turn outdated buildings into renewed And future-ready spaces that enhance both comfort and community.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sevices Section -->
        <section class="services section-padding">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="sub-title border-bot-light">Discover</div>
                    </div>
                    <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                        <div class="section-title">Our <span>Services</span></div>
                        <h4 class="our-sub-title">Our Process</h4>
                        <p>- ARCHITECTS offer end-to-end design services from concept to completion. Our process is structured
                            into four well-defined phases to ensure clarity , creativity and complete alignment with your vision.</p>
                    
                        <h5>1.Discover & Define</h5>
                        <p>- We begin with a consultation where we listen to your goals , understand your space and access your
                            budget. This meeting allows us to align expectations , explore possibilities and determine whether we're the
                            right fit for each other before moving forward.</p>
                    
                        <h5>2.Concept Design & Proposal</h5>
                        <p>- Once aligned our design team develops initial concepts tailored to your needs. We present layout
                            options , material palettes and early cost estimates to give you a tangible sense of direction.</p>
                        <ul class="custom-bullet">
                            <li>Conceptual Layouts And Visualizations</li>
                            <li>Theme Development</li>
                            <li>Furniture , Fixture And Material Options</li>
                            <li>Preliminary Project Budget</li>
                        </ul>
                        <p>- After your approval we finalize timelines , agreements and move toward the next stage.</p>
                    
                        <h5>3.Design Finalization & Detailing</h5>
                        <p>- With design approval in place , we conduct detailed site measurements and photography. We then refine the design
                            with technical precision , working on elevations , working drawings and 3D views to ensure everything aligns with
                            your lifestyle and functional needs.</p>
                        <p>- You'll also receive curated selections for:</p>
                        <ul class="custom-bullet">
                            <li>Materials , Finishes , Furniture</li>
                            <li>Trusted Vendors And Contractors</li>
                        </ul>
                        <p>- phase ensures that your design is not just beautiful but buildable.</p>
                    
                        <h5>4.Execution & Handover</h5>
                        <p>- As the project moves into construction , we stay hands on , coordinating with contractors , fabricators and
                            suppliers to maintain quality and timelines. Our team remains committed throughout ensuring your space comes to
                            life just as envisioned.</p>
                        <p>- From the very first sketch to the final handover we stay by your side making the journey seamless and
                            rewarding.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="row justify-content-center">
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="service-item">
                                <img src="images/slider/10.jpg" alt="Architecture" class="service-img">
                                <h4 class="service-title">Architectural Design</h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="service-item">
                                <img src="images/slider/3.jpg" alt="Interior Design" class="service-img">
                                <h4 class="service-title">Interior Design</h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="service-item">
                                <img src="images/slider/7.jpg" alt="Furniture & Art" class="service-img">
                                <h4 class="service-title">Landscape Design</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Client Logos Section -->
        <section class="client-logos section-padding">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <div class="sub-title border-bot-light">Creative Thinkers</div>
                    </div>
                    <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                        <div class="section-title">Our Provisions</div>
                    </div>
                </div>
                <div class="swiper our-provisions-swiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="our-provisions-row justify-content-center">
                        <!-- 15 logo cards for first slide -->
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/1-Araldite.png" alt="Araldite Logo" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Araldite</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/2-Fevicol bluecoat.jpg" alt="Bluecoat Logo" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Bluecoat</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/3-Fevicol EURO.png" alt="Euro Logo" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Euro</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/4-Fevicol Marine.jpg" alt="Marine Logo" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Marine</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/5-Pidilite Industries.png" alt="Pidilite Logo" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Pidilite</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/6-ASIAN_PAINTS-removebg-preview.png" alt="Asian Paints Logo" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Asian Paints</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/7-NEROLAC PAINT.png" alt="Nerolac Paints Logo" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Nerolac Paints</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/8-Dr-fixit Pidilite Construction Chemicals.jpeg.jpg" alt="Dr-Fixit Logo" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Dr-Fixit</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/9-Gujarat Tiles & Marble.png" alt="Gujarat Tiles Logo" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Gujarat Tiles</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/10-Kajaria Ceramics.png" alt="Kajaria Ceramics Logo" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Kajaria Ceramics</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/11-Lioli Ceramic.jpg" alt="Lioli Ceramic Logo" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Lioli Ceramic</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/12-Somany Ceramics.png" alt="Somany Ceramics Logo" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Somany Ceramics</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/13-Havells.png" alt="Havells Logo" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Havells</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/14-RR Cable.png" alt="RR Cable Logo" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">RR Cable</div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="our-provisions-row justify-content-center">
                        <!-- 10 logo cards for second slide -->
                        <div class="col-5-custom">
                            <div class="client-logo-card logo-animate flex-column align-items-center">
                                <div class="client-logo-circle mb-2">
                                    <img src="images/OURCLIENT/15-CenturyPly.png" alt="CenturyPly Logo" class="client-logo-img">
                                </div>
                            </div>
                            <div class="client-logo-name">CenturyPly</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/16-Duroply Industries.jpg" alt="Duroply Logo" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Duroply</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/17-Greenply Industries.png" alt="Greenply Logo" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Greenply</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/18-Merino Laminates.png" alt="Merino Logo" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Merino</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/19-Euro Mica.jpg" alt="Euro Mica Logo" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Euro Mica</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/20-Formica India.jpg" alt="Formica India Logo" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Formica India</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/21-Royal Touche.jpg" alt="Royal Touche Logo" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Royal Touche</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/22-Sunmica.jpg" alt="Sunmica Logo" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Sunmica</div>
                        </div>

                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/Bell-Logo.png" alt="Bell Laminate" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Bell Laminate</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/brand-01.png" alt="Shine Mica Laminate" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Shine Mica Laminate</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/brand5.jpg" alt="Woodline Laminate" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Woodline Laminate</div>
                        </div>
                        <div class="col-5-custom">
                          <div class="client-logo-card logo-animate flex-column align-items-center">
                            <div class="client-logo-circle mb-2">
                              <img src="images/OURCLIENT/nelson.jpg" alt="Nelson Laminate" class="client-logo-img">
                            </div>
                          </div>
                          <div class="client-logo-name">Nelson Laminate</div>
                        </div>
                        <!-- Add up to 3 more logos in the same structure if needed -->
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End Client Logos Section -->
        <!-- Lets Talk -->
        <section class="lets-talk">
            <div class="background bg-img bg-fixed section-padding" data-background="images/slider/1.jpg"
                data-overlay-dark="6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-30">
                            <div class="sub-title border-bot-dark">Contact Us</div>
                        </div>
                        <div class="col-md-8">
                            <div class="section-title">Let's discuss your project</div>
                            <p>Fill out the form and our manager will contact you for consultation.</p>
                            <form method="post" class="contact__form" action="mail.php">
                                <!-- Form message -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                            Your message was sent successfully.
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- Form elements -->
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input class="line-gray" name="name" type="text" placeholder="Full Name *" required>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <input class="line-gray" name="phone" type="text" placeholder="Phone *" required>
                                    </div>
                                    <div class="col-md-2">
                                        <input class="line-gray" name="submit" type="submit" value="Send">
                                    </div>
                                </div>
                            
                                <!-- New row: Property Type -->
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="propertyType">What Are You Looking For?</label>
                                        <select class="form-control line-gray" name="propertyType" id="propertyType" required>
                                            <option value="">Select an option</option>
                                            <option value="job">Looking for a Job?</option>
                                            <option value="internship">Looking for an Internship?</option>
                                            <option value="materials">Want to Discuss Materials?</option>
                                            <option value="ARCHITECTURAL DESIGN">ARCHITECTURAL DESIGN</option>
                                            <option value="LANDSCAPE DESIGN">LANDSCAPE DESIGN</option>
                                            <option value="INDUSTRIAL DESIGN">INDUSTRIAL DESIGN</option>
                                            <option value="HOSPITALITY PROJECTS">HOSPITALITY PROJECTS</option>
                                            <option value="INTERIOR DESIGN">INTERIOR DESIGN</option>
                                            <option value="RESIDENTIAL PROJECTS">RESIDENTIAL PROJECTS</option>
                                            <option value="COMMERCIAL PROJECTS">COMMERCIAL PROJECTS</option>
                                            <option value="GOVT. PROJECTS">GOVT. PROJECTS</option>
                                            <option value="PROJECT MANAGEMENT">PROJECT MANAGEMENT</option>
                                            <option value="M.E.P. DESIGN & CONSULTANCY">M.E.P. DESIGN & CONSULTANCY</option>
                                            <option value="CONSTRUCTION">CONSTRUCTION</option>
                                            <option value="AGENCY PROVISION">AGENCY PROVISION</option>
                                            <option value="TURNKEY AGENCY COLLABORATION">TURNKEY AGENCY COLLABORATION</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input class="line-gray" name="reachUs" type="text" placeholder="How did you reach us? (optional)" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-3">
                                        <input type="checkbox" class="line-gray" name="agree" required>
                                        <label for="agree">I agree with the <a href="#0" class="underline line-gray">privacy policy</a></label>
                                    </div>
                                </div>
                                <div class="consultation-charges">
                                    <strong>CONSULTATION CHARGES</strong><br>
                                    <ul class="custom-bullet-white">
                                        <li>Site Visit – ₹1000 (INR)</li>
                                        <li>Detailed Quotation – ₹1000 (INR)</li>
                                        <li>Meeting Charge – ₹1000 (INR)</li>
                                    </ul>
                                    <small>Note: Charges are subject to Ahmedabad & Rajkot jurisdiction only.</small>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <SCript>
                document.addEventListener('DOMContentLoaded', () => {
        const swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            slidesPerGroup: 1,
            spaceBetween: 10,
            loop: true,
            loopAdditionalSlides: 4,
            loopedSlides: 5,
            speed: 1000,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
                pauseOnMouseEnter: false,
            },
            watchSlidesProgress: true,
            watchSlidesVisibility: true,
            breakpoints: {
                992: { slidesPerView: 4, slidesPerGroup: 1, spaceBetween: 10 },
                768: { slidesPerView: 2, slidesPerGroup: 1, spaceBetween: 8 },
                576: { slidesPerView: 1, slidesPerGroup: 1, spaceBetween: 5 },
            }
        });

        swiper.on('slideChangeTransitionEnd', () => {
            if (!swiper.autoplay.running) {
                swiper.autoplay.start();
            }
        });

        // Our Provisions Swiper
        new Swiper('.our-provisions-swiper', {
            slidesPerView: 1,
            spaceBetween: 0,
            pagination: {
                el: '.our-provisions-swiper .swiper-pagination',
                clickable: true,
            },
            allowTouchMove: true,
            loop: false,
        });
    });

        </SCript>
 <?php
    include __DIR__ . '/A_Layout/Footer/footer.php';
?>