<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_POST['id'])) {
    $_SESSION['id']  = $_POST['id'];
    $_SESSION["username"] = $_POST['username'];
    $_SESSION["email"] = $_POST['email'];
    $_SESSION["role"] = $_POST['role'];
    $_SESSION["isLogin"] = $_POST['isLogin'];
    $_SESSION['uid'] = $_POST['id'];
}

$base_url = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER["REQUEST_URI"] . '?') . '/';
if (isset($_SESSION['uid']) && $_SESSION['role'] == 'admin') {
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171780865-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-171780865-1');
    </script>
    </script>
    <link type="text/css" href="assets/css/overlayScrollbars.min.css" rel="stylesheet" />
    <script src="assets/js/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="assets/js/jquery.overlayScrollbars.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="http://hongru.github.io/proj/canvas2image/canvas2image.js"></script>
    <script type="text/javascript" src="assets/js/customCircularLibrary.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/modals.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <link href="assets/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- CoderShiv Custom CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <title>MyStampMaker</title>
</head>

<body>
