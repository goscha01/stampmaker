<?php
session_start();

include_once('inc/header.php');

?>
<main>
    <header class="header">
        <div class="about_section">
            <button type="button" onclick='toggle_section("#about_div")' class="button about_btn" data-toggle="modal" data-target="#aboutus">About</button>
            <div class='suggest' id='about_div'>
                <h6>About MyStampMaker</h6>
                <p>
                    Welcome to MyStampMaker, an online tool that helps you create Custom Stamp Designs for FREE!
                </p>
            </div>
        </div>
        <div class="mobile mobile_layers">
            <button type="button" onclick='toggle_section("#layers_mobile")' class="button layers_btn" data-toggle="modal" data-target="#layers">Layers <i style="margin-left: .3em;" class="fas fa-angle-down"></i></button>
            <div class='suggest' id='layers_mobile'></div>
        </div>

        <div class="branding">
            <img class="site_logo" src="assets/img/site_logo.svg" alt="MyStampMaker Official Logo" />
            <h1 class="site_title">MyStampMaker</h1>
        </div>
        <div class="nav_container">
            <?php
            getNav();
            function getNav()
            {
                if (isset($_SESSION["uid"])) {

                    $d = $_SESSION["uid"];
                    echo "<h6 class='welcome_text'>Welcome, <br>" . $d['username'] . "  </h6><button class='button logout_btn' onclick='logout()'>Log Out</button>";
                    if ($d['role'] == "admin") {
                        echo "<a class='button' href='admin'>Dashboard</a>";
                    }
                } else {
                    echo "<button type='button' class='sign_up button' data-toggle='modal' data-target='#myModal'>Sign Up</button>
                            <button type='button' class='login_btn button' data-toggle='modal' data-target='#myModalLogin' onclick='reset()'>Log In</button>";
                }
            }
            ?>
        </div>
        <div class="mobile mobile_properties">
            <button type="button" onclick='toggle_section("#properties_mobile")' class="button properties_btn" data-toggle="modal" data-target="#mobile_props">Properties <i style="margin-left: .3em;" class="fas fa-angle-down"></i></button>
            <div class='suggest' id='properties_mobile'> </div>
        </div>
    </header>
    <div class="banner_left banner">
        <img src="assets/img/banners/banner_left.png" alt="MyStampMaker Banner" />
    </div>
    <div class="work_area">
        <div class="layers_tab side_card">
            <h5>Layers</h5>
            <div id="labels">

            </div>
        </div>
        <div class="canvas_tab" style="border:none;">
            <div class="toolbar">
                <div class="tool" id="addroundtext">
                    <img class="iconimg" src="assets/img/icons/text_round.svg" alt="Add Round Text to Stamp" />
                    <div style="max-width: 5ch;">Round Text</div>

                </div>
                <div class="tool" id="addlinetext">
                    <img class="iconimg" src="assets/img/icons/text_line.svg" alt="Add Inline Text to Stamp" />
                    <div style="max-width: 5ch;">Inline Text</div>
                </div>
                <div class="tool" id="addcircle">
                    <img class="iconimg" src="assets/img/icons/shape.svg" alt="Add Shape Text to Stamp">
                    <div style="max-width: 5ch;">Add Shape</div>
                </div>
                <div class="tool" id="addimage">
                    <img class="iconimg" src="assets/img/icons/image.svg" alt="Add Image Text to Stamp">
                    <div style="max-width: 5ch;">Add Image</div>
                </div>
            </div>
            <div class="canvas text-center">

            </div>
            <?php $session = (isset($_SESSION['uid'])) ? $_SESSION['sessionid'] : 'null'; ?>
            <button class="button" id="downloads" onclick="down('<?php echo $session ?>')">Download
            </button>

        </div>
        <div id="properties_container" class="side_card">
            <h5>Properties</h5>
            <div id="properties">
                <div id='Circle" + (Circles.length) + "' class='property'>
                    <div>

                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="banner_right banner">
        <img src="assets/img/banners/banner_left.png" alt="MyStampMaker Banner" />
    </div>
    <div class="banner_bottom left banner">
        <img src="assets/img/banners/banner_bottom.png" alt="MyStampMaker Banner" />
    </div>
    <div class="banner_bottom right banner">
        <img src="assets/img/banners/banner_bottom.png" alt="MyStampMaker Banner" />
    </div>
    <div class="bottom_btns">
        <div class='demo bottomleft seggestions-section'>
            <div id='howto' onclick='toggleinstruction()'>
                View Instructions
            </div>
            <div class='suggest instructions' id='suggestIns'>
                <div>
                    <h5>Instructions</h5>
                    <div class="insclose" onclick='toggleinstruction()'>Close <img src="assets/img/icons/cross.svg"></div>
                </div>
                <p>
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
                </p>
            </div>
        </div>

<?php include 'inc/suggestion.php'; ?>

<?php include 'inc/signup_modal.php'; ?>
<?php include 'inc/login_modal.php'; ?>