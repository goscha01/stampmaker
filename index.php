<?php
session_start();

include_once('inc/header.php');

?>
<header class="container-fluid header">
    <div class="container-fluid" style="margin: 0px; padding: 0px;">
        <div class="row" style="margin: 0px; padding: 0px;">
             <div  class="col-md-2 col-2 text-center" style="align-items:center">
                 <button type="button" class="about_btn btn btn-outline-warning text-white btn-sm mt-5 pl-3 pr-3" data-toggle="modal" data-target="#aboutus">About</button>
             </div>
            <div class="col-md-7 col-7 text-center text-white">
                <img class="d-inline site_logo" src="assets/img/Logo.svg" width="120px" />
                <h1 class="d-inline site_title" style="font-family:Arial;">My Stamp Maker</h1>
                <!-- <a href="pageMaker/index.html">Second Page</a> -->

            </div>
            <div class="col-md-3 col-3" style="display: flex; align-items:center">
                <div class="d-flex">
                    <!-- <p class="mt-4">
                        <a href="pageMaker/" class="text-white" style="text-decoration: none;">Create Page</a>
                    </p> -->
                    <?php
                    getNav();
                    function getNav()
                    {
                        if (isset($_SESSION["uid"])) {

                            $d = $_SESSION["uid"];
                            echo "<h6 style='margin-top:20px;'>Welcome, " . $d['username'] . "</h6><button class='btn btn-outline-warning' onclick='logout()' style='margin-top:20px;'>Log Out</button>";
                            if ($d['role'] == "admin") {
                                // echo "<button class='btn btn-outline-warning' onclick='Dashboard()' style='height:40px;margin:20px;'>Dashboard</button>";
                                echo "<a class='btn btn-outline-white' href='admin' style='height:40px;margin:20px;'>Dashboard</a>";
                            }
                        } else {
                            echo "<button type='button' class='sign_up btn btn-outline-warning text-white btn-sm m-2 pl-3 pr-3' data-toggle='modal' data-target='#myModal' style='margin-top:20px;'>Sign Up</button>
                            <button type='button' class='login_btn btn btn-outline-warning text-white btn-sm m-2 pl-3 pr-3' data-toggle='modal' data-target='#myModalLogin' style='margin-top:20px;' onclick='reset()'>Log In</button>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid mt-2 p-0">
    <div class="col-lg-2 text-center banner_left">
        <img src="assets/img/banner.jpg" class="m-2" alt="" style="width:150px; height:500px;" />
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
           <div class="canvas-col" >
              <center>
                <div id="stageparent" class="canvas-stageparent" style="border:none;">
                    <div id="parent_sub">
                                  <!-- <div id="container"></div> -->
                        <div class="" style="padding:0px;margin-top: -20px;">
                            <div class="row m-2 selection_row" id="addroundtext">
                                <div class="col-md-3 selection_box">
                                    <img class="iconimg" src="assets/img/IconRound.svg" alt="" />
                                    <span class="selection_text">Round<br>Text</span>
                                                
                                </div>
                                <div class="col-md-3 selection_box" id="addlinetext" >
                                    <img class="iconimg" src="assets/img/IconLine.svg" alt="" /> 
                                    <span class="selection_text">Inline<br>Text</span>
                                                 
                                </div>
                                <div class="col-md-3 selection_box" id="addcircle" >
                                    <img class="iconimg" src="assets/img/IconShape.svg" alt=""> 
                                    <span class="selection_text">Add<br>Shape</span>
                                </div>
                                <div class="col-md-3 selection_box" id="addimage">
                                    <img class="iconimg"  src="assets/img/IconSquare.svg" alt="">
                                    <span class="selection_text">Add<br>Image</span>
                                </div>
                            </div>
                        </div>
                        <div class="canvas text-center" >
                                                    
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
         
      </div>
    </div>
    <div class="col-lg-2 col-md-12 col-sm-12 banner_right text-center">
        <img src="assets/img/banner.jpg" class="m-2" alt="" style="width:150px; height:500px;" />
    </div>
</div>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-lg-2 col-md-1 text-center"></div>
        <div class="col-md-4 text-right ">
            <img src="assets/img/banner.jpg" class="mt-5" alt="" style="width:80%; height:55px;" />
        </div>
        <div class="col-md-4 text-right " >
            <img src="assets/img/banner.jpg" class="mt-5" alt="" style="width:80%; height:55px;" />
        </div>

        <div class="col-lg-2 col-md-3 text-center ">
            <div class='col-lg-2 demo bottomright seggestions-section'>
                <div class=" p-1" id='howto' onclick='toggleinstruction()'>
                    <p class="px" style="font-size: 15px!important;">Suggestions and concerns Click Here</p>
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
    </div>
</div>
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
    <?php include 'inc/signup_modal.php'; ?>
<?php include 'inc/login_modal.php'; ?>

<?php include 'inc/suggestion.php'; ?>
