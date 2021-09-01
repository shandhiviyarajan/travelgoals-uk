<?php

$message = $_POST["message"];
$subject = $_POST["subject"];
$from_email = $_POST["email_address"];
$full_name = $_POST["fullname"];

if($_POST["no_of_passengers"]){
    $no_of_passengers = $_POST["no_of_passengers"];
} else{
    $no_of_passengers="-";
}

if($_POST["travelling_dates"]){
    $travelling_dates = $_POST["travelling_dates"];
}else{
    $travelling_dates = "-";
}

  $headers .= "Return-Path: Inquiry <info@travelgoals.uk>\r\n"; 
  $headers .= "From: www.travelgoals.uk <info@travelgoals.uk>\r\n";  
  $headers .= "Organization: Travelgoals UK\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
  $headers .= "X-Priority: 3\r\n";
  $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
$body = '<img style="width:200px; margin:0 auto;" src="https://travelgoals.uk/public/images/travelgoals.uk-logo.png"/><br><br>';
  $body .= 'Full name - '.$full_name .'<br/>'.'From email address - '.$from_email.'<br>'.'Subject - '.$subject.'<br>'.$message.'<br>'.'No of passengers - '.$no_of_passengers.'<br>'.'Travelling dates - '.$travelling_date.'<br>';

?>

<?php

if($from_email){
    $mail = mail("info@travelgoals.uk","Inquiry | travelgoals.uk | Website",$body, $headers);
}

?>


<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta charset="UTF-8">
    <title>Contact Us | Travelgoals.uk | Making Travel Dreams Possible |</title>
    <link rel="icon" href="../public/images/favicon.png"/>
    <meta name="description" content="Book your holiday today | 15 Neptune Court Vanguard Way Cardiff, UK CF24 5PJ">
    <meta name="keywords" content="travelgoals, travelgoalsuk, UK, travel, book, book travel, contact us, contact, call, email, 15 Neptune Court Vanguard Way Cardiff, UK CF24 5PJ"/>
<!-- Facebook Meta Tags -->
<meta property="og:url" content="https://travelgoals.uk/contactus">
<meta property="og:type" content="website">
<meta property="og:title" content="Travelgoals.uk | Contact us | Book your holiday today!">
<meta property="og:description" content="Book your holiday today | 15 Neptune Court Vanguard Way Cardiff, UK CF24 5PJ">
<meta property="og:image" content="https://www.travelgoals.uk/public/images/travelgoals.uk.og-image-home.jpg">

    <!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="travelgoals.uk">
<meta property="twitter:url" content="https://travelgoals.uk/contactus">
<meta name="twitter:title"content="Travelgoals.uk | Contact us | Book your holiday today!">
<meta name="twitter:description" content="Book your holiday today | 15 Neptune Court Vanguard Way Cardiff, UK CF24 5PJ">
<meta name="twitter:image" content="https://www.travelgoals.uk/public/images/travelgoals.uk.og-image-home.jpg">
    

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width initial-scale=1.0, maximum-scale=1.0,
          minimum-scale=1.0, user-scalable=no shrink-to-fit=no">
    <meta name="google-site-verification"
          content="" />
    <link rel='stylesheet' id='gdlr-core-google-font-css'  href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CABeeZee%3Aregular%2Citalic&amp;subset=latin%2Clatin-ext%2Cdevanagari&amp;ver=5.2.4' type='text/css' media='all' />
    <link rel='stylesheet' href='../public/plugins/revslider/public/assets/css/settings.css' type='text/css' media='all' />
    <link rel='stylesheet' href='../public/plugins/tourmaster/plugins/elegant-font/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='../public/plugins/tourmaster/tourmaster.css' type='text/css' media='all' />
    <link rel='stylesheet' href='../public/plugins/goodlayers-core/plugins/combine/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='../public/plugins/goodlayers-core/include/css/page-builder.css' type='text/css' media='all' />
    <link rel='stylesheet' href='../public/css/tourmaster-style-custom.css' type='text/css' media='all' />
    <link rel='stylesheet' href='../public/css/style-core.css' type='text/css' media='all' />
    <link rel='stylesheet' href='../public/css/traveltour-style-custom.css' type='text/css' media='all' />
    <link rel='stylesheet' href="../public/css/custom.css" type="text/css" media="all"/>

<!--    <script type="text/javascript"-->
<!--            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANIg-GgobIKa95MgdD4_WwreBVpregN6c&libraries=places&v=3.31"></script>-->

</head>

<body class="home page-template-default page page-id-5225 gdlr-core-body tourmaster-body traveltour-body traveltour-body-front traveltour-full  traveltour-with-sticky-navigation gdlr-core-link-to-lightbox">

<main>


