<?php
session_start();
include_once('inc/header.php');
?>
<header>
    <div>
        <button type="button" onclick='toggle_about()' class="about_btn btn" data-toggle="modal" data-target="#aboutus">About</button>
        <div class='suggest' id='about_div' style="display:none">
            <div class="card">
                <div class="about_title">About Stamp Maker</div>
                <div class="card-body">
                    Welcome to MyStampMaker, an online tool that helps you create Custom Stamp Designs for FREE!
                </div>
            </div>
        </div>
    </div>
    <img class="site_logo" src="assets/img/Logo.svg" />
    <div class="nav_container">
        
        <?php
                getNav();
                function getNav()
                {
                    if (isset($_SESSION["uid"])) {

                        $d = $_SESSION["uid"];
                        echo "<h6 class='welcome_text'>Welcome, " . $d['username'] . "  </h6><button class='btn logout_btn' onclick='logout()'>Log Out</button>";
                        if ($d['role'] == "admin") {
                            echo "<a class='btn' href='admin'>Dashboard</a>";
                        }
                    } else {
                        echo "<button type='button' class='sign_up btn' data-toggle='modal' data-target='#myModal'>Sign Up</button>
                            <button type='button' class='login_btn btn' data-toggle='modal' data-target='#myModalLogin' onclick='reset()'>Log In</button>";
                    }
                }
                ?>
    </div>
</header>
<div class="container-fluid mt-2 p-0 work_area">
    <div class="col-lg-2 text-center banner_left">
        <img src="assets/img/banner_120.jpg" class="m-2" alt="" style="width:150px; height:500px;" />
    </div>
    <div class="col-lg-2 col-md-12 col-sm-12 layers_tab">
        <div class="card left-side m-2">
            <h5 class="text-center p-1 text-secondary" style="border-bottom:2px solid silver;">Layers</h5>
            <div class="card-body p-0" id="labels">

            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 canvas_tab">
        <div class="canvis-area m-2">
            <div class="canvas-col">
                <center>
                    <div id="stageparent" class="canvas-stageparent" style="border:none;">
                        <div id="parent_sub">
                            <div class="" style="padding:0px;margin-top: -20px;">
                                <div class="row m-2 selection_row">
                                    <div class="col-md-3 selection_box" id="addroundtext">
                                        <img class="iconimg" src="assets/img/IconRound.svg" alt="" />
                                        <span class="selection_text">Round<br>Text</span>

                                    </div>
                                    <div class="col-md-3 selection_box" id="addlinetext">
                                        <img class="iconimg" src="assets/img/IconLine.svg" alt="" />
                                        <span class="selection_text">Inline<br>Text</span>

                                    </div>
                                    <div class="col-md-3 selection_box" id="addcircle">
                                        <img class="iconimg" src="assets/img/IconShape.svg" alt="">
                                        <span class="selection_text">Add<br>Shape</span>
                                    </div>
                                    <div class="col-md-3 selection_box" id="addimage">
                                        <img class="iconimg" src="assets/img/IconSquare.svg" alt="">
                                        <span class="selection_text">Add<br>Image</span>
                                    </div>
                                </div>
                            </div>
                            <div class="canvas text-center">

                            </div>
                        </div>
                        <center class="">
                            <?php $session = (isset($_SESSION['uid'])) ? $_SESSION['sessionid'] : 'null'; ?>
                            <button class="btn btn-sm" id="downloads" onclick="down('<?php echo $session ?>')">Download
                            </button>

                        </center>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <div class="col-lg-2">
        <div class="m-2" id="properties">
            <div id='Circle" + (Circles.length) + "' class='property myclass'>
                <div class=''>
                    <div class='text-center'>
                        <div class='card properties-wrapper'>
                            <h5 class='property-heading'>Properties</h5>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-lg-2 col-md-12 col-sm-12 banner_right text-center">
        <img src="assets/img/banner_120.jpg" class="m-2" alt="" style="width:150px; height:500px;" />
    </div>
</div>

<div class="container-fluid mt-5">
    <div class="row banner_row">
        <div class="col-lg-2 col-md-3 text-center ">
            <div class='demo bottomleft seggestions-section'>
                <div class=" p-1" id='howto' onclick='toggleinstruction()'>
                    <p class="px" style="">To view Instructions or 'How to'.Click Here</p>
                </div>
                <div class='suggest' id='suggestIns'>
                    <div class="card">
                        <div class="card-body">
                            <h5>Instructions</h5>
                            Select <b>Circle</b> element to add a stamp circle<br>
                            Edit the circle, change its radius and stroke width<br>
                            Select <b>Round</b> Text element to add a text around the circle<br>
                            Enter and edit the text, change spacing and rotate it clockwise<br>
                            Select <b>Line</b> Text element to add a text in the center<br>
                            Enter and edit the text, move or rotate it<br>
                            Select <b>Image</b> element to add an image<br>
                            Upload the image, change its size and position<br>
                            Add any numbers of elements<br>
                            Delete elements clicking on <b>delete x</b> <br>
                            <b>Download</b> your stamp
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 banner_1" style="text-align: left;">
            <img src="assets/img/banner_bottom.png" class="mt-5" alt="" style="width:100%; height:auto;" />
        </div>
        <div class="col-md-4 text-center banner_2">
            <img src="assets/img/banner_bottom.png" class="mt-5" alt="" style="width:100%; height:auto;" />
        </div>
        <div class="col-lg-2 col-md-1 text-center">

        </div>

    </div>
</div>

<?php include 'inc/signup_modal.php'; ?>
<?php include 'inc/login_modal.php'; ?>

<?php include 'inc/suggestion.php'; ?>