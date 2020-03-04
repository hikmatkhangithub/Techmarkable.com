<?php

?>



<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#3ed2a7">
    <meta name="google-site-verification" content="1153nvgKCjyx-wnUunAJHYSos9U3oVyNX-RxMMh2Gqo" />
    <link rel="shortcut icon" href="./assets/img/logo/main-logo.png" />

    <title>Techmarkable</title>

    <link rel="stylesheet" href="https://use.typekit.net/scc6wwx.css">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/theme-vendors.min.css" />
    <link rel="stylesheet" href="assets/css/theme.min.css" />

    <link rel="stylesheet" href="assets/css/themes/seo.css" />

    <!--------------------------------------link for bottom to top button----------------------------------------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <!------------------------------------------------------------------------------------------------------------->

    <!-- Head Libs -->
    <script async src="assets/vendors/modernizr.min.js"></script>

    <style type="text/css">

        /*<!----------------------------------design for dropdown button----------------------->*/
        .topbar{
            background-color: #404040;
            width: 100%;
            font-size: 12px;
            color: #fff;
            text-align: center;
            position: relative;
            display: inline-block;
            padding-left: 65px;
        }
        .dropbtn {
            border: none;
            cursor: pointer;
        }
        .disclaimer{
            font-size: 15px;
            color: #f31e46;
        }
        .dropdown-button-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 200px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 20;
            padding: 5px;
            font-size: 13px;
            max-width: 500px;
        }

        .show {display: block;}
        /*<!---------------------------------------sticky menubar---------------------->*/
        .mainbar {
            width: 100%;
            height: auto;
        }
        .sticky{
            background-color: rgba(245, 242, 242, 0.99);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: -1;
        }
        .sticky .logo-default{
            position: relative;
            top: 0;
            left: 14px;
            max-width: 160px;
            padding-bottom: 8px;
        }
        /*<!---------------------------------------top to bottom button design---------------------->*/
        #button {
            display: inline-block;
            background-color: #FE506C;
            width: 50px;
            height: 50px;
            text-align: center;
            border-radius: 4px;
            position: fixed;
            bottom: 30px;
            right: 30px;
            transition: background-color .3s,
            opacity .5s, visibility .5s;
            opacity: 0;
            visibility: hidden;
            z-index: 1000;

        }
        #button::after {
            content: "\f077";
            font-family: FontAwesome;
            font-weight: normal;
            font-style: normal;
            font-size: 2em;
            line-height: 50px;
            color: #fff;
        }
        #button:hover {
            cursor: pointer;
            background-color: #333;
        }
        #button:active {
            background-color: #555;
        }
        #button.show {
            opacity: 1;
            visibility: visible;
        }

        /* Styles for the content section */

        .content {
            margin: 0px;
            font-family: 'Merriweather', serif;
            font-size: 17px;
            color: #6c767a;

        }
        /*--------------------------------------------------------------------------------------*/


        .pb-90 {
            padding-bottom: 0px !important;
        }
        .contact-us-section{

            padding: 0;
        }
        .pt-130 {
            padding-top: 0px !important;
        }
        .pb-130 {
            padding-bottom: 0px !important;
        }



        .circle.profile-img{
            object-fit: cover;
            width: 160px;
            height: 160px;
        }
        .ld-tm-img.text-center img.circle {
            width: 160px;
            height: 160px;
        }
        /*----------------------------------------------------------------------------*/
        .logo-default{
            position: relative;
            top: 0px;
            max-width: 120px;

        }
        .text-md-right{
            text-align: center !important;
        }
        .copy-right-text{
            margin: 0px;
            padding-top: 85px;
            padding-bottom: 0px;
        }
        .email-info {
            padding:  5px  0px 0px 40px;
        }
        .row-align-center{
            position: relative;
            width: 50%;
            margin: auto;
            text-align: center !important;
        }
        .col-align-center{
            width: auto;
            margin: auto;
        }
        .footer-copyright-text{
            font-size: 16px;
        }


        /*-----------------------Media queries--------------------------------------*/

        @media (max-width: 575.98px) {
            .main-navigation{
                position: relative;
                width: 100%;
                text-align: center;
                margin: auto;
                padding: 0px;
            }
            .logo-default{
                position: relative;
                margin: 0;
                top: 0px;
                padding: 0;
                width: 160px;
            }
            .copy-right-text{
                margin: 0px;
                padding-top: 25px;
            }
            .fullheight {
                min-height: 20vh;
            }

            .techmarkable-section {
                position: relative;
                width: 100%;
                margin: auto;

                text-align: center;
            }
            .techmarkable-section .lqd-column.col-lg-5.col-md-6  {
                width: 100%;
                margin: auto;


            }
            .techmarkable-text{
                font-size: 40px;
            }

            .mobile-logo-default {
                width: 120px;
            }
            .navbar-brand {
                padding: 0;
                margin: 0;
            }
            .logo-default {
                width: 120px;
            }
        }
        @media (min-width: 576px) and (max-width: 767.98px) {
            .main-navigation{
                position: relative;
                width: 100%;
                text-align: center;
                margin: auto;
                padding: 0px;
            }
            .logo-default{
                position: relative;
                margin: 0;
                top: 0px;
                padding: 0;
                width: 160px;
            }
            .copy-right-text{
                margin: 0px;
                padding-top: 25px;
            }
            .fullheight {
                min-height: 20vh;
            }


            .techmarkable-section {
                position: relative;
                width: 100%;
                margin: auto;

                text-align: center;
            }
            .techmarkable-section .lqd-column.col-lg-5.col-md-6  {
                width: 100%;
                margin: auto;


            }
            .techmarkable-text{
                font-size: 40px;
            }
            .mobile-logo-default{
                width: 120px;
            }
            .navbar-brand{

                padding: 0;
                margin: 0;
            }

            .logo-default{
                width: 120px;
            }
        }


        @media (min-width: 768px) and (max-width: 991.98px) {
            .mobile-logo-default{
                width: 120px;
            }
            .navbar-brand{

                padding: 0;
                margin: 0;
            }

            .logo-default{
                width: 120px;
            }
            .techmarkable-section {
                position: relative;
                width: 100%;
                margin: auto;

                text-align: center;
            }
            .techmarkable-section .lqd-column.col-lg-5.col-md-6  {
                width: 100%;
                margin: auto;


            }
            .techmarkable-text{
                font-size: 40px;
            }
        }


        @media (min-width: 992px) and (max-width: 1199.98px) {
            .circle.profile-img{
                object-fit: cover;
                width: 160px;
                height: 160px;
            }
            .ld-tm-img.text-center img.circle {
                width: 160px;
                height: 130px;
            }
            .col-md-8 {
                width: 68.666667%;
            }
            .col-md-2 {
                width: 19.666667%;
            }
            .techmarkable-section {
                position: relative;
                width: 100%;
                margin: auto;
                margin-top:80px;
                text-align: center;
            }
            .techmarkable-section .lqd-column.col-lg-5.col-md-6  {
                width: 100%;
                margin: auto;

            }
            .techmarkable-text{
                font-size: 60px;
            }
            .mobile-logo-default{

                width: 120px;
            }
            .navbar-brand{

                padding: 0;
                margin: 0;
            }

            .logo-default{
                width: 120px;
            }
        }


        @media (min-width: 1200px) {
            .techmarkable-text{
                font-size: 60px;
            }
            .col-md-8 {
                width: 68.666667%;
            }
            .col-md-2 {
                width: 19.666667%;
            }
            #primary-nav{
                position: absolute;
                top: 35px;
                right: 130px;
            }

            .footer-copyright-text{
                text-align: center;
            }
            .lqd-column.flex-wrap.align-items-center{
                width: 70%;
                margin: auto;
                padding: 0px 90px;
            }
            #mark-me{

                color:  #fd5c4c;
            }

            .lqd-column.footer-right{
                position: relative;
                top: 0;
                right: 55px;
            }
            .lqd-column.flex-wrap.align-items-center{
                width: 70%;
                margin: auto;
                padding: 0px 90px;
            }
            .email-info{

            }
            .circle.profile-img{
                object-fit: cover;
                width: 160px;
                height: 160px;
            }
            .ld-tm-img.text-center img.circle {
                width: 160px;
                height: 160px;
            }
            .techmarkable-section {
                width: 100%;
                margin: 0;
                margin-top: 30px;
                text-align: left;

            }
            .techmarkable-section .techmarkable-section-inner  {
                width: 100%;
                margin: auto;

            }
            .mobile-logo-default{

                width: 140px;
            }
            .navbar-brand{

                padding: 0;
                margin: 0;
            }

            .logo-default{
                width: 140px;
            }


        }

    </style>

