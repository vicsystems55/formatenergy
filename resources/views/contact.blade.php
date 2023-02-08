@extends('layout')

@section('content')

<!--Start breadcrumb area-->
<section class="breadcrumb-area style3" style="background-image: url(assets/images/breadcrumb/breadcrumb-3.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                       <h1>Contact Us</h1>
                    </div>
                    <div class="breadcrumb-menu wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <ul class="clearfix">
                            <li><a href="index.html">Home Back</a></li>
                            <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Contact Form Section-->
<section class="contact-form-area">
    <div class="container">
        <div class="sec-title-style3 text-center wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1200ms">
            <p>Don’t be hesitate. You Just Contact Us</p>
            <div class="big-title"><h2>Now You Are Know<br> Contact Us</h2></div>
            <div class="border-box center">
                <div class="borders-left thm-bgc3"></div>
                <div class="borders-right thm-bgc3"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-form-content">
                    <div class="contact-form">
                        <div class="inner-box">
                            <form id="contact-form" name="contact_form" class="default-form2" action="http://html.tonatheme.com/2020/energy-demo/assets/inc/sendmail.php" method="post">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <input type="text" name="form_name" value="" placeholder="Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <input type="email" name="form_email" value="" placeholder="Email" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <input type="text" name="form_subject" value="" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-box">
                                            <input type="text" name="form_phone" value="" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="input-box">
                                            <textarea name="form_message" placeholder="Message" required=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="button-box text-center">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                            <button class="btn-three thm-bgc3" type="submit" data-loading-text="Please wait..."><span class="txt">Contact Us</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Form Section-->

<!--Start Google Map Area-->
<section class="google-map-area">
    <div class="map-outer">
        <!--Map Canvas-->
        <div class="map-canvas"
            data-zoom="12"
            data-lat="-37.817085"
            data-lng="144.955631"
            data-type="roadmap"
            data-hue="#ffc400"
            data-title="Envato"
            data-icon-path="assets/images/resources/map-marker.png"
            data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
        </div>
    </div>
    <div class="outer-container">
        <div class="contact-information-box">
            <div class="title-box">
                <p>Wanna Touch?</p>
                <h2>Contact Info</h2>
            </div>
            <ul class="contact-us">
                <li>
                    <div class="icon">
                        <i class="fa fa-envelope-o thm-clr3" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <a href="mailto:info@templatepath.com">website@example.com</a>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <i class="fa fa-mobile phone thm-clr3" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <a href="tel:+11987654321">(+1) 828-376-0532</a>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <i class="fa fa-map-marker map thm-clr3" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <p>9332 Bernier Dam, Miami, USA</p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <i class="fa fa-clock-o thm-clr3" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <p>Monday-Saturday 7:00AM - 6:00PM</p>
                    </div>
                </li>
            </ul>
            <div class="follow-us">
                <div class="text">
                    <h3>Social Media</h3>
                </div>
                <div class="social-links">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>
<!--End Google Map Area-->

<!--Start Partner Area-->
<section class="partner-area thm-bgc3-v2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="partner-box">
                    <!--Start Single Partner Logo Box-->
                    <div class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-1.png" alt="Awesome Image"></a>
                    </div>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <div class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-2.png" alt="Awesome Image"></a>
                    </div>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <div class="single-partner-logo-box marleft-minus">
                        <a href="#"><img src="assets/images/brand/brand-3.png" alt="Awesome Image"></a>
                    </div>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <div class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-4.png" alt="Awesome Image"></a>
                    </div>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <div class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-5.png" alt="Awesome Image"></a>
                    </div>
                    <!--End Single Partner Logo Box-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Partner Area-->

@endsection
