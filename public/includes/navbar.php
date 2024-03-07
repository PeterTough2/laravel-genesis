<?php

$pagelink = basename($_SERVER['PHP_SELF']);

$home_active = $about_active = $service_active = "";
if ($pagelink == 'index') {
    $home_active = "active";
}if ($pagelink == 'about') {
    $about_active = "active";
}if (($pagelink == 'business_consulting_services') || ($pagelink == 'commercial_loan_services') || ($pagelink == 'website_services') ) {
    $service_active = "active";
}

$nav_html = <<<EGF
<div class="container-fluid fixed-top px-0 wow fadeIn bgtop_wh" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <b><i class="fa fa-map-marker-alt text-cs-primary me-2"></i>25 Main Street, Suite 200, Westlake OH, 44145, USA</b>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small><b><a href="mailto:info@jaschatgroup.com"></a><i class="fa fa-envelope text-cs-primary me-2"></i>info@jaschatgroup.com</a></b></small>
                <small class="ms-4"><b><a href="tel:216-302-8252"><i class="fa fa-phone-alt text-cs-primary me-2"></i>216-302-8252</a></b></small>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index" class="navbar-brand ms-4 ms-lg-0">
                <img src="img/logo_wh_bg-removebg.png" class="top_logo_cs">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="/" class="nav-item nav-link $home_active">Home</a>
                    <a href="#about" class="nav-item nav-link">About Us</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle $service_active" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu border-light m-0">
                            <a href="business_consulting_services" class="dropdown-item">Business Consulting Services</a>
                            <a href="commercial_loan_services" class="dropdown-item">Commercial Loan Services</a>
                            <a href="website_services" class="dropdown-item">Website Services</a>
                            <a href="review" class="dropdown-item">Testimonials & Reviews</a>
                            <a href="faq" class="dropdown-item">FAQ - $pagelink</a>
                        </div>
                    </div>
                    <a href="#contact" class="nav-item nav-link">Contact Us</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://facebook.com/profile?id=100089153356909">
                        <small class="fab fa-facebook-f text-cs-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://instagram.com/jaschatgroup">
                        <small class="fab fa-instagram text-cs-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://linkedin.com/company/jaschatgroupinc">
                        <small class="fab fa-linkedin-in text-cs-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://nextdoor.com/pages/jas-chat-group-inc-avon-oh/">
                        <small class="fas fa-home text-cs-primary"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
EGF;


echo $nav_html;
?>