<div class="traveltour-mobile-header-wrap">
    <div class="traveltour-top-bar">
        <div class="traveltour-top-bar-background"></div>
        <div class="traveltour-top-bar-container clearfix traveltour-top-bar-full ">
            <div class="traveltour-top-bar-left traveltour-item-pdlr travel-tour-hide-on-mobile"><i class="fa fa-phone"
                                                                                                    style="font-size: 16px ;color: #fff ;margin-right: 10px ;"></i>
                                                                                                    <a style="color:#fff;" href="tel:02081257007">02081257007</a>
                <i class="fa fa-envelope-o" style="font-size: 16px ;color: #94999f ;margin-left: 30px ;margin-right: 10px ;"></i> info@travelgoals.uk
            </div>
            <div class="traveltour-top-bar-right traveltour-item-pdlr">
                <div class="traveltour-top-bar-right-social"><a href="https://www.facebook.com/TravelGoalsUK/" target="_blank" class="traveltour-top-bar-social-icon" title="facebook"><i class="fa fa-facebook" ></i></a><a href="#" target="_blank" class="traveltour-top-bar-social-icon" title="flickr"><i class="fa fa-flickr" ></i></a><a href="#" target="_blank" class="traveltour-top-bar-social-icon" title="google-plus"><i class="fa fa-google-plus" ></i></a><a href="#" target="_blank" class="traveltour-top-bar-social-icon" title="twitter"><i class="fa fa-twitter" ></i></a></div>
                <div class="tourmaster-user-top-bar tourmaster-guest">

                </div>
            </div>
        </div>
    </div>
    <div class="traveltour-mobile-header traveltour-header-background traveltour-style-slide" id="traveltour-mobile-header">
        <div class="traveltour-mobile-header-container traveltour-container">
            <div class="traveltour-logo  traveltour-item-pdlr">
                <div class="traveltour-logo-inner" style="width:200px; padding-left:24px;">
                    <a href="/"><img src="../public/images/travelgoals.uk-logo.png" alt="travelgoals.uk-logo"
                                     name="travelgoals.uk-logo"
                                     width="250" height="52" title="travelgoals.uk-logo" /></a>
                </div>
            </div>
            <div class="traveltour-mobile-menu-right">
                <div class="traveltour-main-menu-search" id="traveltour-mobile-top-search"><i class="fa fa-search"></i></div>
                <div class="traveltour-top-search-wrap">
                    <div class="traveltour-top-search-close"></div>

                    <div class="traveltour-top-search-row">
                        <div class="traveltour-top-search-cell">
                            <form role="search" method="get" class="search-form" action="index.html">
                                <input type="text" class="search-field traveltour-title-font" placeholder="Search..." value="" name="s">
                                <div class="traveltour-top-search-submit"><i class="fa fa-search"></i></div>
                                <input type="submit" class="search-submit" value="Search">
                                <div class="traveltour-top-search-close"><i class="icon_close"></i></div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="traveltour-mobile-menu"><a class="traveltour-mm-menu-button traveltour-mobile-menu-button traveltour-mobile-button-hamburger" href="#traveltour-mobile-menu"><span></span></a>
                    <div class="traveltour-mm-menu-wrap traveltour-navigation-font" id="traveltour-mobile-menu" data-slide="right">
                        <ul id="menu-main-navigation" class="m-menu">
                            <li class="menu-item"><a href="/">Home</a></li>
                            <li class="menu-item "><a href="/aboutus">About us</a></li>
                            <li class="menu-item   "><a href="/services">Services</a></li>
                            <li class="menu-item"><a href="/destinations">Destinations</a></li>
                            <li class="menu-item "><a href="/exclusive-deals">Exclusive Deals</a></li>
                            <li class="menu-item"><a href="/contactus">Contact us</a>
