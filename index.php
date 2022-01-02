<!-- Include Document Header -->
<?php
session_start();

include_once('inc/header.php');

?>
<!-- Loader -->
<span class="loader_wrapper">
    <img src="assets/img/site_logo.svg" alt="MyStampMaker Logo">
    <div class="loader"></div>
</span>

<main>
    <!-- Header -->
    <header class="header">
        <!-- About Sections -->
        <div class="about_section header_side left">
            <!-- Open Button -->
            <button type="button" onclick='toggle_ins("#about_div")' class="button about_btn" data-toggle="modal" data-target="#aboutus">About</button>
            <!-- Hidden Content -->
            <div class='suggest' id='about_div'>
                <h6>About MyStampMaker</h6>
                <?php
                if (isset($_SESSION["uid"])) {
                    $d = $_SESSION["uid"];
                    echo "<div><div>Hi, " . $d['username'] . "</div><div>Welcome to MyStampMaker, an online tool that helps you create Custom Stamp Designs for FREE!</div></div>";
                } else {
                    echo "<div><div>Welcome to MyStampMaker, an online tool that helps you create Custom Stamp Designs for FREE!</div><div><a data-toggle='modal' data-target='#myModal' class='about_cta'>Sign Up</a> Now to Get Started!</div></div>";
                }
                ?>
            </div>
        </div>
        <!-- Logo and Title -->
        <div class="branding">
            <img class="site_logo" src="assets/img/site_logo.svg" alt="MyStampMaker Official Logo" />
            <h1 class="site_title">My Stamp Maker</h1>
        </div>
        <!-- Login/Signup/Dashboard/Logout Buttons Logic -->
        <div class="nav_container header_side right">
            <?php
            if (isset($_SESSION["uid"])) {
                $d = $_SESSION["uid"];
                echo "<h6 class='welcome_text'>Welcome, <br>" . $d['username'] . "  </h6><button class='button logout_btn' onclick='logout()'>Log Out</button>";
                if ($d['role'] == "admin") {
                    echo "<a class='button dashboard_link' href='admin'>Dashboard</a>";
                }
            } else {
                echo "<button type='button' class='sign_up button' data-toggle='modal' data-target='#myModal'>Sign Up</button><button type='button' class='login_btn button' data-toggle='modal' data-target='#myModalLogin' onclick='reset()'>Log In</button>";
            }
            ?>
        </div>
    </header>
    <!-- Mobile Layers and Properties Sections -->
    <div class="mobile_btns">
        <div class="mobile mobile_layers">
            <div class='suggest scroll' id='layers_mobile'></div>
            <button type="button" onclick='toggle_section("#layers_mobile")' class="layers_btn" data-toggle="modal" data-target="#layers"></button>
        </div>
        <div class="mobile mobile_properties">
            <div class='suggest' id='properties_mobile'></div>
            <button type="button" onclick='toggle_section("#properties_mobile")' class="properties_btn" data-toggle="modal" data-target="#mobile_props"></button>
        </div>
    </div>
    <!-- Banner Side - Left -->
    <div class="left banner banner_side">
        <img src="assets/img/banners/banner_left.png" alt="MyStampMaker Banner" />
    </div>

    <!-- StampMaker Interface -->
    <div class="work_area">
        <!-- Desktop Layers Section -->
        <div class="layers_tab side_card scroll">
            <h5>Layers</h5>
            <div id="labels">

            </div>
        </div>
        <!-- Canvas and Toolbar -->
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
            <button class="button" id="downloads" onclick="down('<?php echo $session ?>')">Download</button>

        </div>

        <!-- Properties Section -->
        <div id="properties_container" class="side_card">
            <h5>Properties</h5>
            <div id="properties">
            </div>
        </div>
    </div>

    <!-- Banner Side - Right -->
    <div class="right banner banner_side">
        <img src="assets/img/banners/banner_left.png" alt="MyStampMaker Banner" />
    </div>
    <!-- Banner Bottom - Left -->
    <div class="banner_bottom left banner">
        <img src="assets/img/banners/banner_bottom.png" alt="MyStampMaker Banner" />
    </div>
    <!-- Banner Bottom - Right -->
    <div class="banner_bottom right banner">
        <img src="assets/img/banners/banner_bottom.png" alt="MyStampMaker Banner" />
    </div>

    <!-- Instructions and Suggestions Buttons -->
    <div class="bottom_btns">
        <!-- Instructions -->
        <div class='instructions_section'>
            <!-- Open Button -->
            <div id='toggle' onclick='toggle_ins("#suggestIns")'>
                View Instructions
            </div>
            <!-- Hidden Content -->
            <div class='suggest instructions' id='suggestIns'>
                <div>
                    <h5>Instructions</h5>
                    <!-- Close Button -->
                    <div class="insclose" onclick='toggle_ins("#suggestIns")'>Close <i class='fas fa-times' style="color: #ffffff;"></i></div>
                </div>
                <!-- Content -->
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
        <!-- Including Sign Up, Login and Suggestion Modals -->
        <?php include 'inc/suggestion.php'; ?>
        <?php include 'inc/signup_modal.php'; ?>
        <?php include 'inc/login_modal.php'; ?>