</head>
<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-align="left" data-mobile-nav-style="modern" data-mobile-nav-shceme="gray" data-mobile-header-scheme="gray" data-mobile-nav-breakpoint="1199">
<!---------------------------------bottom to top button----------------->
<!-- Back to top button -->
<a id="button"></a>

<!-------------------------------------------------------->


<div id="wrap">

    <header class="main-header main-header-overlay">

        <div class="mainbar-wrap">
            <div class="megamenu-hover-bg"></div><!-- /.megamenu-hover-bg -->
            <div class="container-fluid mainbar-container">
                <div class="topbar">
                    <div class="dropdown-text-initial">This website does not belong to a real company. It is a Planspiel Web Engineering project."
                        <!--                             <button onclick="myFunction()" class="dropbtn">Do you know?</button>-->
                    </div>
                    <div id="myDropdown" class="dropdown-button-content">
                        <p> <span class="disclaimer">Disclaimer:</span> "This website does not belong to a real company. It is a Planspiel Web Engineering project. We are practicing an actual work of a company and working on latest innovative ideas </p>
                    </div>
                </div>
                <div class="mainbar">
                    <div class="row mainbar-row align-items-lg-stretch px-4">

                        <div class="col-auto">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="index1.html" rel="home">
										<span class="navbar-brand-inner">
											<img class="logo-dark" src="./assets/img/logo/main-logo.png" alt="Techmarkable">
											<img class="logo-sticky" src="./assets/img/logo/main-logo.png" alt="Techmarkable">
											<img class="mobile-logo-default" src="./assets/img/logo/main-logo.png" alt="Techmarkable">
											<img class="logo-default" src="./assets/img/logo/main-logo.png" alt="Techmarkable">
										</span>
                                </a>
                                <button type="button" class="navbar-toggle collapsed nav-trigger style-mobile" data-toggle="collapse" data-target="#main-header-collapse" aria-expanded="false" data-changeclassnames='{ "html": "mobile-nav-activated overflow-hidden" }'>
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="bars">
											<span class="bar"></span>
											<span class="bar"></span>
											<span class="bar"></span>
										</span>
                                </button>
                            </div><!-- /.navbar-header -->
                        </div><!-- /.col -->

                        <div class="col">

                            <div class="collapse navbar-collapse" id="main-header-collapse">

                                <ul id="primary-nav" class="main-nav nav align-items-lg-stretch justify-content-lg-start" data-submenu-options='{ "toggleType":"fade", "handler":"mouse-in-out" }' data-localscroll="true">

                                    <li>
                                        <a href="#wrap">
                                            <span class="link-icon"></span>
                                            <span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">
														Home
														<span class="submenu-expander">
															<i class="fa fa-angle-down"></i>
														</span>
													</span>
												</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#aboutus">
                                            <span class="link-icon"></span>
                                            <span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">
														About Us
														<span class="submenu-expander">
															<i class="fa fa-angle-down"></i>
														</span>
													</span>
												</span>
                                        </a>
                                    </li>
                                    <!------------------------------current project section------------------------------>
                                    <li>
                                        <a href="#currentproject">
                                            <span class="link-icon"></span>
                                            <span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">
														Projects
														<span class="submenu-expander">
															<i class="fa fa-angle-down"></i>
														</span>
													</span>
												</span>
                                        </a>
                                    </li>
                                    <!--------------------------------------------------------------------------------->
                                    <li>
                                        <a href="#team">
                                            <span class="link-icon"></span>
                                            <span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">
														Team
														<span class="submenu-expander">
															<i class="fa fa-angle-down"></i>
														</span>
													</span>
												</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#contactus">
                                            <span class="link-icon"></span>
                                            <span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">
														Contact Us
														<span class="submenu-expander">
															<i class="fa fa-angle-down"></i>
														</span>
													</span>
												</span>
                                        </a>
                                    </li>
                                </ul><!-- /#primary-nav  -->

                            </div><!-- /#main-header-collapse -->

                        </div><!-- /.col -->

                        <div class="col text-right">

                            <div class="header-module">

                            </div><!-- /.header-module -->



                        </div><!-- /.col -->

                    </div><!-- /.mainbar-row -->
                </div><!-- /.mainbar -->
            </div><!-- /.mainbar-container -->
        </div><!-- /.mainbar-wrap -->

    </header><!-- /.main-header -->