<!--                                <ul class="sub-menu">-->
<!--                                    <li class="menu-item menu-item-has-children"><a href="blog-full-right-sidebar-with-frame.html">Blog Full</a>-->
<!--                                        <ul class="sub-menu">-->
<!--                                            <li class="menu-item"><a href="blog-full-right-sidebar-with-frame.html">Blog Full Right Sidebar With Frame</a></li>-->
<!--                                            <li class="menu-item"><a href="blog-full-left-sidebar-with-frame.html">Blog Full Left Sidebar With Frame</a></li>-->
<!--                                            <li class="menu-item"><a href="blog-full-both-sidebar-with-frame.html">Blog Full Both Sidebar With Frame</a></li>-->
<!--                                            <li class="menu-item"><a href="blog-full-right-sidebar.html">Blog Full Right Sidebar</a></li>-->
<!--                                            <li class="menu-item"><a href="blog-full-left-sidebar.html">Blog Full Left Sidebar</a></li>-->
<!--                                            <li class="menu-item"><a href="blog-full-both-sidebar.html">Blog Full Both Sidebar</a></li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                    <li class="menu-item menu-item-has-children"><a href="blog-grid-3-columns-no-space.html">Blog Grid</a>-->
<!--                                        <ul class="sub-menu">-->
<!--                                            <li class="menu-item"><a href="blog-grid-2-columns.html">Blog Grid 2 Columns</a></li>-->
<!--                                            <li class="menu-item"><a href="blog-grid-3-columns.html">Blog Grid 3 Columns</a></li>-->
<!--                                            <li class="menu-item"><a href="blog-grid-4-columns.html">Blog Grid 4 Columns</a></li>-->
<!--                                            <li class="menu-item"><a href="blog-grid-2-columns-no-space.html">Blog Grid 2 Columns No Space</a></li>-->
<!--                                            <li class="menu-item"><a href="blog-grid-3-columns-no-space.html">Blog Grid 3 Columns No Space</a></li>-->
<!--                                            <li class="menu-item"><a href="blog-grid-4-columns-no-space.html">Blog Grid 4 Columns No Space</a></li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                    <li class="menu-item menu-item-has-children"><a href="blog-3-columns-with-frame.html">Blog Columns</a>-->
<!--                                        <ul class="sub-menu">-->
<!--                                            <li class="menu-item"><a href="blog-2-columns-with-frame.html">Blog 2 Columns With Frame</a></li>-->
<!--                                            <li class="menu-item"><a href="blog-3-columns-with-frame.html">Blog 3 Columns With Frame</a></li>-->
<!--                                            <li class="menu-item"><a href="blog-4-columns-with-frame.html">Blog 4 Columns With Frame</a></li>-->
<!--                                            <li class="menu-item"><a href="blog-2-columns.html">Blog 2 Columns</a></li>-->
<!--                                            <li class="menu-item"><a href="blog-3-columns.html">Blog 3 Columns</a></li>-->
<!--                                            <li class="menu-item"><a href="blog-4-columns.html">Blog 4 Columns</a></li>-->
<!--                                            <li class="menu-item"><a href="blog-3-columns-with-frame-post-format.html">Blog Columns With Post Format</a></li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                    <li class="menu-item"><a href="standard-post-type.html" >Single Post</a></li>-->
<!--                                </ul>-->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="traveltour-body-outer-wrapper ">
        <div class="traveltour-body-wrapper clearfix  traveltour-with-frame">
            <div class="traveltour-top-bar traveltour-with-divider">
                <div class="traveltour-top-bar-background"></div>
                <div class="traveltour-top-bar-container clearfix traveltour-top-bar-full ">
                    <div class="traveltour-top-bar-left traveltour-item-pdlr">
                        <i class="fa fa-phone" style="font-size: 16px ;color: #94999f ;margin-right: 10px ;"></i>
                        <a style="color:#fff;" href="tel:02081257007">02081257007</a>
                        <i class="fa fa-envelope-o" style="font-size: 16px ;color: #94999f ;margin-left: 30px ;margin-right: 10px ;"></i> info@travelgoals.uk</div>
                    <div class="traveltour-top-bar-right traveltour-item-pdlr">
                        <div class="traveltour-top-bar-right-social">
                            <a href="https://www.facebook.com/TravelGoalsUK/" target="_blank" class="traveltour-top-bar-social-icon" title="facebook"><i class="fa fa-facebook" ></i></a>
                            <a href="#" target="_blank" class="traveltour-top-bar-social-icon" title="twitter"><i class="fa fa-twitter" ></i></a></div>

                    </div>
                </div>
            </div>
            <!-- header -->
            <header class="traveltour-header-wrap traveltour-header-style-plain  
