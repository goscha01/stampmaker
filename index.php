<?php
session_start();

include_once('inc/header.php');

?>
<header class="header">
    <div class="about_section">
        <button type="button" onclick='toggle_about()' class="btn about_btn" data-toggle="modal" data-target="#aboutus">About</button>
        <div class='suggest' id='about_div'>
            <h6>About Stamp Maker</h6>
            <div>
                Welcome to MyStampMaker, an online tool that helps you create Custom Stamp Designs for FREE!
            </div>
        </div>
    </div>
    <div class="branding">
        <img class="site_logo" src="assets/img/site_logo.svg" width="100px" />
        <h1 class="site_title">My Stamp Maker</h1>
    </div>
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
    <div class="banner_left banner">
        <img src="assets/img/banners/banner_left.png" alt="MyStampMaker Banner" />
    </div>
    <div class="layers_tab side_card properties-wrapper">
        <h5 class="text-secondary">Layers</h5>
        <div id="labels">

        </div>
    </div>
    <div class="canvas_tab" style="border:none;">
        <div>
            <div class="toolbar">
                <div class="tool" id="addroundtext">
                    <img class="iconimg" src="assets/img/icons/icon_round.svg" alt="Add Round Text to Stamp" />
                    <div>Round<br>Text</div>

                </div>
                <div class="tool" id="addlinetext">
                    <img class="iconimg" src="assets/img/icons/icon_line.svg" alt="Add Inline Text to Stamp" />
                    <div>Inline<br>Text</div>
                </div>
                <div class="tool" id="addcircle">
                    <img class="iconimg" src="assets/img/icons/icon_shape.svg" alt="Add Shape Text to Stamp">
                    <div>Add<br>Shape</div>
                </div>
                <div class="tool" id="addimage">
                    <img class="iconimg" src="assets/img/icons/icon_image.svg" alt="Add Image Text to Stamp">
                    <div>Add<br>Image</div>
                </div>
            </div>
        </div>
        <div class="canvas text-center">

        </div>
        <?php $session = (isset($_SESSION['uid'])) ? $_SESSION['sessionid'] : 'null'; ?>
        <button class="btn btn-sm downloads_desktop" id="downloads" onclick="down('<?php echo $session ?>')">Download
        </button>

    </div>
    <div id="properties" class="side_card">
        <div id='Circle" + (Circles.length) + "' class='property myclass'>
            <div class='properties-wrapper'>
                <h5 class='property-heading'>Properties</h5>

            </div>
        </div>

    </div>
    <?php $session = (isset($_SESSION['uid'])) ? $_SESSION['sessionid'] : 'null'; ?>
        <button class="btn btn-sm downloads_mobile" id="downloads" onclick="down('<?php echo $session ?>')">Download
    </button>
    <div class="banner_right banner">
        <img src="assets/img/banners/banner_left.png" alt="MyStampMaker Banner" />
    </div>
    <div class="banner_bottom left banner">
        <img src="assets/img/banners/banner_bottom.png" alt="MyStampMaker Banner" />
    </div>
    <div class="banner_bottom right banner">
        <img src="assets/img/banners/banner_bottom.png" alt="MyStampMaker Banner" />
    </div>
</div>

<div>
    <div class='demo bottomleft seggestions-section'>
        <div id='howto' onclick='toggleinstruction()'>
            <p>View Instructions</p>
        </div>
        <div class='suggest instructions' id='suggestIns'>
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
            ★ Delete elements clicking on <b>delete x</b> <br>
            ★ <b>Download</b> your stamp
        </div>
    </div>

    <div class="col-lg-2 col-md-1 text-center">

    </div>

</div>

<?php include 'inc/signup_modal.php'; ?>
<?php include 'inc/login_modal.php'; ?>

<?php include 'inc/suggestion.php'; ?>