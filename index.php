<?php include "config.php";?>


<!DOCTYPE html>
<html lang="en">
<head>

    
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Anil z" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Eduglobal">
<meta name="keywords" content="Eduglobal">

<!-- SITE TITLE -->
<title>Eduglobal</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/icon.png">
<!-- Animation CSS -->
<link rel="stylesheet" href="assets/css/animate.css">	
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<!-- Google Font -->
<link href="../../css?family=Rubik:300,400,500,700,900" rel="stylesheet"> 
<link href="../../css-1?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- Icon Font CSS -->
<link rel="stylesheet" href="assets/css/ionicons.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<!-- FontAwesome CSS -->
<link rel="stylesheet" href="assets/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
<!--- owl carousel CSS-->
<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="assets/css/magnific-popup.css">

<!-- Style CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://www.nihtdigitalmarketing.com/assets/css/alumni.css" />
<link rel="stylesheet" href="assets/css/responsive.css">
<link rel="stylesheet" id="layoutstyle" href="assets/color/theme-blue.css">


<style>




.nav-link2 {
  display: inline-block;
  position: relative;
  opacity: 0.75;
}

.nav-link2:hover {
  opacity: 2;
}

.nav-link2::before {
  transition: 300ms;
  height: 3px;
  content: "";
  position: absolute;
  background-color: #4286f3;
}

.nav-link-ltr::before {
  width: 0%;
  bottom: 10px;
}

.nav-link-ltr:hover::before {
  width: 85%;
}

.nav-link-fade-up:hover::before {
  opacity: 1;
}







.mar-right-space {
    margin-right: 1.1rem!important;
}

.marquee {
    --pos-x: 0;
    display: flex;
    overflow-x: hidden
}

.marquee__row {
    --translateX: calc(var(--pos-x) * 1px);
    flex-shrink: 0;
    min-width: 50vw;
    display: flex;
    justify-content: space-around;
    transform: translateX(var(--translateX))
}

.marquee--text {
    background-color: #89ff91
}

.marquee__item--text {
    margin: 0;
    font-size: 65px;
    margin: .2em .4em
}

.marquee--nezuko {
    background-color: #fff
}

.marquee__item--nezuko {
    margin-right: 30px!important;
    height: var(--height);
    margin: calc(0.1 * var(--height)) calc(0.3 * var(--height))
}

.h3-counter-area {
    border-bottom: 1px solid #d9d9d9;
    border-top: 1px solid #d9d9d9;
}


.h3-counter-box {
    border-right: 1px solid #d9d9d9;
    float: left;
    padding: 20px 0;
    text-align: center;
    width: 16.6%;
}

.h3-counter-box:last-child {
    border-right: none;
}

.h3-counter-box h2 {
    color: #181818;
    font-size: 40px;
    font-weight: 700;
    letter-spacing: 0;
    line-height: 34px;
    margin: 0 0 10px;
}

.center-heading.main-heading:after {
    left: 50%;
    transform: translate(-50%,0);
}

.main-heading:after {
    position: absolute;
    width: 70px;
    height: 3px;
    background: #4286f3;
    bottom: 0;
    left: 0;
    content: "";
}

.main-heading {
    position: relative;
    padding-bottom: 10px;
    margin-bottom: 10px;
    line-height: 4rem;
}