traveltour-style-menu-right traveltour-sticky-navigation traveltour-style-fixed">
    <div class="traveltour-header-background"></div>
    <div class="traveltour-header-container  traveltour-container">

        <div class="traveltour-header-container-inner clearfix">
            <div class="traveltour-logo  traveltour-item-pdlr">
                <div class="traveltour-logo-inner">
                    <a href="/"><img src="../public/images/travelgoals.uk-logo.png"
                                     alt="Travelgoals.uk-logo"
                                     name="Travelgoals.uk"
                                     width="250" height="52"
                                     title="Travelgoals.uk"/>
                    </a>
                </div>
            </div>
            <div class="traveltour-navigation traveltour-item-pdlr clearfix ">
                <div class="traveltour-main-menu" id="traveltour-main-menu">
                    <ul id="menu-main-navigation-1" class="sf-menu">
                        <li class=" menu-item  traveltour-normal-menu"><a href="/" class="sf-with-ul-pre">Home</a>
                        </li>
                        <li class=" menu-item traveltour-normal-menu"><a href="/aboutus" class="sf-with-ul-pre">About us</a>
                        </li>
                        <li class=" menu-item traveltour-normal-menu"><a href="/services">Services</a></li>
                        <li class=" menu-item menu-item-has-children traveltour-normal-menu"><a
                                href="/destinations" class="sf-with-ul-pre">Destinations</a>
                        </li>
                        <li class=" menu-item  traveltour-normal-menu"><a href="/exclusive-deals" class="sf-with-ul-pre">Exclusive
                            Deals</a></li>
                        <li class="current-menu-item menu-item traveltour-normal-menu"><a href="/contactus">Contact Us</a></li>
                    </ul>
                    <div class="traveltour-navigation-slide-bar" id="traveltour-navigation-slide-bar"></div>
                </div>
                <div class="traveltour-main-menu-right-wrap clearfix ">
                    <div class="traveltour-main-menu-search" id="traveltour-top-search"><i class="fa fa-search"></i>
                    </div>
                    <div class="traveltour-top-search-wrap">
                        <div class="traveltour-top-search-close"></div>
                        <div class="traveltour-top-search-row">
                            <div class="traveltour-top-search-cell">
                                <form role="search" method="get" class="search-form" action="https://www.google.com/search">
                                    <input type="text" class="search-field traveltour-title-font"
                                           placeholder="Search travelgoals.uk" value="" name="q">
                                    <div class="traveltour-top-search-submit"><i class="fa fa-search"></i></div>
                                    <input type="submit" class="search-submit" value="Search">
                                    <div class="traveltour-top-search-close"><i class="icon_close"></i></div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- travel tour-navigation -->
        </div>
        <!-- travel tour-header-inner -->
    </div>
    <!-- travel tour-header-container -->
</header>

            <!-- body-->
            


<div class="traveltour-body-outer-wrapper ">
    <div class="traveltour-body-wrapper clearfix  traveltour-with-frame">
        <div class="traveltour-page-wrapper" id="traveltour-page-wrapper">
            <div class="gdlr-core-page-builder-body">
                <div class="gdlr-core-pbf-wrapper " style="padding: 350px 0px 160px 0px;" data-skin="Dark">
                    <div class="gdlr-core-pbf-background-wrap">
                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url('../public//images/travelgoals.uk-contactus1920X1280.jpg') ;background-size: cover ;background-position: center ;" data-parallax-speed="0.5"></div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js " data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                                    <div class="gdlr-core-title-item-title-wrap">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                            style="font-size: 75px ;letter-spacing: 0px ;text-transform: none ;">Contact Us<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 25px ;margin-top: 25px ;">
                                            Book your holiday today!</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper ">
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 55px ;"><i class=" gdlr-core-icon-item-icon fa fa-phone" style="color: #454545 ;font-size: 40px ;min-width: 40px ;min-height: 40px ;"></i></div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                <div class="gdlr-core-title-item-title-wrap">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 24px ;letter-spacing: 0px ;text-transform: none ;">Phone<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                                    <p>Speak to one of our agents about your next holiday getaway.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                                    <p><a href="tel:02081257007">02081257007</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " data-gdlr-animation="fadeInDown" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 55px ;"><i class=" gdlr-core-icon-item-icon fa fa-envelope-o" style="color: #454545 ;font-size: 40px ;min-width: 40px ;min-height: 40px ;"></i></div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                <div class="gdlr-core-title-item-title-wrap">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 24px ;letter-spacing: 0px ;text-transform: none ;">Email<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                                    <p>Tell us where you want to go, we’ll plan your dream holiday.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                                    <p><a href="#">info@travelgoals.uk</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 55px ;"><i class=" gdlr-core-icon-item-icon fa fa-location-arrow" style="color: #454545 ;font-size: 40px ;min-width: 40px ;min-height: 40px ;"></i></div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                <div class="gdlr-core-title-item-title-wrap">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 24px ;letter-spacing: 0px ;text-transform: none ;">Location<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                                <p>15 Neptune Court <br>
Vanguard Way<br>
Cardiff, UK<br>
CF24 5PJ </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                                    <p><a href="#">View On Google Map</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 95px 0px 90px 0px;" data-skin="Grey">
                    <div class="gdlr-core-pbf-background-wrap" style="background-color: #f3f3f3 ;"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " style="max-width: 760px ;">
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                                                <div class="gdlr-core-title-item-title-wrap">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 32px ;letter-spacing: 0px ;text-transform: none ;">Drop us a Message
                                                        <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 19px ;font-style: normal ;">We’ll be in touch right away!
