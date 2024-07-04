<head>

    <?php
    ob_start(); // Start output buffering
      include_once('../env.php'); 
    $apiUrl = $API_URL; ?>
    <?php
   
    include_once ('php/config.php');

    ?>
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
        href="../assets/libs/slick-carousel/slick/slick.css"
        rel="stylesheet"
    />
    <link
        href="../assets/libs/slick-carousel/slick/slick-theme.css"
        rel="stylesheet"
    />
    <link
        href="../assets/libs/tiny-slider/dist/tiny-slider.css"
        rel="stylesheet"
    />

    <!-- Favicon icon-->
    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="../assets/images/favicon/favicon.ico"
    />

    <!-- Libs CSS -->
    <link
        href="../assets/libs/bootstrap-icons/font/bootstrap-icons.min.css"
        rel="stylesheet"
    />
    <link
        href="../assets/libs/feather-webfont/dist/feather-icons.css"
        rel="stylesheet"
    />
    <link
        href="../assets/libs/simplebar/dist/simplebar.min.css"
        rel="stylesheet"
    />

    <!-- Theme CSS -->
    <link
        rel="stylesheet"
        href="../assets/css/theme.min.css"
    />


    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/animate.css@4.0.0/animate.min.css"
    />
    <!-- or -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />
    <!-- Bulma Toast JavaScript -->
    <script src="../node_modules/bulma-toast/dist/bulma-toast.min.js"></script>


    <script src="../node_modules/axios/dist/axios.min.js"></script>

    <link
        rel="stylesheet"
        href="../node_modules/alerthub/dist/css/Alerthub.min.css"
    >
    <script src="../node_modules/alerthub/dist/js/alerthub.min.js"></script>


    <script>
    var apiUrl = '<?php echo $API_URL?>';
    </script>


    <script src="javascript/cookie.js"></script>

    <?php
    include_once ('php/checkAuth.php');
    require_once '../vendor/autoload.php';
    ?>



    <!-- Om range slider -->
    <link
        rel="stylesheet"
        href="../assets/libs/om-rangeslider/src/om-javascript-range-slider.css"
    />
    <script src="../assets/libs/om-rangeslider/src/om-javascript-range-slider.js"></script>


    
    
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
    />
    <script src="../node_modules/nouislider/dist/nouislider.js"></script>
    
        <!-- Routes shit -->
        <script src="javascript/Route.js"></script>


    <link href="../node_modules/nouislider/dist/nouislider.css" />
    <style>
    body {
        font-family: 'Nunito', sans-serif !important;
    }
    </style>
    <link
        rel="stylesheet"
        href="../node_modules/tippy.js/dist/tippy.css"
    >

    <script src="../node_modules/tippy.js/dist/tippy.umd.js"></script>


    <script src="javascript/config.js"></script>

    <?php $isHomePath = false; ?>

    <!-- Functions -->

    <?php include_once ('php/functions.php'); ?>

    <script>
    /**
     * Displays an alert message.
     * @param {string} message - The message to be displayed in the alert.
     * @param {string} status - The status of the alert ('success' or 'error').
     * @param {number} [time=5]
     */
    function showAlert(message, status, time = 5) {
        const alertHub = new AlertHub();
        alertHub.showAlert({
            title: "",
            description: message + "    ",
            position: "top-right",
            type: status === 'success' ? 'success' : 'danger',
            timeout: time,
            closeButton: false,
            closeButtonSize: 20,
            animation: "fade-in",
        });
    }

    <?php include_once('php/seo.php')?>
  
    
  
    </script>
</head>