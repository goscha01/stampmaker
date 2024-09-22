<header class="header">
    <!-- About Sections -->
    <div class="about_section header_side left">
        <!-- Open Button -->
        <button type="button" onclick="toggle_ins('#about_div')" class="button about_btn" data-toggle="modal" data-target="#aboutus">About</button>
        <!-- Hidden Content -->
        <div class="suggest" id="about_div">
            <h6>About MyStampMaker</h6>
            <?php if (isset($_SESSION["uid"])): ?>
                <div>
                    <div>Hi, <?php echo $_SESSION["username"]; ?></div>
                    <div>Welcome to MyStampMaker, an online tool that helps you create Custom Stamp Designs for FREE!</div>
                </div>
            <?php else: ?>
                <div>
                    <div>Welcome to MyStampMaker, an online tool that helps you create Custom Stamp Designs for FREE!</div>
                    <div><a data-toggle="modal" data-target="#myModal" class="about_cta">Sign Up</a> Now to Get Started!</div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- Logo and Title -->
    <div class="branding">
        <img class="site_logo" src="assets/img/site_logo.svg" alt="MyStampMaker Official Logo" />
        <h1 class="site_title">My Stamp Maker</h1>
    </div>
    <!-- Login/Signup/Dashboard/Logout Buttons Logic -->
    <div class="nav_container header_side right">
        <?php if (isset($_SESSION["uid"])): ?>
            <h6 class="welcome_text">Welcome, <br><?php echo $_SESSION["username"]; ?></h6>
            <button class="button logout_btn" onclick="logout()">Log Out</button>
            <?php if ($_SESSION["role"] === "admin"): ?>
                <a class="button dashboard_link" href="admin">Dashboard</a>
            <?php endif; ?>
        <?php else: ?>
            <button type="button" class="sign_up button" data-toggle="modal" data-target="#myModal">Sign Up</button>
            <button type="button" class="login_btn button" data-toggle="modal" data-target="#myModalLogin" onclick="reset()">Log In</button>
        <?php endif; ?>
    </div>
</header>