</span></div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-divider-item-normal gdlr-core-center-align" style="margin-bottom: 50px ;">
                                                <div class="gdlr-core-divider-container" style="max-width: 40px ;">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #2b2b2b ;border-bottom-width: 2px ;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                                <div role="form" class="wpcf7" id="wpcf7-f1319-p1964-o1" lang="en-US" dir="ltr">
                                                    <div class="screen-reader-response"></div>
                                                    <div style="font-size:16px; font-weight:bold;">
                                                        <?php
                                                        if($mail){
                                                            echo 'Your mail has been sent successfully.';
                                                        } else{
                                                            echo 'Please fill the form to send and inquriy.';
                                                        }
                                                        ?>
                                                    </div>
                                                    <form method= "post" 
                                                    action="/contactus/index.php" 
                                                    style="font-size:16px;">
                                                        <div class="quform-elements">
                                                            <div class="quform-element">
                                                                <p>
                                                                    <br>
                                                                    <span class="wpcf7-form-control-wrap your-name">

                                                                            <input required style="font-size:16px;" id="name" type="text" name="fullname" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name (required)">
                                                                        </span>
                                                                </p>
                                                            </div>
                                                            <div class="quform-element">
                                                                <p>
                                                                    <br>
                                                                    <span class="wpcf7-form-control-wrap your-email">
                                                                            <input style="font-size:16px;" id="email" type="text" name="email_address" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email (required)">
                                                                        </span>
                                                                </p>
                                                            </div>
                                                            <div class="quform-element">
                                                                <p>
                                                                    <br>
                                                                    <span class="wpcf7-form-control-wrap your-name">

                                                                            <input style="font-size:16px;" 
                                                                            required id="subject" 
                                                                            type="text" 
                                                                            name="subject" 
                                                                            size="40" 
                                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Subject (required)">
                                                                        </span>
                                                                </p>
                                                            </div>
                                                            <div class="quform-element">
                                                                <p>
                                                                    <br>
                                                                    <span class="wpcf7-form-control-wrap your-message">
                                                                            <textarea  style="font-size:16px;" id="message" name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your Message"></textarea>
                                                                        </span>
                                                                </p>
                                                            </div>
                                                            <div class="quform-element">
                                                                <p>
                                                                    <span class="wpcf7-form-control-wrap your-name">
                                                                            <input  style="font-size:16px;" 
                                                                            id="name" 
                                                                            type="text" 
                                                                            name="no_of_passengers" 
                                                                            size="40" 
                                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" 
                                                                            placeholder="No of Passengers">
                                                                        </span>
                                                                </p>
                                                            </div>
                                                            <div class="quform-element">
                                                                <p>
                                                                <br>
                                                                    <span class="wpcf7-form-control-wrap your-name">

                                                                            <input  style="font-size:16px;" 
                                                                            id="name" 
                                                                            type="date" 
                                                                            name="travelling_dates" 
                                                                            size="40" 
                                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" 
                                                                            placeholder="Travelling dates">
                                                                        </span>
                                                                </p>
                                                            </div>
                                                            <p>
                                                                <!-- Begin Submit button -->
                                                            <div class="quform-submit">
                                                                <div class="quform-submit-inner">
                                                                    <button type="submit" class="submit-button"><span>Submit Now</span></button>
                                                                </div>
                                                                <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                            </div>
                                                            </p>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-wp-google-map-plugin-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">
                                    <!-- <div class="wpgmp_map_container wpgmp-map-1" rel="map1">
                                        <div class="wpgmp_map " style="width:100%; height:450px;" id="map1"></div>
                                    </div> -->

                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.136660685107!2d-3.1546734840579087!3d51.474005779629664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486e1cd3220ffffd%3A0x7e2532858b6c0131!2s15%20Neptune%20Ct%2C%20Vanguard%20Way%2C%20Cardiff%20CF24%205PJ%2C%20UK!5e0!3m2!1sen!2slk!4v1630527523778!5m2!1sen!2slk"  style="border:0; width:100%; height:400px;" allowfullscreen="" loading="lazy"></iframe>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-wrapper " style="padding: 80px 0px 50px 0px;">
                    <div class="gdlr-core-pbf-background-wrap" style="background-color: #ffffff ;"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-item-pdlr"><a href="mailto:#" target="_blank" class="gdlr-core-social-network-icon" title="email" style="font-size: 20px ;color: #1e1e1e ;"><i class="fa fa-envelope" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="font-size: 20px ;color: #1e1e1e ;margin-left: 40px ;"><i class="fa fa-facebook" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="google-plus" style="font-size: 20px ;color: #1e1e1e ;margin-left: 40px ;"><i class="fa fa-google-plus" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="skype" style="font-size: 20px ;color: #1e1e1e ;margin-left: 40px ;"><i class="fa fa-skype" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="font-size: 20px ;color: #1e1e1e ;margin-left: 40px ;"><i class="fa fa-twitter" ></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div><a href="#traveltour-top-anchor" class="traveltour-footer-back-to-top-button" id="traveltour-footer-back-to-top-button"><i class="fa fa-angle-up" ></i></a>
