
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
    <title>Dashboard eCommerce HTML Template - FreshCart</title>
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

    <script src="../pages/javascript/cookie.js"></script>
    <script src="../pages/javascript/checkAuth.js"></script>
    <link
        rel="stylesheet"
        href="../node_modules/alerthub/dist/css/Alerthub.min.css"
    >
    <script src="../node_modules/alerthub/dist/js/alerthub.min.js"></script>


    <script>
    if (!authStatus) {
        window.location.href = "../pages/signin.php"
    } else {
        console.log("user is loggedin ")
    }
    </script>


<?php include_once('php/profileDetails.php')?>

</head>