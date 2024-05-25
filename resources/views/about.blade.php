@php($title = "Best Orthopaedic & Joint Replacement Surgeon in Navi Mumbai")
@section('meta_desc')Dr. Dhruv Patel is the best Orthopaedic, Joint Replacement, Arthroscopic & Trauma Surgeon in Navi Mumbai, Vashi & Belapur committed to improve the lives of patients. @endsection

@section('meta_keywords')Best Orthopedic doctor in Navi mumbai, Best Orthopaedic doctor in Navi Mumbai, best joint replacement doctor in Navi Mumbai, Best arthroscopy doctor in Navi Mumbai, best arthroscopic doctor in Navi Mumbai, best Trauma and Fracture surgery doctor in Navi Mumbai, best spine surgery doctor in Navi Mumbai, best joint pain doctor in Navi Mumbai, best arthritis doctor in navi mumbai, best sport injury doctor in navi mumbai, best sport injuries doctor in navi mumbai, Best Orthopedic surgeon in Navi mumbai, Best Orthopaedic surgeon in Navi Mumbai, best joint replacement surgeon in Navi Mumbai, Best arthroscopy surgeon in Navi Mumbai, best arthroscopic surgeon in Navi Mumbai, best Trauma and Fracture surgery surgeon in Navi Mumbai, best spine surgery surgeon in Navi Mumbai, best joint pain surgeon in Navi Mumbai, best arthritis surgeon in navi mumbai, best sport injury surgeon in navi mumbai, best sport injuries surgeon in navi mumbai,
Best Orthopedic doctor in Vashi, Best Orthopaedic doctor in Vashi, best joint replacement doctor in Vashi, Best arthroscopy doctor in Vashi, best arthroscopic doctor in Vashi, best Trauma and Fracture surgery doctor in Vashi, best spine surgery doctor in Vashi, best joint pain doctor in Vashi, best arthritis doctor in Vashi, best sport injury doctor in Vashi, best sport injuries doctor in Vashi, Best Orthopedic surgeon in Vashi, Best Orthopaedic surgeon in Vashi, best joint replacement surgeon in Vashi, Best arthroscopy surgeon in Vashi, best arthroscopic surgeon in Vashi, best Trauma and Fracture surgery surgeon in Vashi, best spine surgery surgeon in Vashi, best joint pain surgeon in Vashi, best arthritis surgeon in Vashi, best sport injury surgeon in Vashi, best sport injuries surgeon in Vashi, Best Orthopedic doctor in Belapur, Best Orthopaedic doctor in Belapur, best joint replacement doctor in Belapur, Best arthroscopy doctor in Belapur, best arthroscopic doctor in Belapur, best Trauma and Fracture surgery doctor in Belapur, best spine surgery doctor in Belapur, best joint pain doctor in Belapur, best arthritis doctor in Belapur, best sport injury doctor in Belapur, best sport injuries doctor in Belapur, Best Orthopedic surgeon in Belapur, Best Orthopaedic surgeon in Belapur, best joint replacement surgeon in Belapur, Best arthroscopy surgeon in Belapur, best arthroscopic surgeon in Belapur, best Trauma and Fracture surgery surgeon in Belapur, best spine surgery surgeon in Belapur, best joint pain surgeon in Belapur, best arthritis surgeon in Belapur, best sport injury surgeon in Belapur, best sport injuries surgeon in Belapur @endsection 
@section('meta_tags')
    <meta name="keywords" content="@yield('meta_keywords')">
  <meta name="description" content="@yield('meta_desc')">
@endsection

