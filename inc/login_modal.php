<div class="modal fade" id="myModalLogin" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <p>Log In</p>
                <button type="button" class="close button_close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <form action="javascript:login()" method="post" id="loginForm">
                    <b id="info" style="color:red"></b>
                    <div class="form_row">
                        <i class="fas fa-user"></i>
                        <input type="text" class="signup form-control" id="usernameLogin" value="<?php if (isset($_COOKIE["usernameLogin"])) {
                                                                                                        echo $_COOKIE["usernameLogin"];
                                                                                                    } ?>" placeholder="Username" required="">
                    </div>
                    <div class="form_row">
                        <i class="fas fa-key"></i>
                        <input type="password" class="signup form-control" id="passLogin" placeholder="Password" required="" value="<?php if (isset($_COOKIE["passLogin"])) {
                                                                                                                                        echo $_COOKIE["passLogin"];
                                                                                                                                    } ?>">
                    </div>
                    <div class="login_terms_grid form_checkboxes">
                        <center>
                            <p style="font-weight:normal;text-align: left;font-weight:600">Not registered yet? Click<a id="reg" onclick="notauser();" style="color:#FF8800">
                                    here</a></p>
                        </center>
                        <div class="field-group">
                            <div>
                                <label for="remember-me">Remember me</label><input type="checkbox" name="remember" id="remember" <?php if (isset($_COOKIE["usernameLogin"])) { ?> checked <?php } ?> />

                            </div>
                        </div>
                    </div>
                    <center>
                        <button class="btn btn-md btn-success modals" id="login">Log In</button>
                    </center>
                </form>

            </div>
        </div>
    </div>
</div>