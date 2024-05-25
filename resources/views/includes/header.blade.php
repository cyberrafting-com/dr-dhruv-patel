<header class="main-header">
    <div class="header-top">
        <div class="auto-container ">
            <div class="clearfix">

                <!--Top Left-->
                <div class="top-left">
                    <ul class="links clearfix">
                        <li><a href="tel:+919167116802"><span class="icon flaticon-technology-1"></span>+91-9167116802
                                /</a><a href="tel:+919987791991">&nbsp;+91-9987791991</a></li>
                        <!--<li></li>-->
                        <li><a href="mailto:drdhruvpatelsorthocareclinic@gmail.com"><span
                                    class="icon flaticon-envelope-1"></span> drdhruvpatelsorthocareclinic@gmail.com</a>
                        </li>

                        <li><a href="https://www.instagram.com/drdhruv_patel/"><i class="fa-brands fa-instagram"
                                    target="_blank"></i></a>

                            &nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/DrDhruvPatelOrthoCareClinic"
                                target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                        <!--<li class="appointment-set"><a href="{{ route('book-appointment') }}">Book An Appointment</a></li>-->


                    </ul>
                    <!-- <div class="social-icon">-->
                    <!--    <ul class="clearfix">-->
                    <!--        <li><span class="add-header"><a href="https://maps.app.goo.gl/UKDspEyFMx7MkzMy9" target="_blank"><i class="fa-solid fa-location-dot"></i> Arti Polyclinic, Sector 2, Vashi, Navi Mumbai, Maharashtra 400703</a></span></li>-->
                    <!--<li><a href="#"><span class="fa fa-linkedin"></span></a></li>-->
                    <!--<li><a href="#"><span class="fa fa-twitter"></span></a></li>-->

                    <!--    </ul>-->
                    <!--</div>-->
                </div>

                <!--Top Right-->
                <!--<div class="top-left top-right clearfix">-->
                <!--     <ul class="links clearfix">-->
                <!--        <li><a href="tel:+919167116802"><span class="icon flaticon-technology-1"></span>+91 9167116802</a></li>-->
                <!--        <li><a href="mailto:drdhruvpatel1741@gmail.com"><span class="icon flaticon-envelope-1"></span> drdhruvpatel1741@gmail.com</a></li>-->
                <!--    </ul>-->
                <!--</div>-->

            </div>

        </div>
    </div>

    <!-- Main Box -->
    <div class="main-box">
        <div class="auto-container main-head">
            <div class="outer-container clearfix">
                <!--Logo Box-->

                <div class="row">
                    <div class="col-md-4">
                        <div class="logo-box">
                            <div class="logo">
                                <a href="{{ route('home') }}"><img style="width:88%"
                                        src="{{ asset('/resources/assets/images/logo.png') }}"
                                        alt="Dr. Dhruv Patel, MBBS, MS Ortho, D. Ortho, Consultant Orthopaedic & Joint Replacement Surgeon, Arthroscopic & Trauma Surgeon in Navi Mumbai, Vashi & Belapur"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <!--Btn Outer-->
                        <!-- <div class="btn-outer">
                        <a href="contact.html" class="theme-btn btn-style-one">Book Appointment</a>
                    </div> -->

                        <!--Nav Outer-->
                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="{{ route('home') }}">Home</a>
                                            <!-- <ul>
                                            <li><a href="index.html">Homepage Default</a></li>
                                            <li><a href="index-2.html">Home version 2</a></li>
                                            <li><a href="index-3.html">Home version 3</a></li>
                                            <li class="dropdown"><a href="#">Header Styles</a>
                                                <ul>
                                                    <li><a href="index.html">Header Style One</a></li>
                                                    <li><a href="index-2.html">Header Style Two</a></li>
                                                    <li><a href="index-3.html">Header Style Three</a></li>
                                                </ul>
                                            </li>
                                        </ul> -->
                                        </li>
                                        <li class=""><a href="{{ route('about') }}">About Doctor</a>

                                        </li>
                                        <li class="dropdown custom open"><a href="#" class="dropdown-toggle"
                                                data-toggle="dropdown">Treatments</a>
                                            <ul class="dropdown-menu">
                                                <!-- <li><a href="joint-replacement-surgery.php">Joint Replacement Surgery</a></li>
                <li><a href="arthroscopy-surgery.php">Arthroscopy Surgery</a></li>
                <li><a href="trauma-fracture-surgery.php">Trauma And Fracture Surgery</a></li>
                <li><a href="spine-surgery.php">Spine Surgery</a></li>-->
                                                <li><a href="{{ route('knee-replacement') }}">Knee Replacement </a></li>
                                                <li><a href="{{ route('hip-replacement') }}">Hip Replacement </a></li>

                                                <li><a href="{{ route('joint_replacement_surgery') }}">Joint Replacement
                                                        Surgery</a></li>
                                                <!-- <li><a href="{{ route('joint_pain') }}">Joint Pain </a></li> -->
                                                <li><a href="{{ route('arthroscopy_surgery') }}">Arthroscopy Surgery</a>
                                                </li>
                                                <li><a href="{{ route('trauma_fracture_surgery') }}">Trauma And
                                                        Fracture Surgery</a></li>

                                                <li><a href="{{ route('spine_surgery') }}">Spine Sugery</a></li>
                                                <li><a href="{{ route('joint_pain_clinic') }}">Joint Pain Clinic</a>
                                                </li>


                                                <!--<li><a href="{{ route('trauma_fracture_surgery') }}">Trauma And Fracture Surgery</a></li>-->


                                                <li><a href="{{ route('sports_injuries') }}">Sports Injuries</a></li>

                                                <!--<li><a href="pain-management-clinic.php">Pain Management Clinic</a></li>-->

                                            </ul>
                                        </li>

                                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                        <li><a href="{{ route('clinic') }}">Clinic</a></li>
                                        <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
                                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                        <!--<li><a href="{{ route('book-appointment') }}" class="btn-book-header">Book an Appointment</a></li>-->


                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->

                        </div>
                        <!--Nav Outer End-->
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
