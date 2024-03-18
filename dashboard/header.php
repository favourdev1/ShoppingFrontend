<?php session_start(); ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    >
    <meta
        content="Codescandy"
        name="author"
    >
    <title>Sosmart Admin</title>
    <!-- Favicon icon-->
    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="../assets/images/favicon/favicon.ico"
    >


    <!-- Libs CSS -->
    <link
        href="../assets/libs/bootstrap-icons/font/bootstrap-icons.min.css"
        rel="stylesheet"
    >
    <link
        href="../assets/libs/feather-webfont/dist/feather-icons.css"
        rel="stylesheet"
    >
    <link
        href="../assets/libs/simplebar/dist/simplebar.min.css"
        rel="stylesheet"
    >


    <!-- Theme CSS -->
    <link
        rel="stylesheet"
        href="../assets/css/theme.min.css"
    >
    <style>
    .shadow-0 {
        box-shadow: none !important;
    }
    </style>


    <script src="../node_modules/axios/dist/axios.min.js"></script>
    <?php include_once('php/auth.php')?>



    <script>
    var apiUrl = 'http://localhost:8000/api/admin'
    </script>

    <!-- <script src="../pages/javascript/cookie.js"></script> -->
    <!-- <script src="../pages/javascript/checkAuth.js"></script> -->
    <link
        rel="stylesheet"
        href="../node_modules/alerthub/dist/css/Alerthub.min.css"
    >
    <script src="../node_modules/alerthub/dist/js/alerthub.min.js"></script>



    <!-- <link rel="stylesheet" href="../node_modules/tippy.js/dist/tippy.css"/>
    <script src="../node_modules/tippy.js/dist/tippy.umd.js"> -->
    <script src="https://unpkg.com/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tippy.js@6.3.4/dist/tippy-bundle.umd.min.js"></script>
    <!-- </script> -->
    <?php include_once('php/auth.php') ?>




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
    <?php include_once('php/profileDetails.php') ?>

    
    <style>
    .cursor-pointer {
        cursor: pointer;
    }


    /* Hide the horizontal scrollbar line */
    .hide-scrollbar::-webkit-scrollbar {
        height: 0;
        /* Hide the horizontal scrollbar */
    }


    </style>

<?php include_once('../pages/php/config.php')?>
<script src ="js/functions.js"></script>
<script src="../pages/javascript/Route.js"></script>

</head>