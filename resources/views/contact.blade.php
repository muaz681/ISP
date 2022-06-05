@extends('layouts.master')
@section('content')
<!-- Start Page Title Area -->
@include('layouts.part.page_title')
<!-- End Page Title Area -->
<!-- Start Contact Area -->
<section class="contact-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Send Message</span>
            <h2>Drop us message for any query</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra.</p>
        </div>

        <form id="contactForm">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name" name="name" id="name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email Address" name="email" id="email" required data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone_number" placeholder="Phone Number" id="phone_number" required data-error="Please enter your number">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="msg_subject" placeholder="Subject" id="msg_subject" required data-error="Please enter your subject">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Type Your Message Here" required data-error="Write your message"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Send Message</button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- End Contact Area -->
<!-- Start Map Area -->
<div id="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.282935366029!2d90.40545811498112!3d23.73728788459581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b964cf9739e9%3A0x4be9e304803d052a!2sCinebaz%20Limited!5e0!3m2!1sen!2sbd!4v1653727083999!5m2!1sen!2sbd"></iframe>
</div>
<!-- End Map Area -->
@endsection