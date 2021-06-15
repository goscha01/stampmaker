<?php
session_start();

include_once('inc/header.php');

?>
<!-- <div id="measure"></div> -->
<header class="header">
    <div class="container-fluid" style="margin: 0px; padding: 0px;">
        <div class="row" style="margin: 0px; padding: 0px;">
             <div  class="col-lg-2 col-md-7 col-sm-5 text-center d-flex text-white brand">
                 <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#aboutus" style="margin:20px;">&nbsp About &nbsp </button>
             </div>
            <div class="col-lg-7 col-md-7 col-sm-5 text-center d-flex text-white brand">
                <img class="d-inline" src="assets/img/Logo.svg" width="120px" />
                <h1 class="d-inline">My Stamp Maker</h1>
                <!-- <a href="pageMaker/index.html">Second Page</a> -->

            </div>
            <div class="col-lg-3 col-md-5 col-sm-6" style="display: flex; align-items:center">
                <div class="btns-wrapper">
                    <!-- <p class="mt-4">
                        <a href="pageMaker/" class="text-white" style="text-decoration: none;">Create Page</a>
                    </p> -->
                    <?php
                    getNav();
                    function getNav()
                    {
                        if (isset($_SESSION["uid"])) {

                            $d = $_SESSION["uid"];
                            echo "<h6 style='margin:20px;'>Welcome, " . $d['username'] . "</h6><button class='btn btn-outline-warning' onclick='logout()' style='height:40px;margin:20px;'>Log Out</button>";
                            if ($d['role'] == "admin") {
                                // echo "<button class='btn btn-outline-warning' onclick='Dashboard()' style='height:40px;margin:20px;'>Dashboard</button>";
                                echo "<a class='btn btn-outline-warning' href='admin' style='height:40px;margin:20px;'>Dashboard</a>";
                            }
                        } else {
                            echo "<button type='button' class='btn btn-outline-warning' data-toggle='modal' data-target='#myModal' style='height:40px;margin:20px;'>Sign Up</button><button type='button' class='btn btn-outline-warning' data-toggle='modal' data-target='#myModalLogin' style='height:40px;margin:20px;' onclick='reset()'>Log In</button>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>
</header>
<div class="container-fluid">
    <div class="row mt-lg-4 ">
        <div class="col-md-2 text-center">
            <img src="assets/img/banner.jpg" alt="" style="width:160px; max-height:500px;" />
        </div>
         <div class="col-md-2" id="labels-container" style="border:none; ">
            <!--Labels -->
                    <div class="card labels-card elementlabel">
                        <h5 class="text-center">Layers</h5>
                        <div class="card-body" id="labels">

                        </div>
                    </div>
            </div>
             <div class="col-md-4 mb-lg-2 middiv" >
                        <!-- Canvas -->
                        <div class="canvas-col" >
                          <center>
                            <div id="stageparent" class="canvas-stageparent" style="border:none;">
                                <div id="parent_sub">
                                  <!-- <div id="container"></div> -->
                                    <div class="" style="padding:0px;margin-top: -20px;">
                                        <div class="row m-2">
                                            <div class="col-md-3">
                                                <button class="btn btn-sm btn-default icon-btn" id="addroundtext" title="Text Around The Circle">
                                                <img class="mybtnimg" src="assets/img/IconRound.svg" alt="">
                                                <span class="btn-tex">Round Text</span>
                                                </button> 
                                            </div>
                                            <div class="col-md-3">
                                                 <button class="btn btn-sm btn-default  icon-btn" id="addlinetext" title="Line Text">
                                                     <img class="mybtnimg" src="assets/img/IconLine.svg" alt="">
                                                    <span class="btn-tex">Line Text</span>
                                                        </button> 
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-sm btn-default  icon-btn" id="addcircle" title="Circle">
                                                <img class="mybtnimg" src="assets/img/IconShape.svg" alt="">
                                                <span class="btn-tex">Add Circle</span>
                                                </button> 
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-sm btn-default  icon-btn" id="addimage" title="Image">
                                                <img class="mybtnimg" src="assets/img/IconSquare.svg" alt="">
                                                <span class="btn-tex">Add Image</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="canvas myclass1 text-center">
                                                    
                                    </div>
                                 </div><br><br>
                                   <center class="">
                                        <?php $session = (isset($_SESSION['uid'])) ? $_SESSION['sessionid'] : 'null'; ?>
                                        <button class="btn btn-sm btn-warning shadow" style="color: white" id="downloads" onclick="down('<?php echo $session ?>')">Download</button>
                                        <br> <br>

                           </center>
                            </div>
                          </center>
                        </div>
             </div>
             <div class="col-md-2  right-panel" id="properties" style="height:auto;">

            </div>
            <div class="col-md-2 right-banner text-center">
              <img src="assets/img/banner.jpg" alt="" style="width:160px; max-height:500px" />
           </div>
        </div>
    </div>
 <!--    /////about model -->
<div class="modal fade" id="aboutus">
    <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">      
                  <h3>About Us</h3>
                        <button type="button" id="closeform" class="close sticky-top" data-dismiss="modal"> &times;</button>
              </div> 
              <div class="model-body">
                   <h5 class="text-center text-secondary">Instructions</h5>
            <p class="m-2 p-3 text-secondary">
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
            </p>
              </div>
              <div class="model-footer">
                <button type="button" class="btn btn-warning text-white btn-outline-danger" data-toggle="modal" data-target="#aboutus" style="margin:20px;">&nbsp  Ok! &nbsp </button>
                 
              </div>
        </div>
    </div>
</div>
<script>
    // $(document).click(function(){
    // alert($("#colorpicker").spectrum("get").toHex());
    // })
</script>
<!-- Modal Of Sign Up -->
<?php include 'inc/signup_modal.php'; ?>
<?php include 'inc/login_modal.php'; ?>

</div>
<div class='demo bottomleft seggestions-section'>
    <div id='howto' onclick='toggleinstruction()'>
        To view Instruction or 'How To'.<b>Click Here</b>
    </div>
    <div class='suggest' id='suggestIns'>
        <div class="card">
            <div class="card-body">

                <!-- <center> -->
                <h5>Instructions</h5>
                <!-- </center> -->
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
<!-- Footer -->
<!-- Footer -->
<?php include 'inc/suggestion.php'; ?>