<footer>
    <div class="traveltour-footer-wrapper  traveltour-with-column-divider">
        <div class="traveltour-footer-container traveltour-container clearfix">
            <div class="traveltour-footer-column traveltour-item-pdlr traveltour-column-20">
                <div id="text-3" class="widget widget_text traveltour-widget">
                    <div class="textwidget">
                        <h3 class="traveltour-widget-title">
                            <span class="traveltour-widget-head-text">Travelgoals.uk</span></h3>
                        <span class="gdlr-core-space-shortcode" style="margin-top: 21px ;"></span> Tailor-made experiences and vacation getaways to the most majestic and magical travel destinations on the planet.
                        <span class="gdlr-core-space-shortcode" style="margin-top: 25px ;"></span>
                    </div>
                </div>
            </div>
            <div class="traveltour-footer-column traveltour-item-pdlr traveltour-column-20">
                <div id="tourmaster-widget-tour-category-6" class="widget widget_tourmaster-widget-tour-category traveltour-widget">
                    <h3 class="traveltour-widget-title">
                        <span class="traveltour-widget-head-text">Popular Destinations</span></h3><span class="clear"></span>
                    <div class="tourmaster-widget-tour-category">
                        <div class="tourmaster-tour-category-widget-holder clearfix">
                            <div class="tourmaster-tour-category-widget tourmaster-item-list  tourmaster-column-20 tourmaster-column-first tourmaster-with-thumbnail">
                                <div class="tourmaster-tour-category-thumbnail tourmaster-media-image"><img src="/public/images/travelgoals.uk-Bali-Indonesia1200X567.jpg" alt="" /></div>
                                <div class="tourmaster-tour-category-overlay"></div>
                                <div class="tourmaster-tour-category-head">
                                    <div class="tourmaster-tour-category-head-table">
                                        <h3 class="tourmaster-tour-category-title"><a class="tourmaster-tour-category-head-link" href="/destinations" >Bali - Indonesia</a></h3></div>
                                </div>
                            </div>
                            <div class="tourmaster-tour-category-widget tourmaster-item-list  tourmaster-column-20 tourmaster-with-thumbnail">
                                <div class="tourmaster-tour-category-thumbnail tourmaster-media-image"><img src="/public/images/travelgoals.uk-far-east-asia400X400.jpg" alt=""  /></div>
                                <div class="tourmaster-tour-category-overlay"></div>
                                <div class="tourmaster-tour-category-head">
                                    <div class="tourmaster-tour-category-head-table">
                                        <h3 class="tourmaster-tour-category-title"><a class="tourmaster-tour-category-head-link" href="/destinations" >The Far East</a></h3></div>
                                </div>
                            </div>
                            <div class="tourmaster-tour-category-widget tourmaster-item-list  tourmaster-column-20 tourmaster-with-thumbnail">
                                <div class="tourmaster-tour-category-thumbnail tourmaster-media-image"><img src="/public/images/travelgoals.uk-maldives400X400.jpg" alt=""  /></div>
                                <div class="tourmaster-tour-category-overlay"></div>
                                <div class="tourmaster-tour-category-head">
                                    <div class="tourmaster-tour-category-head-table">
                                        <h3 class="tourmaster-tour-category-title"><a class="tourmaster-tour-category-head-link" href="/destinations" >Maldives</a></h3></div>
                                </div>
                            </div>
                            <div class="tourmaster-tour-category-widget tourmaster-item-list  tourmaster-column-20 tourmaster-column-first tourmaster-with-thumbnail">
                                <div class="tourmaster-tour-category-thumbnail tourmaster-media-image"><img src="/public/images/travelgoals.uk-south-america400X400.jpg" alt=""  /></div>
                                <div class="tourmaster-tour-category-overlay"></div>
                                <div class="tourmaster-tour-category-head">
                                    <div class="tourmaster-tour-category-head-table">
                                        <h3 class="tourmaster-tour-category-title"><a class="tourmaster-tour-category-head-link"href="/destinations" >South America</a></h3></div>
                                </div>
                            </div>
                            <div class="tourmaster-tour-category-widget tourmaster-item-list  tourmaster-column-20 tourmaster-with-thumbnail">
                                <div class="tourmaster-tour-category-thumbnail tourmaster-media-image"><img src="/public/images/travelgoals.uk-middle-east400X400.jpg" alt=""  /></div>
                                <div class="tourmaster-tour-category-overlay"></div>
                                <div class="tourmaster-tour-category-head">
                                    <div class="tourmaster-tour-category-head-table">
                                        <h3 class="tourmaster-tour-category-title"><a class="tourmaster-tour-category-head-link" href="/destinations" >Middle East</a></h3></div>
                                </div>
                            </div>
                            <div class="tourmaster-tour-category-widget tourmaster-item-list  tourmaster-column-20 tourmaster-with-thumbnail">
                                <div class="tourmaster-tour-category-thumbnail tourmaster-media-image"><img src="/public/images/travelgoals.uk-paris700X500.jpg" alt="" /></div>
                                <div class="tourmaster-tour-category-overlay"></div>
                                <div class="tourmaster-tour-category-head">
                                    <div class="tourmaster-tour-category-head-table">
                                        <h3 class="tourmaster-tour-category-title"><a class="tourmaster-tour-category-head-link" href="/destinations" >Paris</a></h3></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="traveltour-footer-column traveltour-item-pdlr traveltour-column-20">
                <div id="text-2" class="widget widget_text traveltour-widget">
                    <h3 class="traveltour-widget-title"><span class="traveltour-widget-head-text">Location</span></h3><span class="clear"></span>
                    <div class="textwidget">
