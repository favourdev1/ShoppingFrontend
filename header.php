<head>

    <?php $apiUrl = "http://localhost:8000/api" ?>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
        content="Sosmart"
        name="author"
    />
    <title><?php echo $pageName ?></title>

    <link
        href="assets/libs/slick-carousel/slick/slick.css"
        rel="stylesheet"
    />
    <link
        href="assets/libs/slick-carousel/slick/slick-theme.css"
        rel="stylesheet"
    />
    <link
        href="assets/libs/tiny-slider/dist/tiny-slider.css"
        rel="stylesheet"
    />

    <!-- Favicon icon-->
    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="assets/images/favicon/favicon.ico"
    />

    <!-- Libs CSS -->
    <link
        href="assets/libs/bootstrap-icons/font/bootstrap-icons.min.css"
        rel="stylesheet"
    />
    <link
        href="assets/libs/feather-webfont/dist/feather-icons.css"
        rel="stylesheet"
    />
    <link
        href="assets/libs/simplebar/dist/simplebar.min.css"
        rel="stylesheet"
    />

    <!-- Theme CSS -->
    <link
        rel="stylesheet"
        href="assets/css/theme.min.css"
    />


    <script>
    var apiUrl = 'http://localhost:8000/api/'
    </script>



    <script src="pages/javascript/cookie.js"></script>


    <script src="pages/javascript/checkAuth.js">

    </script>
    <script src="pages/javascript/config.js"></script>


    <?php 
    include_once('pages/php/checkAuth.php');
    require_once 'vendor/autoload.php'; 
     ?>


    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >
    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500&display=swap"
        rel="stylesheet"
    >
    <style>
    body {
        font-family: 'Nunito', sans-serif !important;
    }
    </style>
    <?php
    if (!if_Authenticated()) {
        setcookie('userId', '', time() - 3600, '/');
        setcookie('token', '', time() - 3600, '/');
        setcookie('isAdmin', '', time() - 3600, '/');
        header('Location: pages/signin.php?error="user not logged in "');
        // exit;
    }
    ?>
</head>