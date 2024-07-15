@php($title = "Book an Appointment with Dr. Dhruv Patel - Top Orthopaedic Doctor in Navi Mumbai")
@section('meta_desc')Book an appointment with Dr. Dhruv Patel, a leading orthopaedic doctor in Navi Mumbai, specializing in joint replacement, arthroscopic, and trauma surgeries. Contact us today! @endsection
@extends('layouts.default')
@section('content')

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <!--<h1 class="pbmit-tbar-title">Book an Appointment</h1>-->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Title Bar End-->

<!-- Page Content -->
<div class="page-content">

    <!-- Contact start -->
    <section class="contact-section">


        <div class="container">
            <section class="seccc">
                <div class="container ">
                    <div class="common-title">
                        <!--<h1 class="mb-20">Aashi Diagnostic Centre: Panvel, Navi Mumbai</h1>-->
                    </div>
                </div>
            </section>
            <div class="row  ">
                <div class="col-xl-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="contact-section_single ">
                        <!-- <h3 class="contact-heading-title">GET IN TOUCH</h3> -->

                        <div class="row d-flex justify-content-center">

                            <!-- form start -->
                            <div class="col-md-9 col-sm-12 col-xs-12 footer-area-text pt-10">
                                <div class="appointment-form single">

                                    <h2 class="text-center">Make an Appointment</h2> <br>

                                    @if(session('success'))
                                    <p style="color: green; font-size:18px;">{{ session('success') }}</p>
                                    @endif
                                    @if(session('error'))
                                    <p style="color: red; font-size:18px;">{{ session('error') }}</p>
                                    @endif
                                    <form method="post" action="{{ route('saveContact') }}">
                                        @csrf
                                        <input type="text" name="{{session('cr_honey')}}" style="display:none" />

                                        <!-- <input type="hidden" name="_token" value="6yZtcwjt9CWBBiyXoBSUOJ29ZCerBErWja5271YR"> -->

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group form-txt">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control form-control-lg" name="fname" aria-describedby="name" placeholder="First Name" value="">
                                                    @error('fname')
                                                    <p style="color: red;">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group form-txt">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control form-control-lg" name="lname" aria-describedby="name" placeholder="Last Name" value="">
                                                    @error('lname')
                                                    <p style="color: red;">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group form-txt">
                                                    <label>Email</label>
                                                    <input type="Email" class="form-control form-control-lg" name="mail" aria-describedby="Email" placeholder="Email Id" value="">
                                                    @error('mail')
                                                    <p style="color: red;">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group form-txt">
                                                    <label>Mobile No</label>
                                                    <input type="tel" class="form-control form-control-lg" name="phone" aria-describedby="mobile" placeholder="Enter Mobile No" value="">
                                                    @error('phone')
                                                    <p style="color: red;">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group msg-txt">
                                            <label>Message</label>
                                            <textarea class="form-control" rows="7" name="msg"></textarea>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-12">
                                            <button type="submit" name="submit" value="submit" class="btn mt-3 default-btn form-btn">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- form End -->



                        </div>
                    </div>

                    <!--  -->


                    <!--  -->

                </div>

            </div>
        </div>
    </section>
    <!-- Contact End -->
   

</div>
<!-- Page Content End -->

</div>
<!-- Page Wrapper End -->

@stop