<p>15 Neptune Court <br>
Vanguard Way<br>
Cardiff, UK<br>
CF24 5PJ </p>
                            <br /> <span class="gdlr-core-space-shortcode" style="margin-top: -13px ;"></span>
                            <br /> <a href="tel:02081257007">02081257007</a>
                            <br /> <span class="gdlr-core-space-shortcode" style="margin-top: -13px ;"></span>
                            <br /> info@travelgoals.uk</p>
                        <p><span class="gdlr-core-space-shortcode" style="margin-top: 20px ;"></span>
                            <br /> <a href="https://www.facebook.com/TravelGoalsUK/" target="_blank"><i class="fa fa-facebook" style="font-size: 18px ;color: #ffffff ;margin-right: 20px ;"  ></i></a> <a href="#" target="_blank"><i class="fa fa-twitter" style="font-size: 18px ;color: #ffffff ;margin-right: 20px ;"  ></i></a> <a href="#" target="_blank"><i class="fa fa-linkedin" style="font-size: 18px ;color: #ffffff ;margin-right: 20px ;"  ></i></a>  </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="traveltour-footer-wrapper ">
        <div class="traveltour-footer-container traveltour-container clearfix">
            <div class="traveltour-footer-column traveltour-item-pdlr traveltour-column-15">
                <div id="text-1" class="widget widget_text traveltour-widget">
                    <div class="textwidget">
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top" style="padding-bottom: 5px ;">
                            <div class="gdlr-core-title-item-title-wrap ">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 17px ;text-transform: none ;color: #f97150 ;">Call Us<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                        </div>
                        <i class="icon_phone" style="font-size: 17px ;color: #ffffff ;margin-right: 8px ;"></i> <span style="font-size: 18px; color: #fff;">02081257007</span>
                        <span class="gdlr-core-space-shortcode" style="margin-top: 22px ;"></span>
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top" style="padding-bottom: 5px ;">
                            <div class="gdlr-core-title-item-title-wrap ">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 17px ;text-transform: none ;color: #f97150 ;">Email<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                        </div> <span style="font-size: 18px; color: #fff;">info@travelgoals.uk</span></div>
                </div>
            </div>
            <div class="traveltour-footer-column traveltour-item-pdlr traveltour-column-15">
                <div id="gdlr-core-custom-menu-widget-2" class="widget widget_gdlr-core-custom-menu-widget traveltour-widget">
                    <h3 class="traveltour-widget-title"><span class="traveltour-widget-head-text">Travelgoals.uk</span></h3><span class="clear"></span>
                    <div class="menu-about-us-container">
                        <ul id="menu-about-us" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                            <li class="menu-item"><a href="/services">Services</a></li>
                            <li class="menu-item"><a href="/aboutus">About us</a></li>
                            <li class="menu-item"><a href="/destinations">Destinations</a></li>
                            <li class="menu-item"><a href="/exclusive-deals">Exclusive Deals</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="traveltour-footer-column traveltour-item-pdlr traveltour-column-15">
                <div id="gdlr-core-custom-menu-widget-3" class="widget widget_gdlr-core-custom-menu-widget traveltour-widget">
                    <h3 class="traveltour-widget-title"><span class="traveltour-widget-head-text">Support</span></h3><span class="clear"></span>
                    <div class="menu-support-container">
                        <ul id="menu-support" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                            <li class="menu-item"><a href="/contactus">Contact us</a></li>
                            <li class="menu-item"><a href="/privacy-policy">Privacy policy</a></li>

                            <li class="menu-item"><a href="/sitemap.xml">Site map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="traveltour-footer-column traveltour-item-pdlr traveltour-column-15">
                <div id="text-15" class="widget widget_text traveltour-widget">

                </div>
            </div>
        </div>
    </div>
    <div class="traveltour-copyright-wrapper ">
        <div class="traveltour-copyright-container traveltour-container clearfix">
            <div class="traveltour-copyright-left traveltour-item-pdlr">© 2021 Travel Goals UK  -  All Rights Reserved.</div>
