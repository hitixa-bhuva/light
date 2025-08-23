
<?php
   $Title = "";
   $MetaDescription = "";
   $MetaKeywords = "";
?>

<?php
   include __DIR__ . '/A_Layout/Header/header.php';
?>
        <!-- Header Banner -->
        <div class="banner-header valign bg-img bg-fixed" data-overlay-dark="4" data-background="images/slider/2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 caption mt-60">
                        <div class="subtitle">Contact</div>
                        <div class="title">Get in touch</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact -->
        <div class="contact section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!-- Contact Info -->
                        <h4 class="mb-4">Register <span>Office</span></h4>
                        <p>519 , RK EMPIRE , 150 Feet Ring Road, Near Mavdi Circle, Rajkot, Gujarat.</p>
                        <div class="phone">+91 73835 03293</div>
                        <div class="mail mb-3">aamukharchitects@gmail.com</div>
                        <div class="social mt-2"> 
                            <a href="index.html"><i class="ti-twitter"></i></a> 
                            <a href="index.html"><i class="ti-instagram"></i></a> 
                            <a href="index.html"><i class="ti-linkedin"></i></a> 
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Contact Info -->
                        <h4 class="mb-4">Working <span>Office</span></h4>
                        <p>B 13th Floor ,East Face ,Near Maruti Suzuki Showroom ,Vakil Bridge ,Bopal-Ambli road, South Bopal ,Ahmedabad.</p>
                        <div class="phone">+91 73835 03293</div>
                        <div class="mail mb-3">aamukharchitects@gmail.com</div>
                    </div>
                    <!-- form -->
                    <div class="col-lg-4 col-md-12">
                        <h4 class="mb-4">Have a Project? - <span>Lets Talk</span></h4>
                        <form method="post" class="contact__form" action="mail.php">
                            <!-- Form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
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
                                <div class="col-md-3 form-group">
                                    <input class="line-gray" name="reachUs" type="text" placeholder="How did you reach us? (optional)">
                                </div>
                                <div class="col-md-12 form-group">
                                    <input name="email" type="email" placeholder="Your Email *" required="">
                                </div>
                                <div class="col-md-12 form-group">
                                    <input name="subject" type="text" placeholder="Subject *" required="">
                                </div>
                                <div class="col-md-12 form-group">
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
                                <div class="col-md-12 form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required=""></textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <input name="submit" type="submit" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Maps -->
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14742.08424796229!2d72.5713625!3d23.022505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84fbb1466fa7%3A0xe0f3a70f6475c4a6!2sAhmedabad%2C%20Gujarat%2C%20India!5e0!3m2!1sen!2sin!4v1716042480000!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
        </div>
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