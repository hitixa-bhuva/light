
<?php
   $Title = "";
   $MetaDescription = "";
   $MetaKeywords = "";
?>

<?php
   include __DIR__ . '/A_Layout/Header/header.php';
?>
        <!-- Header Banner -->
        <div class="banner-header valign bg-img bg-fixed" data-overlay-dark="4" data-background="images/slider/1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 caption mt-60">
                        <div class="subtitle">Client Experiences</div>
                        <div class="title">Happy Clients</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Image Gallery -->
        <section class="section-padding">
            <div class="container">
                <div class="row mb-5 animate-box" data-animate-effect="fadeInUp">
                    <div class="col-md-4">
                        <div class="sub-title border-bot-light">Happy Clients</div>
                    </div>
                    <div class="col-md-8">
                        <div class="section-title"><span>Happy </span>Clients</div>
                        <p>Our clients’ satisfaction is at the heart of everything we do. From concept to completion, we ensure every detail reflects their vision and enhances their experience. Through thoughtful architecture and personalized design, we've built lasting relationships grounded in trust, creativity, and excellence.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 gallery-item animate-box" data-animate-effect="fadeInUp">
                        <a href="images/TESTI/IMG_6193.jpg" title="Image Gallery" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="images/TESTI/IMG_6193.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail text-center"> <i class="ti-fullscreen"></i> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 gallery-item animate-box" data-animate-effect="fadeInUp">
                        <a href="images/TESTI/IMG_9316.jpg" title="Image Gallery" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="images/TESTI/IMG_9316.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail text-center"> <i class="ti-fullscreen"></i> </div>
                            </div>
                        </a>
                    </div>
                    <!-- <div class="col-md-3 gallery-item animate-box" data-animate-effect="fadeInUp">
                        <a href="images/slider/3.jpg" title="Image Gallery" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="images/slider/3.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail text-center"> <i class="ti-fullscreen"></i> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 gallery-item animate-box" data-animate-effect="fadeInUp">
                        <a href="images/slider/4.jpg" title="Image Gallery" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="images/slider/4.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail text-center"> <i class="ti-fullscreen"></i> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 gallery-item animate-box" data-animate-effect="fadeInUp">
                        <a href="images/slider/5.jpg" title="Image Gallery" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="images/slider/5.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail text-center"> <i class="ti-fullscreen"></i> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 gallery-item animate-box" data-animate-effect="fadeInUp">
                        <a href="images/slider/5.jpg" title="Image Gallery" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="images/slider/5.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail text-center"> <i class="ti-fullscreen"></i> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 gallery-item animate-box" data-animate-effect="fadeInUp">
                        <a href="images/slider/5.jpg" title="Image Gallery" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="images/slider/5.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail text-center"> <i class="ti-fullscreen"></i> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 gallery-item animate-box" data-animate-effect="fadeInUp">
                        <a href="images/slider/5.jpg" title="Image Gallery" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="images/slider/5.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail text-center"> <i class="ti-fullscreen"></i> </div>
                            </div>
                        </a>
                    </div> -->
                </div>
            </div>
        </section>
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
     <?php
    include __DIR__ . '/A_Layout/Footer/footer.php';
?>