<!--            <div class="traveltour-copyright-right traveltour-item-pdlr">Follow Us On-->
<!--                <a href="#" target="_blank"><i class="fa fa-facebook" style="font-size: 14px ;color: #ffffff ;margin-left: 12px ;margin-right: 10px ;"  ></i></a>-->
<!--                <a href="#" target="_blank"><i class="fa fa-twitter" style="font-size: 14px ;color: #ffffff ;margin-right: 10px ;"  ></i></a>-->
<!--                <a href="#" target="_blank"><i class="fa fa-linkedin" style="font-size: 14px ;color: #ffffff ;margin-right: 10px ;"  ></i></a>-->
<!--        </div>-->
    </div>
    <script type='text/javascript' src='/public/js/jquery/jquery.js'></script>
    <script type='text/javascript' src='/public/js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='/public/js/jquery/ui/core.min.js'></script>
    <script type='text/javascript' src='/public/js/jquery/ui/datepicker.min.js'></script>
    <script type='text/javascript' src='/public/js/jquery/ui/effect.min.js'></script>
    <script type='text/javascript' src='/public/plugins/tourmaster/tourmaster.js'></script>
    <script type='text/javascript' src='/public/js/plugins.js'></script>
    <script type='text/javascript' src='/public/plugins/goodlayers-core/plugins/combine/script.js'></script>

    <script type='text/javascript' src='/public/plugins/goodlayers-core/include/js/page-builder.js'></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo "></script>
    <script type='text/javascript'>
      var wpgmp_local = {
        "all_location": "All",
        "show_locations": "Show Locations",
        "sort_by": "Sort by",
        "wpgmp_not_working": "not working...",
        "place_icon_url": "https:////demo.goodlayers.com//kleanity//wp-content//plugins//wp-google-map-plugin//assets//images//icons//"
      };
    </script>
    <script type='text/javascript' src='/public/plugins/google-map-plugin/assets/js/maps.js?'></script>
    <script type='text/javascript' src='/public/plugins/google-map-plugin/assets/js/frontend.js'></script>

    <script>
      jQuery(document).ready(function($) {
        var map1 = $("#map1").maps({
          "map_options": {
            "center_lat": "51.5073509",
            "center_lng": "-0.12775829999998223",
            "zoom": 16,
            "map_type_id": "ROADMAP",
            "draggable": true,
            "scroll_wheel": false,
            "display_45_imagery": "",
            "marker_default_icon": "upload/default_marker.png",
            "infowindow_setting": "",
            "infowindow_bounce_animation": "",
            "infowindow_drop_animation": false,
            "close_infowindow_on_map_click": false,
            "default_infowindow_open": false,
            "infowindow_open_event": "click",
            "full_screen_control": false,
            "search_control": true,
            "zoom_control": true,
            "map_type_control": false,
            "street_view_control": false,
            "full_screen_control_position": "TOP_RIGHT",
            "search_control_position": null,
            "zoom_control_position": "TOP_LEFT",
            "map_type_control_position": "TOP_RIGHT",
            "map_type_control_style": "HORIZONTAL_BAR",
            "street_view_control_position": "TOP_LEFT",
            "map_control": true,
            "map_control_settings": null,
            "width": "",
            "height": "450"
          },
          "places": [{
            "id": "1",
            "title": "London",
            "address": "London, United Kingdom",
            "source": "manual",
            "content": "London",
            "location": {
              "icon": "upload/default_marker.png",
              "lat": "51.5073509",
              "lng": "-0.12775829999998223",
              "city": "London",
              "state": "England",
              "country": "United Kingdom",
              "onclick_action": "marker",
              "redirect_custom_link": "",
              "marker_image": null,
              "open_new_tab": "yes",
              "postal_code": "",
              "draggable": false,
              "infowindow_default_open": false,
              "animation": "BOUNCE",
              "infowindow_disable": true,
              "zoom": 5,
              "extra_fields": null
            },
            "categories": [],
            "custom_filters": null
          }],
          "street_view": null,
          "map_property": {
            "map_id": "1"
          }
        }).data("wpgmp_maps");
      });
    </script>
    <script type="text/javascript" src="/public/plugins/quform/js/plugins.js"></script>
    <script type="text/javascript" src="/public/plugins/quform/js/scripts.js"></script>

</footer>


        </div>
    </div>
</main>

</body>
</html>




