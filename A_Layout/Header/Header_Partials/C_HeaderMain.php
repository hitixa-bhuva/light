<?php
$page = basename($_SERVER["PHP_SELF"]);
echo '
   
<body>
    <div class="content-wrapper">
        <!-- Preloader -->
        <div class="preloader-bg"></div>
        <div id="preloader">
            <div id="preloader-status">
                <div class="preloader-position loader"> <span></span> </div>
            </div>
        </div>
        <!-- Progress scroll totop -->
        <div class="progress-wrap cursor-pointer">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
            </svg>
        </div>
        <!-- Lines -->
        <div class="content-lines-wrapper">
            <div class="content-lines-inner">
                <div class="content-lines"></div>
            </div>
        </div>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo -->
                <div class="logo-wrapper">
                    <a class="logo" href="home"> <img src="images/logo.png" class="logo-img" alt=""> </a>
                </div>
                <!-- Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="ti-menu"></i></span> </button>
                <!-- Menu -->
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about-us">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="awards.html">Happy Clients</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
			
';
?>