@extends('layouts.default')
@section('content')


 

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/orthopedic-banner.jpg)">
            <div class="auto-container">
                <h1>About</h1>
                <!-- <ul class="page-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>About</li>
                </ul> -->
            </div>
        </section>
        <!--End Page Title-->

        <!--About Section-->
        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">
 <div class="image-column col-md-5 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <div class="image">
                                <img src="{{ asset('/resources/assets/images/about/about-page-img.png') }}" alt="Dr. Dhruv Patel, Orthopaedic, Joint Replacement, Arthroscopic & Trauma Surgeon and his team operating orthopaedic surgeries in operation theatre in Navi Mumbai." />
                            </div>
                        </div>
                    </div>
                    <!--Content Column-->
                    <div class="content-column col-md-7 col-sm-12 col-xs-12">
                        <div class="sec-title">
                            <h1 class="doc-name1">  Dr. Dhruv Patel</h1>
                             <ul class="degree--list">
                                <li><i class="fa-solid fa-angles-right"></i> MBBS, MS Ortho, D. Ortho</li>
                                <li><i class="fa-solid fa-angles-right"></i> Consultant Orthopaedic & Joint Replacement Surgeon</li>
                                <li><i class="fa-solid fa-angles-right"></i> Arthroscopic & Trauma Surgeon in Navi Mumbai</li>
                                
                            </ul>
                            <!--<h2>MBBS, MS Ortho, D. Ortho-->
                            <!--    <br> Consultant Orthopaedic & Joint Replacement Surgeon <br>Arthroscopic & Trauma Surgeon in Navi Mumbai-->
                            <!--</h2>-->
                        </div>
                        <!-- <div class="large-text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur</div> -->
                        <div class="text">
                            <p> Dr. Dhruv Patel is a highly skilled and dedicated Consultant Orthopaedic & Joint Replacement Surgeon, specializing in arthroscopic procedures and trauma surgery. With over 8 years of invaluable experience in the field, Dr. Patel has emerged as a trusted and compassionate healthcare professional, committed to improving the lives of his patients.</p>
                            
                            <p>Dr. Patel's educational journey reflects his unwavering dedication to the medical profession. He completed his MBBS degree at RCSM Government Medical College, Kolhapur, in 2007, marking the beginning of his pursuit of excellence in the field of medicine. Driven by a deep passion for orthopaedics, he embarked on a journey of specialization, obtaining his MS Orthopaedics degree from Yerevan State Medical University, Armenia, in 2015. This international exposure not only broadened his horizons but also equipped him with a global perspective on orthopaedic care. In 2017, he further honed his skills by acquiring a D Ortho qualification from the prestigious College of Physicians and Surgeons in Mumbai.</p>
                            <!--<p>Throughout his career, Dr. Patel has consistently demonstrated a commitment to staying at the forefront of medical advancements. His expertise encompasses a wide range of orthopaedic procedures, with a particular focus on arthroscopy and trauma surgery. Patients can trust in his comprehensive knowledge and skillful hands to deliver the highest quality care, whether they require joint replacements, arthroscopic interventions, or trauma-related treatments.</p>-->
                           
                                 <div class="about-btn">
                        <a href="{{ route('book-appointment')}}">Book An Appointment</a>
                         </div>



                        </div>

                    </div>
                    <div class="about-extra-content">
                    
                    
                    <!--<ul class="list-style-one treatment-content">-->
                    <!--                        <h2>Indications for Joint Replacement Surgery : </h2>-->
                    <!--                    	<li><span>Osteoarthritis :</span> The most common reason for joint replacement surgery, where the joint's cartilage gradually wears away.</li>-->
                                          
                    <!--                        <li><span>Rheumatoid arthritis       :</span> A chronic inflammatory condition that affects the joints.</li>-->
                                            
                    <!--                    <li><span>Traumatic injury : </span> Severe joint injuries, such as fractures or dislocations, may require joint replacement.</li>-->
                                        
                    <!--                     <li><span>Other conditions : </span>  Joint replacements can also be necessary for conditions like avascular necrosis, ankylosing spondylitis, and severe joint deformities.</li>-->
                    <!--                     </ul>-->
                    
                    <!--<p>Beyond his exceptional medical qualifications, Dr. Patel is known for his compassionate approach to patient care. He understands the physical and emotional challenges that orthopaedic conditions can present and strives to provide personalized, patient-centered care. Dr. Patel believes in open communication, ensuring that patients fully understand their conditions, treatment options, and recovery processes.</p>-->
                    <!--        <p>As a Consultant Orthopaedic & Joint Replacement Surgeon, Dr. Dhruv Patel's mission is to restore mobility and enhance the quality of life for his patients. His dedication to excellence, combined with his extensive experience and unwavering commitment to compassionate care, make him a trusted name in the field of orthopaedics. Dr. Patel's patients can be confident that they are in capable and caring hands, receiving the best possible orthopaedic treatment and surgical expertise.</p>-->
                    <!--        <p>Presently, Dr. Dhruv Patel stands as a compassionate orthopedic specialist in Navi Mumbai, specializing in joint replacement, arthroscopy, spine surgery, and sports injury treatments. Serving as a beacon of hope, he goes beyond medical expertise, offering genuine care to those in Vashi and Belapur.  </p>-->
                     </div>
                    
                    <!--Image Column-->
                   

                </div>
            </div>
        </section>
        <!--End About Section-->



<!--Specailization-->
<div class="container">
    <div class="about-heading">
                    <h1 class="title">Specializations</h1>
                    <hr>
                </div>
    <div class="row">
  <div class="col-md-4">
    <a class="card2" href="{{route('arthroscopy_surgery')}}">
        <h3>Arthroscopic Procedures</h3>

        <div class="go-corner" href="{{route('arthroscopy_surgery')}}">
            <div class="go-arrow">
                →
            </div>
        </div>
    </a>
</div>
  <div class="col-md-4">
    <a class="card2" href="{{route('trauma_fracture_surgery')}}">
        <h3>Trauma surgery</h3>

        <div class="go-corner" href="{{route('trauma_fracture_surgery')}}">
            <div class="go-arrow">
                →
            </div>
        </div>
    </a>
</div>
  <div class="col-md-4">
    <a class="card2" href="{{route('joint_replacement_surgery')}}">
        <h3>Joint replacement</h3>

        <div class="go-corner" href="{{route('joint_replacement_surgery')}}">
            <div class="go-arrow">
                →
            </div>
        </div>
    </a>
