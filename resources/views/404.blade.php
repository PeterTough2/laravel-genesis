<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>:: JAS Chat Group Inc - 404 Error ::</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="grow your business, expert consulting, funding solutions, JAS Chat Group Inc"/>
    <meta name="description" property="og:description" content="Leading provider of comprehensive business solutions including consulting, website design, funding, and more. Contact us today!"/>

    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@jaschatgroup">
    <meta name="twitter:creator" content="@jaschatgroup">
    <meta name="twitter:title" content="JAS Chat Group Inc">
    <meta name="twitter:description" content="Leading provider of comprehensive business solutions including consulting, website design, funding, and more. Contact us today!">
    <meta name="twitter:image" content="img/favicon.png">

    <!-- Facebook -->
    <meta property="og:url" content="https://www.jaschatgroup.com/">
    <meta property="og:title" content="JAS Chat Group Inc">
    <meta property="og:description" content="Leading provider of comprehensive business solutions including consulting, website design, funding, and more. Contact us today!">
    <meta property="og:type" content="website">
    <meta property="og:image:secure_url" content="https://www.jaschatgroup.com/img/favicon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon">
    <meta name="theme-color" content="#c9b86d">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php
    require_once "includes/navbar.php";
    ?>
    <!-- Navbar End -->

    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 150px;">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Page Not Found</h1>
                    <p class="mb-4">We're sorry, the page you have looked for does not exist in our website!</p>
                    <a class="btn btn-primary py-3 px-5" href="index.php">Go Back To Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->

<?php
require_once "includes/footer.php";
?>

</body>

</html>