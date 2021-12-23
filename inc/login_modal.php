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
                    <div class="form_checkboxes">
                        <p style="font-weight:normal;text-align: left;">Not registered yet? Click<a id="reg" onclick="notauser();" style="color:#FF8800;cursor:pointer;">
                                here</a></p>
                        <div>
                            <input type="checkbox" name="remember" id="remember" <?php if (isset($_COOKIE["usernameLogin"])) { ?> checked <?php } ?> /><label for="remember-me">&nbsp;&nbsp;Remember me</label>
                        </div>
                    </div>
                    <button class="button sign_up modals" id="login">Log In</button>
                </form>

            </div>
        </div>
    </div>
</div>