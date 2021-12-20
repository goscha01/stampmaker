<?php
session_start();
include_once('inc/header.php');
?>
<header>
    <div>
        <button type="button" onclick='toggle_about()' class="about_btn btn" data-toggle="modal" data-target="#aboutus">About</button>
        <div class='suggest' id='about_div' style="display:none;">
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
<div class="work_area">
    <div class="banner banner_left">
        <img src="assets/img/banner_120.jpg" alt="MyStampMaker Banner">
    </div>
    <div class="layers_tab side_card">
        <h5>Layers</h5>
        <div class="card-body" id="labels">

        </div>
    </div>
    <div class="canvas_tab" id="stageparent" class="canvas-stageparent" style="border:none;">
        <div class="selection_row">
            <div class="selection_box" id="addroundtext">
                <img src="assets/img/IconRound.svg" alt="" />
                <span>Round Text</span>
            </div>
            <div class="selection_box" id="addlinetext">
                <img src="assets/img/IconLine.svg" alt="" />
                <span>Inline Text</span>
            </div>
            <div class="selection_box" id="addcircle">
                <img src="assets/img/IconShape.svg" alt="">
                <span>Add Shape</span>
            </div>
            <div class="selection_box" id="addimage">
                <img src="assets/img/IconSquare.svg" alt="">
                <span>Add Image</span>
            </div>
        </div>
        <div class="canvas text-center">

        </div>
        <?php $session = (isset($_SESSION['uid'])) ? $_SESSION['sessionid'] : 'null'; ?>
        <button class="btn" id="downloads" onclick="down('<?php echo $session ?>')">Download
        </button>
    </div>
    <div class="side_card" id="properties">
        <div id='Circle" + (Circles.length) + "' class='property'>
            <div>
                <h5 class='property-heading'>Properties</h5>

            </div>
        </div>
    </div>
    <div class="banner banner_top left">
        <img src="assets/img/banner_bottom.png" alt="MyStampMaker Banner">
    </div>
    <div class="banner banner_top right">
        <img src="assets/img/banner_bottom.png" alt="MyStampMaker Banner">
    </div>
    <div class="banner banner_right">
        <img src="assets/img/banner_rght.png" alt="MyStampMaker Banner">
    </div>
</div>

<div>
    <div class='demo bottomleft seggestions-section'>
        <div class=" p-1" id='howto' onclick='toggleinstruction()'>
            <p class="px">View Instructions</p>
        </div>
        <div class='suggest' id='suggestIns'>
            <div class="card">
                <div class="card-body">
                    <h5>Instructions</h5>
                    ★ Select <b>Circle</b> element to add a stamp circle<br>
                    ★ Edit the circle, change its radius and stroke width<br>
                    ★ Select <b>Round</b> Text element to add a text around the circle<br>
                    ★ Enter and edit the text, change spacing and rotate it clockwise<br>
                    ★ Select <b>Line</b> Text element to add a text in the center<br>
                    ★ Enter and edit the text, move or rotate it<br>
                    ★ Select <b>Image</b> element to add an image<br>
                    ★ Upload the image, change its size and position<br>
                    ★ Add any numbers of elements<br>
                    ★ Delete elements clicking on <b>x</b> <br>
                    ★ <b>Download</b> your stamp
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'inc/signup_modal.php'; ?>
<?php include 'inc/login_modal.php'; ?>

<?php include 'inc/suggestion.php'; ?>