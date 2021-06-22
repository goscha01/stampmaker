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
    // header( 'Location:admin');
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="logofav.png" sizes="32x32">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-171780865-1"></script>
    <script src="assets/js/google_anylatic.js">
    </script>
    <script src="assets/js/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="http://hongru.github.io/proj/canvas2image/canvas2image.js"></script>

    <script type="text/javascript" src="assets/js/customCircularLibrary.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/css/stampMakerStyle.css">
    <!-- custom css fiverr raihan start-->
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
    <!-- custom css fiverr raihan end -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/modals.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <link href="assets/css/select2.min.css" rel="stylesheet" />
    <title>Stamp Maker</title>
    <style type="text/css">

    .btn-default{border:1px solid gray;
      margin:0px;
      border-radius: 5px!important;
      padding:2px;
      box-shadow: 0 0 5px #bfbfbf;
}
.middiv{
    box-shadow: 0 0 10px #bfbfbf;
    border-radius: 5%;
    width: 500px;
    max-height: 500px!important;
    margin-left:10px;

}
.myclass1{
    box-shadow: 0 0 5px #bfbfbf;
    padding:20px;
    margin:20px;
    /*margin-left:40px;*/
  /*  margin-right:40px;*/
    max-height:400px!important;
    max-width:400px!important;
}
.labels-card{
  margin:0px;
  padding: 0px;
  border: none;
  background-color: #f8f8f8;
  box-shadow: 0 0 10px #bfbfbf;
  height: 500px;
  border-radius: 20px;
  overflow-y: auto;
}


.mybtnimg{
    height:35px;
    width:35px;
    margin:1px;
}
.btn-tex{
  color:black; text-align:left;
  font-size: 10px;
}

.header {
    background-color: #00438a;
    height: auto;
}

.iconimg{
    border-radius: 10px;
}
/* .iconleft{
    margin-right:-25px!important;
}
.iconright{
    margin-right:25px!important;
} */
@media screen and (max-width: 1024px) {

}
@media only screen and (min-width: 802px) and (max-width: 1100px){
 /* .iconleft{
    margin-right:-23px!important;
}
.iconright{
    margin-right:25px!important;    
} */
.canvas{
    box-shadow: 0 0 5px #bfbfbf;
    padding:20px;
    margin-top:20px;
    margin-left:10%;
    margin-right:10%;padding:10px;
   
}

}
@media only screen and (min-width: 1103px) and (max-width: 1160px){
 /* .iconleft{
    margin-right:-35px!important;
}
.iconright{
    margin-right:35px!important;
}    */
}
@media only screen and (min-width: 1161px) and (max-width: 1560px){
 /* .iconleft{
    margin-right:-45px!important;
}
.iconright{
    margin-right:45px!important;
}    */
}



    </style>


</head>

<body>
