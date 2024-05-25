@extends('layouts.default')
@section('content')

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/orthopedic-banner.jpg)">
            <div class="auto-container">
                <h1>JOINT PAIN</h1>
                <!-- <ul class="page-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li>Knee Replacement Surgeon </li>
                </ul> -->
            </div>
        </section>
        <!--End Page Title-->

        <!--Sidebar Page Container-->
        <div class="sidebar-page-container service-page">
            <div class="auto-container">
                <div class="row clearfix">



                    <!--Content Side-->
                    <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <div class="services-single">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="images/treatments/joint-pain-t.jpg" alt="" />
                                </div>
                                <h2>JOINT PAIN</h2>

                                <div class="text">
                                  
                                </div>

                            </div>
                        </div>
                    </div>




                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <aside class="sidebar default-sidebar">

                            <!--Blog Category Widget-->
                                    
                                       @include('includes.categories')

                        </aside>
                    </div>

                </div>
            </div>
        </div>
@stop