.navbar-fixed nav {
      padding: env(safe-area-inset-top) env(safe-area-inset-right) env(safe-area-inset-bottom) env(safe-area-inset-left);
    }

    .footer-fixed footer {
      padding: env(safe-area-inset-top) env(safe-area-inset-right) env(safe-area-inset-bottom) env(safe-area-inset-left);
    }
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    .footer-fixed {
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    footer ul.justify {
      text-align: center;
      display: table;
      overflow: hidden;
      margin: 0 auto;
    }

    footer ul.justify li {
      margin-left: auto;
      margin-right: auto;
      width: 82px;
    }
    .shfooter .collapse {
    display: inherit;
}
   
.getin {
    position: fixed;
    width: 60px;
    height: 60px;
    right: 15px;
    color: #fff;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    box-shadow: 2px 2px 3px #565656;
    z-index: 100;
}
.getin {
    bottom: 155px;
    background-color: #4286f3;
}

.fa-solid, .fas {
    font-weight: 900;
    margin-top: 16px;
}



.getin-call, .my-float {
    margin-top: 16px;
    color: #fff;
}
.fa {
    font-weight: 900;
}

.float, .getin {
    position: fixed;
    width: 60px;
    height: 60px;
    right: 15px;
    color: #fff;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    box-shadow: 2px 2px 3px #565656;
    z-index: 100;
}

.float {
    bottom: 90px;
    background-color: #25d366;
}

</style>
  
</head>

<body>

<?php include "header.php";?>

<!-- START SECTION BANNER -->
<section class="banner_section p-0 ">
    <div id="carouselExampleFade" class="banner_content_wrap carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <!-- 
            <div class="carousel-item active background_bg overlay_bg_40" data-img-src="assets/images/slider_001.jpg">
            -->
            <div class="carousel-item background_bg overlay_bg_40 active" data-img-src="assets/images/slider_001.jpg" style="background-image: url(&quot;assets/images/slider_2.jpg&quot;);background-position: center center;background-size: cover;height: 450px;">
           
                <div class="banner_slide_content">
                    <div class="container"><!-- STRART CONTAINER -->
                    <div class="row justify-content-left">
                        <div class="col-lg-9 col-sm-12 text-left">
                        <div class="banner_content animation text_white animated fadeIn" data-animation="fadeIn"
                                data-animation-delay="0.8s" style="animation-delay: 0.8s; opacity: 1;">
                                <h2 class="font-weight-bold animation text-uppercase animated fadeInDown" data-animation="fadeInDown" data-animation-delay="1s" style="animation-delay: 1s; opacity: 1;">Master Program in <br>
                                Digital Marketing</h2>
                                <p class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="1.5s"
                      style="animation-delay: 1.5s; opacity: 1;">Learn from industry experts &amp; get certified from</p>
                        <div class="row">
                                <div class="col-sm-6 col-md-12 col-lg-12 bannericons pd_lf_rt">
                                    <img src="assets/images/google-white-logo_4.png" alt="google">
                                    <img src="assets/images/facebook-white-logo-full_5.png" alt="facebook">
                                    <img src="assets/images/linkdin-white-logo-full_2.png" alt="linkdin">
                                    <img src="assets/images/microsoft-full-white-logo_1.png" alt="microsoft">
                                    <img src="assets/images/jain-white.png" alt="Jain University">
                                </div>
                        </div>
                                <a class="btn btn-default animation" href="#" data-animation="fadeInUp" data-animation-delay="1.8s">Enroll Now</a>
                                <a class="btn btn-outline-white animation" href="#" data-animation="fadeInUp" data-animation-delay="1.8s">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div><!-- END CONTAINER-->
                </div>
            </div>

            <!--
            <div class="carousel-item background_bg overlay_bg_40" data-img-src="assets/images/slider_2.jpg">
            -->
            <div class="carousel-item background_bg overlay_bg_40 " data-img-src="assets/images/slider_2.jpg" style="background-image: url(&quot;assets/images/slider_2.jpg&quot;);background-position: center center;background-size: cover;height: 450px;">
                <div class="banner_slide_content">
                    <div class="container"><!-- STRART CONTAINER -->
                        <div class="row justify-content-left">
                            <div class="col-lg-9 col-sm-12 text-left">
                            <div class="banner_content animation text_white animated fadeIn" data-animation="fadeIn"
                                data-animation-delay="0.8s" style="animation-delay: 0.8s; opacity: 1;">
                                <h2 class="font-weight-bold animation text-uppercase animated fadeInDown" data-animation="fadeInDown" data-animation-delay="1s" style="animation-delay: 1s; opacity: 1;">Premier Program In <br>
                      Digital Marketing</h2>
                                <p class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="1.5s"
                      style="animation-delay: 1.5s; opacity: 1;">Learn from industry experts &amp; get certified from</p>
                            <div class="row">
                                <div class="col-sm-6 col-md-12 bannericons pd_lf_rt">
                                    <img src="assets/images/google-white-logo_4.png" alt="google">
                                    <img src="assets/images/facebook-white-logo-full_5.png" alt="facebook">
                                    <img src="assets/images/linkdin-white-logo-full_2.png" alt="linkdin">
                                    <img src="assets/images/microsoft-full-white-logo_1.png" alt="microsoft">
                                    <img src="assets/images/jain-white.png" alt="Jain University">
                                </div>
                            </div>    
                                <a class="btn btn-default animation" href="#" data-animation="fadeInUp" data-animation-delay="1.8s">Enroll Now</a>
                                <a class="btn btn-outline-white animation" href="#" data-animation="fadeInUp" data-animation-delay="1.8s">Learn More</a>
                            </div>
                            </div>
                        </div>
                    </div><!-- END CONTAINER-->
                </div>
            </div>
            
        </div>
        <div class="carousel-nav carousel_style1">
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <i class="ion-chevron-left"></i>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <i class="ion-chevron-right"></i>
            </a>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->




<section class="small_pt small_pb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-8">
          <div class="text-center animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.01s"
            style="animation-delay: 0.01s; opacity: 1;">
            <div class="heading_s1 text-center">
              <h2 class="main-heading center-heading"><b>Our Alumni Placed At</b> 
</h2>
<?php 
echo $page_name;
?> 
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="marquee marquee--nezuko" data-speed="25" style="--pos-x: -2019;">
            <div class="marquee__row marquee__row--nezuko">
              <img class="marquee__item marquee__item--nezuko"
                src="assets/images/google.jpg" alt="Essar Group"
                data-clone="0">
              <img class="marquee__item marquee__item--nezuko"
                src="assets/images/oyo.jpg" alt="Olympia Group"
                data-clone="0">
              <img class="marquee__item marquee__item--nezuko"
                src="assets/images/arena.jpg" alt="Tanishq"
                data-clone="0">
              <img class="marquee__item marquee__item--nezuko"
                src="assets/images/paytm.jpg" alt="Titan"
                data-clone="0">
              <img class="marquee__item marquee__item--nezuko"
                src="assets/images/Untitled-1.jpg"
                alt="Aditya Birla Group" data-clone="0">
            </div>
            <div class="marquee__row marquee__row--nezuko">
              <img class="marquee__item marquee__item--nezuko"
                src="assets/images/google.jpg" alt="Essar Group"
                data-clone="0">
              <img class="marquee__item marquee__item--nezuko"
                src="assets/images/oyo.jpg" alt="Olympia Group"
                data-clone="0">
              <img class="marquee__item marquee__item--nezuko"
                src="assets/images/arena.jpg" alt="Tanishq"
                data-clone="0">
              <img class="marquee__item marquee__item--nezuko"
                src="assets/images/paytm.jpg" alt="Titan"
                data-clone="0">
              <img class="marquee__item marquee__item--nezuko"
                src="assets/images/Untitled-1.jpg"
                alt="Aditya Birla Group" data-clone="0">
            </div>
            <div class="marquee__row marquee__row--nezuko">
              <img class="marquee__item marquee__item--nezuko"
                src="assets/images/google.jpg" alt="Essar Group"
                data-clone="0">
              <img class="marquee__item marquee__item--nezuko"
                src="assets/images/oyo.jpg" alt="Olympia Group"
                data-clone="0">
              <img class="marquee__item marquee__item--nezuko"
                src="assets/images/arena.jpg" alt="Tanishq"
                data-clone="0">
              <img class="marquee__item marquee__item--nezuko"
                src="assets/images/paytm.jpg" alt="Titan"
                data-clone="0">
              <img class="marquee__item marquee__item--nezuko"
                src="assets/images/Untitled-1.jpg"
                alt="Aditya Birla Group" data-clone="0">
            </div>
          </div>
        </div>
      </div>
      <div class="mt-5">
        <div class="row">
          <div class="col-md-12">
            <div class="h3-counter-area">
              <div class="clearfix">
                <div class="h3-counter-box">
                  <h2 class=" " data-counterup-delay="30">22125+</h2>
                  <p>Students Trained</p>
                </div>
                <div class="h3-counter-box">
                  <h2 class="" data-counterup-delay="30">20+</h2>
                  <p>Global Certifications</p>
                </div>
                <div class="h3-counter-box">
                  <h2 class="" data-counterup-delay="30">278+</h2>
                  <p>Hours of Lectures</p>
                </div>
                <div class="h3-counter-box">
                  <h2 class="">100%</h2>
                  <p>Placement Support</p>
                </div>
                <div class="h3-counter-box">
                  <h2 class=" " data-counterup-delay="30">20+</h2>
                  <p>Case Studies</p>
                </div>
                <div class="h3-counter-box">
                  <h2 class=" " data-counterup-delay="30">40+</h2>
                  <p>Modules Taught</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>







  <section class="pt-0 small_pb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-8">
          <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s"
            style="animation-delay: 0.01s; opacity: 0;">
            <div class="heading_s1 text-center">
              <h2 class="main-heading center-heading"><b>Our Programs</b></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp"
            data-animation-delay="0.02s" style="animation-delay: 0.02s; opacity: 0;">
            <div class="content_img radius_ltrt_10">
              <a href="#"><img
                  src="assets/images/course_img.jpg"
                  alt="Students in a classroom learning digital marketing"></a>
            </div>
            <div class="content_desc">
              <h4 class="content_title"><a
                  href="#">Certificate
                  Program In <br> Digital Marketing</a></h4>
              <div class="courses_info">
                <ul class="ml-3">
                  <li> 108 Hours of Training</li>
                  <li>10+ Certifications</li>
                  <li>100% Job Assistance</li>
                  <li> Become A Professionally Certified Digital Marketer</li>
                  <li> Level 1 + Level 2</li>
                </ul>
              </div>
            </div>
            <div class="content_footer">
              <div class="teacher">
                <a href="#"><span
                    class="btn btn-default btn-sm">Know More</span></a>
              </div>
              <div class="price">
                <span class="alert alert-success">3 - 6 Months</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp"
            data-animation-delay="0.03s" style="animation-delay: 0.03s; opacity: 0;">
            <div class="content_img radius_ltrt_10">
              <a href="#"><img
                  src="assets/images/ppdm.jpg"
                  alt="Students learning the basics of digital marketing"></a>
            </div>
            <div class="content_desc">
              <h4 class="content_title"><a
                  href="#">Premier
                  Program in <br> Digital Marketing</a></h4>
              <div class="courses_info">
                <ul class="ml-3">
                  <li>172 Hours of Training</li>
                  <li>15+ Certifications</li>
                  <li>100% Job Assistance</li>
                  <li>Grow Into An All-Round Digital Marketer With Creative Skills</li>
                  <li>Level 1 + Level 2 + Level 3</li>
                </ul>
              </div>
            </div>
            <div class="content_footer">
              <div class="teacher">
                <a href="#"><span
                    class="btn btn-default btn-sm">Know More</span></a>
              </div>
              <div class="price">
                <span class="alert alert-success">6 - 10 Months</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp"
            data-animation-delay="0.04s" style="animation-delay: 0.04s; opacity: 0;">
            <div class="content_img radius_ltrt_10">
              <a href="#"><img
                  src="assets/images/mpdm.jpg"
                  alt="Students presenting marketing presentation"></a>
            </div>
            <div class="content_desc">
              <h4 class="content_title"><a
                  href="#">Master Program
                  in Digital Marketing</a></h4>
              <div class="courses_info">
                <ul class="ml-3">
                  <li>288 Hours of Training</li>
                  <li>20+ Certifications</li>
                  <li>100% Job Assistance</li>
                  <li>Limited Seats</li>
                  <li>Master The Art Of Digital Marketing To Become Agency Ready</li>
                  <li>Level 1 + Level 2 + Level 3 + Level 4</li>
                </ul>
              </div>
            </div>
            <div class="content_footer">
              <div class="teacher">
                <a href="#"><span
                    class="btn btn-default btn-sm">Know More</span></a>
              </div>
              <div class="price">
                <span class="alert alert-success">8 - 14 Months</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.07s"
            style="animation-delay: 0.07s; opacity: 0;">
            <div class="medium_divider"></div>
            <a href="#" class="btn btn-default">View All Courses <i
                class="ion-ios-arrow-thin-right ml-1"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg_gray small_pt small_pb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-8">
          <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s"
            style="animation-delay: 0.01s; opacity: 0;">
            <div class="heading_s1 text-center">
              <h2 class="main-heading center-heading">Why Choose NIHT</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="icon_box text-center bg-white icon_box_style2 box_shadow2 radius_all_10 animation"
            data-animation="fadeInUp" data-animation-delay="0.02s" style="animation-delay: 0.02s; opacity: 0;">
            <div class="box_icon bg_default mb-3">
              <img src="assets/images/expert.png" alt="book">
            </div>
            <div class="intro_desc">
              <h5>Expert Instructors</h5>
              <p>Our courses are designed and delivered by expert trainers from Kolkata, Delhi, Bangalore, and Gurgaon
                who are digital marketing specialists.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="icon_box text-center bg-white icon_box_style2 box_shadow2 radius_all_10 animation"
            data-animation="fadeInUp" data-animation-delay="0.03s" style="animation-delay: 0.03s; opacity: 0;">
            <div class="box_icon bg_default mb-3">
              <img src="assets/images/live_projects.png"
                alt="Live Projects">
            </div>
            <div class="intro_desc">
              <h5>Live Projects</h5>
              <p>Learning is effective when it is applied practically. We make sure our students work on assignments on
                a live project to help them hone their skills.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="icon_box text-center bg-white icon_box_style2 box_shadow2 radius_all_10 animation"
            data-animation="fadeInUp" data-animation-delay="0.04s" style="animation-delay: 0.04s; opacity: 0;">
            <div class="box_icon bg_default mb-3">
              <img src="assets/images/placement.png"
                alt="Placement">
            </div>
            <div class="intro_desc">
              <h5>Placement Support</h5>
              <p>Our placement cell helps your resume get noticed by top companies while prepping you with mock
                interviews and client pitches.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="icon_box text-center bg-white icon_box_style2 box_shadow2 radius_all_10 animation"
            data-animation="fadeInUp" data-animation-delay="0.04s" style="animation-delay: 0.04s; opacity: 0;">
            <div class="box_icon bg_default mb-3">
              <img src="assets/images/case-study.png"
                alt="Case Study">
            </div>
            <div class="intro_desc">
              <h5>Case Studies</h5>
              <p>We discuss insightful case studies that help students get practical cues on brand building and
                strategizing.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="text-center animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.07s"
            style="animation-delay: 0.07s; opacity: 0;">
            <div class="medium_divider"></div>
            <a href="#" class="btn btn-default" data-toggle="modal">Apply
              Now <i class="ion-ios-arrow-thin-right ml-1"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>






  <section class="pt-0 small_pb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-8">
          <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s"
            style="animation-delay: 0.01s; opacity: 0;">
            <div class="heading_s1 text-center">
              <h2 class="main-heading center-heading">Who Should Upskill?</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-3 col-sm-6">
          <div class="content_box event_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp"
            data-animation-delay="0.04s" style="animation-delay: 0.04s; opacity: 0;">
            <div class="content_img radius_ltrt_10">
              <img src="assets/images/students-niht.jpg"
                alt="Ideal digital marketing course for students">
            </div>
            <div class="content_desc text-center upskill_box_height">
              <h4 class="content_title">Students</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="content_box event_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp"
            data-animation-delay="0.02s" style="animation-delay: 0.02s; opacity: 0;">
            <div class="content_img radius_ltrt_10">
              <img src="assets/images/job-seeker.jpg"
                alt="best digital marketing course for job seekers">
            </div>
            <div class="content_desc text-center upskill_box_height">
              <h4 class="content_title">Job Seekers</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="content_box event_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp"
            data-animation-delay="0.04s" style="animation-delay: 0.04s; opacity: 0;">
            <div class="content_img radius_ltrt_10">
              <img src="assets/images/working-professional1.jpg"
                alt="Digital marketing course for working professionals">
            </div>
            <div class="content_desc text-center upskill_box_height">
              <h4 class="content_title">Working Professionals</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="content_box event_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp"
            data-animation-delay="0.03s" style="animation-delay: 0.03s; opacity: 0;">
            <div class="content_img radius_ltrt_10">
              <img src="assets/images/entrepreneur.jpg"
                alt="Digital marketing course for entrepreneurs">
            </div>
            <div class="content_desc text-center upskill_box_height">
              <h4 class="content_title text-center">Entrepreneur</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





  <section class="parallax_bg overlay_bg_blue_90 small_pt small_pb"
    data-parallax-bg-image="assets/images/team-niht.jpg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-8">
          <div class="text-center text_white animation" data-animation="fadeInUp" data-animation-delay="0.01s"
            style="animation-delay: 0.01s; opacity: 0;">
            <div class="heading_s1 heading_light text-center">
              <h2 class="main-heading center-heading">Our Team</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="team_box team_style1 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.02s"
            style="animation-delay: 0.02s; opacity: 0;">
            <div class="team_img">
              <img src="assets/images/team-niht.jpg"
                alt="Our team of trainers and educators at NIHT">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





  <section class="bg_default small_pt small_pb">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-8">
          <div class="text_white cta_section">
            <div class="medium_divider d-block d-md-none"></div>
            <div class="heading_s1 heading_light">
              <h2><b>Stairway To Future</b></h2>
            </div>
            <p>Take the first step in building your future in NIHT.
              LEARN.GROW.EXCEL</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="text-md-right">
            <a href="https://www.nihtdigitalmarketing.com/#niht-form5" class="btn btn-outline-white"
              data-toggle="modal">Download Brochure</a>
          </div>
          <div class="medium_divider d-block d-md-none"></div>
        </div>
      </div>
    </div>
  </section>








  



<!-- START SECTION FEATURE 
<section class="bg_gray">
    <div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <h2>Why Choose Eduglobal</h2>
                    </div>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="icon_box text-center bg-white icon_box_style2 box_shadow2 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="box_icon bg_danger mb-3">
                		<img src="assets/images/book.png" alt="book">
                    </div>
                    <div class="intro_desc">
                        <h5>Books & Library</h5>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="icon_box text-center bg-white icon_box_style2 box_shadow2 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                	<div class="box_icon bg_default mb-3">
                		<img src="assets/images/globe.png" alt="globe">
                    </div>
                    <div class="intro_desc">
                        <h5>Learn Courses Online</h5>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="icon_box text-center bg-white icon_box_style2 box_shadow2 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                	<div class="box_icon bg_light_green mb-3">
                        <img src="assets/images/instructors.png" alt="instructors">
                    </div>
                    <div class="intro_desc">
                        <h5>Expert Instructors</h5>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
<!-- END SECTION FEATURE 

<!-- START SECTION CATEGORIES 
<section class="small_pb">
    <div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <h2>Most Popular Categories</h2>
                    </div>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                    <div class="small_divider"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                <div class="course_categories carousel_slider owl-carousel owl-theme nav_style1" data-margin="15" data-loop="true" data-nav="true" data-dots="false" data-autoplay="true" data-responsive='{"0":{"items": "1"}, "380":{"items": "2"}, "576":{"items": "3"}, "1000":{"items": "5"}, "1199":{"items": "6"}}'>
                	<div class="item">
                    	<div class="single_categories">
                        	<a href="#" class="bg_danger">
                            	<i class="fa fa-globe"></i>
                            	Language
                            </a>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="single_categories">
                        	<a href="#" class="bg_light_green">
                            	<i class="fa fa-chart-line"></i>
                            	Business
                            </a>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="single_categories">
                        	<a href="#" class="bg_default">
                            	<i class="fa fa-book"></i>
                            	Academics
                            </a>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="single_categories">
                        	<a href="#" class="bg_pink">
                            	<i class="fa fa-camera"></i>
                            	Photography
                            </a>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="single_categories">
                        	<a href="#" class="bg_blue">
                            	<i class="fa fa-heartbeat"></i>
                            	Health Fitness
                            </a>
                        </div>
                    </div>
                    <div class="item">
                    	<div class="single_categories">
                        	<a href="#" class="bg_orange">
                            	<i class="fa fa-code"></i>
                            	Development
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CATEGORIES 

<!-- START SECTION ABOUT 
<section class="small_pt small_pb overflow-hidden">
	<div class="container-fluid p-0">
    	<div class="row no-gutters align-items-center">
        	<div class="col-md-6">
            	<div class="box_shadow1 bg-white overlap_section padding_eight_all">
                	<div class="animation" data-animation="fadeInLeft" data-animation-delay="0.02s">
                        <div class="heading_s1"> 
                          <h2>About Us</h2>
                        </div>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                        <ul class="list_none list_item">
                        	<li>
                            	<div class="counter_content">
                                    <h3 class="h1 text_danger"><span class="counter">260</span></h3>
                                    <h6>Free Courses</h6>
                                </div>
                            </li>
                            <li>
                            	<div class="counter_content">
                                    <h3 class="h1 text_light_green"><span class="counter">152</span></h3>
                                    <h6>Paid Courses</h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        	<div class="col-md-6">
            	<div class="animation" data-animation="fadeInRight" data-animation-delay="0.03s">
                	<div class="overlay_bg_30 about_img z_index_minus1">	
                    	<img class="w-100" src="assets/images/about_img.jpg" alt="about_img">
                    </div>
                	<a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="video_popup video_play">
                    	<span class="ripple"><i class="ion-play ml-1"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT 

<!-- START SECTION COURSES
<section class="small_pt">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <h2>Our Courses</h2>
                    </div>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-lg-4 col-sm-6">
            	<div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="content_img radius_ltrt_10">
                    	<a href="#"><img src="assets/images/course_img1.jpg" alt="course_img1"></a>
                    </div>
                    <div class="content_desc">
                    	<h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>
                        <div class="courses_info">
                        	<div class="rating_stars">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star-half"></i> 
                            </div>
                            <ul class="list_none content_meta">
                                <li><a href="#"><i class="ti-user"></i>31</a></li>
                                <li><a href="#"><i class="ti-heart"></i>10</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content_footer">
                        <div class="teacher">
                            <a href="#"><img src="assets/images/user1.jpg" alt="user1"><span>Alia Noor</span></a>
                        </div>
                        <div class="price">
                        	<span class="alert alert-success">Free</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
            	<div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                	<div class="content_img radius_ltrt_10">
                    	<a href="#"><img src="assets/images/course_img2.jpg" alt="course_img2"></a>
                    </div>
                    <div class="content_desc">
                    	<h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>
                        <div class="courses_info">
                        	<div class="rating_stars">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star-half"></i> 
                            </div>
                            <ul class="list_none content_meta">
                                <li><a href="#"><i class="ti-user"></i>31</a></li>
                                <li><a href="#"><i class="ti-heart"></i>10</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content_footer">
                        <div class="teacher">
                            <a href="#"><img src="assets/images/user2.jpg" alt="user2"><span>Dany Core</span></a>
                        </div>
                        <div class="price">
                        	<span class="alert alert-info">$49</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
            	<div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                	<div class="content_img radius_ltrt_10">
                    	<a href="#"><img src="assets/images/course_img3.jpg" alt="course_img3"></a>
                    </div>
                    <div class="content_desc">
                    	<h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>
                        <div class="courses_info">
                        	<div class="rating_stars">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star-half"></i> 
                            </div>
                            <ul class="list_none content_meta">
                                <li><a href="#"><i class="ti-user"></i>31</a></li>
                                <li><a href="#"><i class="ti-heart"></i>10</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content_footer">
                        <div class="teacher">
                            <a href="#"><img src="assets/images/user3.jpg" alt="user3"><span>Smith Parker</span></a>
                        </div>
                        <div class="price">
                        	<span class="alert alert-success">Free</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
            	<div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                	<div class="content_img radius_ltrt_10">
                    	<a href="#"><img src="assets/images/course_img4.jpg" alt="course_img4"></a>
                    </div>
                    <div class="content_desc">
                    	<h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>
                        <div class="courses_info">
                        	<div class="rating_stars">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star-half"></i> 
                            </div>
                            <ul class="list_none content_meta">
                                <li><a href="#"><i class="ti-user"></i>31</a></li>
                                <li><a href="#"><i class="ti-heart"></i>10</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content_footer">
                        <div class="teacher">
                            <a href="#"><img src="assets/images/user4.jpg" alt="user4"><span>Sara Robert</span></a>
                        </div>
                        <div class="price">
                        	<span class="alert alert-info">$54</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
            	<div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.06s">
                	<div class="content_img radius_ltrt_10">
                    	<a href="#"><img src="assets/images/course_img5.jpg" alt="course_img5"></a>
                    </div>
                    <div class="content_desc">
                    	<h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>
                        <div class="courses_info">
                        	<div class="rating_stars">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star-half"></i> 
                            </div>
                            <ul class="list_none content_meta">
                                <li><a href="#"><i class="ti-user"></i>31</a></li>
                                <li><a href="#"><i class="ti-heart"></i>10</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content_footer">
                        <div class="teacher">
                            <a href="#"><img src="assets/images/user5.jpg" alt="user5"><span>Wendy Nahse</span></a>
                        </div>
                        <div class="price">
                        	<span class="alert alert-info">$36</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
            	<div class="content_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.07s">
                	<div class="content_img radius_ltrt_10">
                    	<a href="#"><img src="assets/images/course_img6.jpg" alt="course_img6"></a>
                    </div>
                    <div class="content_desc">
                    	<h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>
                        <div class="courses_info">
                        	<div class="rating_stars">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star-half"></i> 
                            </div>
                            <ul class="list_none content_meta">
                                <li><a href="#"><i class="ti-user"></i>31</a></li>
                                <li><a href="#"><i class="ti-heart"></i>10</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content_footer">
                        <div class="teacher">
                            <a href="#"><img src="assets/images/user6.jpg" alt="user6"><span>John Wood</span></a>
                        </div>
                        <div class="price">
                        	<span class="alert alert-info">$22</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.07s">
                	<div class="medium_divider"></div>
                	<a href="#" class="btn btn-default">View All Courses <i class="ion-ios-arrow-thin-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION COURSES 

<!-- START SECTION COUNTER 
<section class="parallax_bg overlay_bg_blue_70" data-parallax-bg-image="assets/images/counter_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-6 ">
                <div class="box_counter counter_style1 text_white text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="counter_icon">
                    	<img src="assets/images/counter_icon1.png" alt="counter_icon1">
                    </div>
                    <div class="counter_content">
                        <h3 class="counter_text"><span class="counter">1800</span>+</h3>
                        <p>Students</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 ">
                <div class="box_counter counter_style1 text_white text-center animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                    <div class="counter_icon">
                    	<img src="assets/images/counter_icon2.png" alt="counter_icon2">
                    </div>
                    <div class="counter_content">
                        <h3 class="counter_text"><span class="counter">70</span></h3>
                        <p>Courses</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 ">
                <div class="box_counter counter_style1 text_white text-center animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                    <div class="counter_icon">
                    	<img src="assets/images/counter_icon3.png" alt="counter_icon3">
                    </div>
                    <div class="counter_content">
                        <h3 class="counter_text"><span class="counter">700</span>+</h3>
                        <p>Certified teachers</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 ">
                <div class="box_counter counter_style1 text_white text-center animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                	<div class="counter_icon">
                    	<img src="assets/images/counter_icon4.png" alt="counter_icon4">
                    </div>
                    <div class="counter_content">
                        <h3 class="counter_text"><span class="counter">1200</span>+</h3>
                        <p>Award Winning</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION COUNTER 

<!-- START SECTION EVENT 
<section>
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <h2>Upcoming events</h2>
                    </div>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-lg-4 col-sm-6">
            	<div class="content_box event_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="content_img radius_ltrt_10">
                    	<a href="#"><img src="assets/images/event_img1.jpg" alt="event_img1"></a>
                        <div class="event_date radius_all_5">
                        	<h5><span>16</span> May</h5>
                            <span class="event_time radius_lbrb_5 bg_default">10:00 am 3:00 pm</span>
                        </div>
                    </div>
                    <div class="content_desc">
                    	<h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                        <ul class="list_none content_meta">
                        	<li><i class="ti-user"></i> <a href="#" class="text_default">John Wood</a></li>
                            <li><i class="ti-location-pin"></i><span class="text_default">New York City</span></li>
                        </ul>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
            	<div class="content_box event_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                	<div class="content_img radius_ltrt_10">
                    	<a href="#"><img src="assets/images/event_img2.jpg" alt="event_img2"></a>
                        <div class="event_date radius_all_5">
                        	<h5><span>27</span> Apr</h5>
                            <span class="event_time radius_lbrb_5 bg_default">9:00 am 4:00 pm</span>
                        </div>
                    </div>
                    <div class="content_desc">	
                    	<h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                        <ul class="list_none content_meta">
                        	<li><i class="ti-user"></i> <a href="#" class="text_default">John Wood</a></li>
                            <li><i class="ti-location-pin"></i><span class="text_default">New York City</span></li>
                        </ul>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
            	<div class="content_box event_box radius_all_10 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                	<div class="content_img radius_ltrt_10">
                    	<a href="#"><img src="assets/images/event_img3.jpg" alt="event_img3"></a>
                        <div class="event_date radius_all_5">
                        	<h5><span>22</span> Jun</h5>
                            <span class="event_time radius_lbrb_5 bg_default">11:00 am 4:00 pm</span>
                        </div>
                    </div>
                    <div class="content_desc">
                    	<h4 class="content_title"><a href="#">Nullam id varius nunc id varius nunc</a></h4>
                        <ul class="list_none content_meta">
                        	<li><i class="ti-user"></i> <a href="#" class="text_default">John Wood</a></li>
                            <li><i class="ti-location-pin"></i><span class="text_default">New York City</span></li>
                        </ul>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure anything embarrassing hidden in the middle of text.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- START SECTION EVENT 

<!-- START SECTION REGISTER 
<section class="pb-0 background_bg bg_blue_dark" data-img-src="assets/images/pattern_bg.png">
	<div class="container">
    	<div class="row align-items-end">
        	<div class="col-lg-6 col-md-7">
            	<div class="register_form radius_all_10 text_white padding_eight_all animation" data-animation="fadeInLeft" data-animation-delay="0.02s">
                    <div class="heading_s1 heading_light">
                        <h2>Get A Free <span class="text_default">Online Courses</span></h2>
                    </div>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything hidden in the middle of text</p>
                    <form method="post" name="enq" class="pt-md-2 form_transparent">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input required="required" placeholder="Enter Name *" class="form-control" name="name" type="text">
                             </div>
                            <div class="form-group col-sm-6">
                                <input required="required" placeholder="Enter Email *" class="form-control" name="email" type="email">
                            </div>
                            <div class="form-group col-sm-6">
                                <input required="required" placeholder="Enter Phone No *" class="form-control" name="phone" type="tel">
                            </div>
                            <div class="form-group col-sm-6">
                                <div class="custom_select">
                                	<select class="form-control">
                                    	<option>Select Course</option>
                                        <option>Course</option>
                                        <option>Course</option>
                                        <option>Course</option>
                                        <option>Course</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <textarea required="required" placeholder="Message *" class="form-control" name="message" rows="4"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" title="Submit Your Message!" class="btn btn-default" name="submit" value="Submit">Register Now</button>
                            </div>
                            <div class="col-sm-12">
                                <div id="alert-msg" class="alert-msg text-center"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="large_divider"></div>
            </div>
            <div class="col-lg-6 col-md-5">
            	<div class="text-center animation" data-animation="fadeInRight" data-animation-delay="0.03s">
            		<img src="assets/images/girl_img.png" alt="girl_img">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION REGISTER 

<!-- START SECTION GALLERY 
<section>
	<div class="container">	
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <h2>Our Gallery</h2>
                    </div>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                    <div class="small_divider"></div>
                </div>
            </div>
        </div>
    	<div class="row">
            <div class="col-md-12 text-center">
                <ul class="list_none grid_filter animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                    <li><a href="#" class="current" data-filter="*">all</a></li>
                    <li><a href="#" data-filter=".library">Library</a></li>
                    <li><a href="#" data-filter=".campus">Campus</a></li>
                    <li><a href="#" data-filter=".events">Events</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="grid_container gutter_medium grid_col3 animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                    <li class="grid-sizer"></li>
                    <!-- START PORTFOLIO ITEM 
                    <li class="grid_item events">
                        <div class="gallery_item radius_all_10">
                            <a href="#" class="image_link">
                                <img src="assets/images/gallery_item_small1_360X240.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item1.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
							</div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM 
                    <!-- START PORTFOLIO ITEM 
                    <li class="grid_item library campus">
                        <div class="gallery_item radius_all_10">
                            <a href="#" class="image_link">
                                <img src="assets/images/gallery_item_small2_360X240.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item2.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
							</div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM 
                    <!-- START PORTFOLIO ITEM 
                    <li class="grid_item library">
                        <div class="gallery_item radius_all_10">
                            <div class="carousel_slider owl-carousel owl-theme dots_white" data-autoplay="true" data-loop="true" data-autoplay-timeout="3000" data-items="1">
                                <a href="#" class="image_link">
                                    <img src="assets/images/gallery_item_small3_360X240.jpg" alt="image">
                                </a>
                                <a href="#" class="image_link">
                                    <img src="assets/images/gallery_item_small4_360X240.jpg" alt="image">
                                </a>
                            </div>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item3.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                    <a href="assets/images/gallery_item4.jpg" class="image_popup d-none"></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM 
                    <!-- START PORTFOLIO ITEM 
                    <li class="grid_item campus">
                        <div class="gallery_item radius_all_10">
                            <a href="#" class="image_link">
                                <img src="assets/images/gallery_item_small5_360X240.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item5.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM 
                    <!-- START PORTFOLIO ITEM 
                    <li class="grid_item events">
                        <div class="gallery_item radius_all_10">
                            <div class="carousel_slider owl-carousel owl-theme dots_white" data-autoplay="true" data-loop="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay-timeout="3500" data-items="1">
                                <a href="#" class="image_link">
                                    <img src="assets/images/gallery_item_small6_360X240.jpg" alt="image">
                                </a>
                                <a href="#" class="image_link">
                                    <img src="assets/images/gallery_item_small7_360X240.jpg" alt="image">
                                </a>
                            </div>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item6.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                    <a href="assets/images/gallery_item7.jpg" class="image_popup d-none"><i class="ion-image"></i></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM 
                    <!-- START PORTFOLIO ITEM 
                    <li class="grid_item library campus">
                        <div class="gallery_item radius_all_10">
                            <a href="#" class="image_link">
                                <img src="assets/images/gallery_item_small8_360X240.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item8.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM 
                    <!-- START PORTFOLIO ITEM 
                    <li class="grid_item campus">
                        <div class="gallery_item radius_all_10">
                            <a href="#" class="image_link">
                                <img src="assets/images/gallery_item_small9_360X240.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item9.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM 
                    <!-- START PORTFOLIO ITEM 
                    <li class="grid_item library">
                        <div class="gallery_item radius_all_10">
                            <a href="#" class="image_link">
                                <img src="assets/images/gallery_item_small10_360X240.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item10.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM 
                    <!-- START PORTFOLIO ITEM 
                    <li class="grid_item events">
                        <div class="gallery_item radius_all_10">
                            <a href="#" class="image_link">
                                <img src="assets/images/gallery_item_small11_360X240.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item11.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM 
                    <!-- START PORTFOLIO ITEM 
                    <li class="grid_item events">
                        <div class="gallery_item radius_all_10">
                            <div class="carousel_slider owl-carousel owl-theme dots_white" data-autoplay="true" data-loop="true" data-autoplay-timeout="4000" data-items="1">
                                <a href="#" class="image_link">
                                    <img src="assets/images/gallery_item_small12_360X240.jpg" alt="image">
                                </a>
                                <a href="#" class="image_link">
                                    <img src="assets/images/gallery_item_small13_360X240.jpg" alt="image">
                                </a>
                            </div>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item12.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                    <a href="assets/images/gallery_item13.jpg" class="image_popup d-none"></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM 
                    <!-- START PORTFOLIO ITEM 
                    <li class="grid_item library">
                        <div class="gallery_item radius_all_10">
                            <a href="#" class="image_link">
                                <img src="assets/images/gallery_item_small14_360X240.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item14.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM 
                    <!-- START PORTFOLIO ITEM 
                    <li class="grid_item events">
                        <div class="gallery_item radius_all_10">
                            <a href="#" class="image_link">
                                <img src="assets/images/gallery_item_small15_360X240.jpg" alt="image">
                            </a>
                            <div class="gallery_content">
                                <div class="link_container">
                                    <a href="assets/images/gallery_item15.jpg" class="image_popup"><span class="ripple"><i class="ion-image"></i></span></a>
                                </div>
                                <div class="text_holder text_white">
                               		<h5>Galley Title</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END PORTFOLIO ITEM 
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION GALLERY 

<!-- START SECTION TEACHER 
<section class="parallax_bg overlay_bg_blue_90" data-parallax-bg-image="assets/images/teacher_bg.jpg">
	<div class="container">	
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center text_white animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 heading_light text-center">
                        <h2>Our Teachers</h2>
                    </div>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 col-sm-6">
            	<div class="team_box team_style1 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="team_img">
                    	<img src="assets/images/team_img1.jpg" alt="team1">
                        <ul class="list_none social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_title radius_lbrb_10 text-center">
                        <h5><a href="#">Aden Smith</a></h5>
                        <span>Head Of Department</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
            	<div class="team_box team_style1 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                	<div class="team_img">
                    	<img src="assets/images/team_img2.jpg" alt="team2">
                        <ul class="list_none social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_title radius_lbrb_10 text-center">
                        <h5><a href="#">Kally Brooks</a></h5>
                        <span>Professor</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
            	<div class="team_box team_style1 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                	<div class="team_img">
                    	<img src="assets/images/team_img3.jpg" alt="team3">
                        <ul class="list_none social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_title radius_lbrb_10 text-center">
                        <h5><a href="#">David clark</a></h5>
                        <span>Chemistry Teacher</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
            	<div class="team_box team_style1 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                	<div class="team_img">
                    	<img src="assets/images/team_img4.jpg" alt="team4">
                        <ul class="list_none social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="team_title radius_lbrb_10 text-center">
                        <h5><a href="#">Rebeka Alig</a></h5>
                        <span>English Teacher</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TEACHER 
 
 <!-- START SECTION TESTIMONIAL 
<section>
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <h2>Student Say!</h2>
                    </div>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                    <div class="small_divider"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
            	<div class="testimonial_slider testimonial_style1 carousel_slider owl-carousel owl-theme" data-margin="30" data-loop="true" data-autoplay="true" data-dots="false" data-responsive='{"0":{"items": "1"}, "576":{"items": "2"}, "1199":{"items": "2"}}'>
                    <div class="testimonial_box">
                        <div class="testimonial_img">
                            <img class="radius_all_5" src="assets/images/client_img1.jpg" alt="client">
                        </div>
                        <div class="testi_meta">
                        	<div class="testi_user">
                            	<h6>Lissa Castro</h6>
                            	<span class="text_default">Co-Founder</span>
                            </div>
                            <div class="testi_desc">
                            	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, quaeillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_box">
                        <div class="testimonial_img">
                            <img class="radius_all_5" src="assets/images/client_img2.jpg" alt="client">
                        </div>
                        <div class="testi_meta">
                        	<div class="testi_user">
                            	<h6>Lissa Castro</h6>
                            	<span class="text_default">Co-Founder</span>
                            </div>
                            <div class="testi_desc">
                            	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, quaeillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_box">
                        <div class="testimonial_img">
                            <img class="radius_all_5" src="assets/images/client_img3.jpg" alt="client">
                        </div>
                        <div class="testi_meta">
                        	<div class="testi_user">
                            	<h6>Lissa Castro</h6>
                            	<span class="text_default">Co-Founder</span>
                            </div>
                            <div class="testi_desc">
                            	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, quaeillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TESTIMONIAL

<!-- START SECTION BLOG 
<section class="bg_gray">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="heading_s1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                	<h2>Our Blog</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-lg-4 col-md-6">
            	<div class="blog_post box_shadow1 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="blog_img radius_ltrt_10">
                        <a href="#">
                            <img src="assets/images/blog_small_img1.jpg" alt="blog_small_img1">
                            <div class="link_blog">
                            	<span class="ripple"><i class="fa fa-link"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="blog_content bg-white">
                        <h6 class="blog_title"><a href="#">Why are tickets to fly to Lagos expensive?</a></h6>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure there anything embarrassing hidden in the middle of text</p>
                        <a href="#" class="text-capitalize">Read More</a>
                    </div>
                    <div class="blog_footer bg-white radius_lbrb_10">
                        <ul class="list_none blog_meta">
                            <li><a href="#"><i class="ion-calendar"></i>15 May, 2019</a></li>
                            <li><a href="#"><i class="ion-chatbubbles"></i>2 Comment</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="blog_post box_shadow1 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                	<div class="blog_img radius_ltrt_10">
                        <a href="#">
                            <img src="assets/images/blog_small_img2.jpg" alt="blog_small_img2">
                            <div class="link_blog">
                            	<span class="ripple"><i class="fa fa-link"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="blog_content bg-white">
                        <h6 class="blog_title"><a href="#">Why are tickets to fly to Lagos expensive?</a></h6>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure there anything embarrassing hidden in the middle of text</p>
                        <a href="#" class="text-capitalize">Read More</a>
                    </div>
                    <div class="blog_footer bg-white radius_lbrb_10">
                        <ul class="list_none blog_meta">
                            <li><a href="#"><i class="ion-calendar"></i>23 May, 2019</a></li>
                            <li><a href="#"><i class="ion-chatbubbles"></i>2 Comment</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="blog_post box_shadow1 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                	<div class="blog_img radius_ltrt_10">
                        <a href="#">
                            <img src="assets/images/blog_small_img3.jpg" alt="blog_small_img3">
                            <div class="link_blog">
                            	<span class="ripple"><i class="fa fa-link"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="blog_content bg-white">
                        <h6 class="blog_title"><a href="#">Why are tickets to fly to Lagos expensive?</a></h6>
                        <p>If you are going to use a passage of Lorem Ipsum you need to be sure there anything embarrassing hidden in the middle of text</p>
                        <a href="#" class="text-capitalize">Read More</a>
                    </div>
                    <div class="blog_footer bg-white radius_lbrb_10">
                        <ul class="list_none blog_meta">
                            <li><a href="#"><i class="ion-calendar"></i>16 May, 2019</a></li>
                            <li><a href="#"><i class="ion-chatbubbles"></i>2 Comment</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                	<div class="medium_divider"></div>
                	<a href="#" class="btn btn-default">View All Blog <i class="ion-ios-arrow-thin-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BLOG 

<!-- START SECTION CLIENT LOGO
<section>
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <h2>Our Client</h2>
                    </div>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                    <div class="small_divider"></div>
                </div>
            </div>
        </div>
    	<div class="row">
        	<div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.01s">
            	<div class="cl_logo_slider carousel_slider owl-carousel owl-theme" data-margin="15" data-loop="true" data-autoplay="true" data-dots="false" data-responsive='{"0":{"items": "2"}, "380":{"items": "3"}, "600":{"items": "4"}, "1000":{"items": "5"}, "1199":{"items": "6"}}'>
                	<div class="item">
                		<a href="#"><img src="assets/images/cl_logo1.png" alt="cl_logo1"></a>
                    </div>
                    <div class="item">
                		<a href="#"><img src="assets/images/cl_logo2.png" alt="cl_logo2"></a>
                    </div>
                    <div class="item">
                		<a href="#"><img src="assets/images/cl_logo3.png" alt="cl_logo3"></a>
                    </div>
                    <div class="item">
                		<a href="#"><img src="assets/images/cl_logo4.png" alt="cl_logo4"></a>
                    </div>
                    <div class="item">
                		<a href="#"><img src="assets/images/cl_logo5.png" alt="cl_logo5"></a>
                    </div>
                    <div class="item">
                		<a href="#"><img src="assets/images/cl_logo2.png" alt="cl_logo2"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CLIENT LOGO 

<!-- END SECTION CALL TO ACTION 
<section class="bg_default small_pt small_pb">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-md-8">
            	<div class="text_white cta_section">
                	<div class="medium_divider d-block d-md-none"></div>
                    <div class="heading_s1 heading_light">
                        <h2>Get The Coaching Training Today!</h2>
                    </div>
                    <p>If you are going to use a passage of embarrassing hidden in the middle of text</p>
                </div>
            </div>
            <div class="col-md-4">
            	<div class="text-md-right">
                    <a href="#" class="btn btn-outline-white">Get Started</a>
                </div>
                <div class="medium_divider d-block d-md-none"></div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CALL TO ACTION -->



<?php include "footer.php";?>



<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a> 

<!-- Latest jQuery --> 
<script src="assets/js/jquery-1.12.4.min.js"></script> 
<!-- jquery-ui --> 
<script src="assets/js/jquery-ui.js"></script>
<!-- popper min js --> 
<script src="assets/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap --> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script> 
<!-- owl-carousel min js  --> 
<script src="assets/owlcarousel/js/owl.carousel.min.js"></script> 
<!-- magnific-popup min js  --> 
<script src="assets/js/magnific-popup.min.js"></script> 
  
<script src="assets/js/waypoints.min.js"></script>
<!-- parallax js  --> 
<script src="assets/js/parallax.js"></script> 
<!-- countdown js  --> 
<script src="assets/js/jquery.countdown.min.js"></script> 
<!-- jquery.counterup.min js --> 
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- imagesloaded js --> 
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js --> 
<script src="assets/js/isotope.min.js"></script>
<!-- jquery.parallax-scroll js -->
<script src="assets/js/jquery.parallax-scroll.js"></script>
<!-- scripts js --> 
<script src="assets/js/scripts.js"></script>

<script src="assets/js/script-carrusal.js"></script>

</body>
</html>