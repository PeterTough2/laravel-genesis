<?php
$footer_html = <<<EDF
    <!-- Footer Start -->
    <div class="container-fluid bg-cs-dark text-cs-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6">
                    <h4 class="mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>25 Main Street, Suite 200, Westlake OH, 44145, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>216-302-8252</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@jaschatgroup.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://facebook.com/profile.php?id=100089153356909"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://instagram.com/jaschatgroup"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://linkedin.com/company/jaschatgroupinc"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://nextdoor.com/pages/jas-chat-group-inc-avon-oh/"><i class="fas fa-home"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-4">Services</h4>
                    <a class="btn btn-link" href="business_consulting_services">Business Consulting Services</a>
                    <a class="btn btn-link" href="commercial_loan_services">Commercial Loan Services</a>
                    <a class="btn btn-link" href="website_services">Website Services</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="index#about">About Us</a>
                    <a class="btn btn-link" href="index#contact">Contact Us</a>
                    <a class="btn btn-link" href="terms_and_conditions">Terms & Condition</a>
                    <a class="btn btn-link" href="privacy_policy">Privacy Policy</a>
                    <a class="btn btn-link" href="cookie_policies">Cookie Policies</a>
                    <a class="btn btn-link" href="acceptable_use_policy">Acceptable Use Policy</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; JAS Chat Group Inc, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Built with <i class="fa-solid fas fa-heart"></i> in Ohio, U.S.A
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-cs-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!--Start of Tawk.to Script-->
	<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5c38d9d7361b3372892fb229/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
EDF;


echo $footer_html;
?>