</div>

  <div class="col-md-4">
    <a class="card2" href="{{route('spine_surgery')}}">
        <h3>Spine surgery</h3>

        <div class="go-corner" href="{{route('spine_surgery')}}">
            <div class="go-arrow">
                →
            </div>
        </div>
    </a>
</div>

  <div class="col-md-4">
    <a class="card2" href="{{route('sports_injuries')}}">
        <h3>Sports injury treatments</h3>

        <div class="go-corner" href="{{route('sports_injuries')}}">
            <div class="go-arrow">
                →
            </div>
        </div>
    </a>
</div>

  <div class="col-md-4">
    <a class="card2" href="{{route('knee-replacement')}}">
        <h3>Knee & Hip Replacement Surgery</h3>

        <div class="go-corner" href="{{route('hip-replacement')}}">
            <div class="go-arrow">
                →
            </div>
        </div>
    </a>
</div>
  </div>
  </div>
<!--Specailization end-->

        <!-- qulification area  -->


        <section class="education-set">
            <div class="container">
                <div class="about-heading">
                    <h1 class="title">Education & Qualification</h1>
                    <hr>
                </div>
                <div class="about-txt">
                    <ul>
                        <!--<li style="--accent-color:#41516C">-->
                        <!--    <div class="date">10th</div>-->
                        <!--    <div class="title">CBSE Board, Maharashtra Agrasen Vidyalaya, Ahmedabad, Gujarat</div>-->
                        
                        <!--</li>-->
                        <!--<li style="--accent-color:#FBCA3E">-->
                        <!--    <div class="date"> 12th </div>-->
                        <!--    <div class="title">Royal College of Arts, Science & Commerce, Mira Road, Mumbai</div>-->
                          
                        <!--</li>-->
                        <li style="--accent-color:#E24A68">
                            <div class="date">MBBS</div>
                            <div class="title"> <span> 2003 : 2007</span>       <p>RCSM Government Medical College, Kolhapur</p></div>

                     
                      
                            <!-- <div class="descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga minima consequuntur soluta placeat iure totam commodi repellendus ea delectus, libero fugit quod reprehenderit, sequi quo, et dolorum saepe nulla hic.</div> -->
                        </li>
                        <li style="--accent-color:#1B5F8C">
                            <div class="date"> MS (Ortho)</div>
                            <div class="title"><span> 2012 : 2015 </span> <p>Yerevan State Medical University (Fulltime 3 Year Course), Armenia </p> </div>
                            <!-- <div class="descr">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit, cumque.</div> -->
                        </li>
                        <li style="--accent-color:#4CADAD">
                            <div class="date">D Ortho</div>
                            <div class="title"><span>2015 : 2017 </span> <p> College of Physicians & Surgeon, Mumbai</p></div>
                            <!-- <div class="descr">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, non.</div> -->
                        </li>
                    </ul>
              
                </div>
            </div>
        </section>

        <!-- qulification area  -->
        
        
        <!--approch-mission-experience-->
     <!--<div class="about-heading">-->
     <!--               <h1 class="title">Education & Qualification</h1>-->
     <!--               <hr>-->
     <!--           </div>-->
     
     <section class="approch-set">
<div class="container">
  <div class="row">

    <div class="col-md-4">
      <div class="main">
        <div class="service">
          <div class="service-logo">
            <img src="{{ asset('/resources/assets/images/icons/experience-icon.png') }}">
          </div>
       
          <h4>Experience</h4>
         
                    <ul class="list-style-one treatment-content">
                      <li>Over 8 years of experience in orthopaedics.</li>
                      <li>Extensive expertise in a wide range of orthopaedic procedures.</li>
                      <li>Known for staying abreast of the latest medical advancements.</li>
                                            </ul>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="main">
        <div class="service">
          <div class="service-logo">
            <img src="{{ asset('/resources/assets/images/icons/patient-care.png') }}">
          </div>
          <h4>Approach to Patient Care</h4>
              <ul class="list-style-one treatment-content">
            
                      <li>Compassionate and patient-centered care.</li>
                      <li>Emphasis on open communication and patient education.</li>
                      <li>Understanding of the physical and emotional challenges faced by patients.</li>
                     
                                            </ul>
          
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="main">
        <div class="service">
          <div class="service-logo">
            <img src="{{ asset('/resources/assets/images/icons/mission-icon.png') }}">
          </div>
          <h4>Mission</h4>
          
        


              <ul class="list-style-one treatment-content">
            
                      <li>Restore mobility and enhance quality of life for patients.</li>
                      <li>Dedicate to excellence and unwavering commitment to compassionate care.</li>
                      <li>Provide genuine care and hope to patients in Vashi and Belapur.</li>
                     
                                            </ul>
        
        </div>
      </div>
    </div>
  </div>
</div>
    </section>
        <!--approch-mission-experience end-->
        <!--Main Footer-->
@stop