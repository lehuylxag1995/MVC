<div class="col-sm-4 col-sm-offset-1">
    <div class="login-form">
        <!--login form-->
        <h2>Login to your account</h2>
        <form action="#">
            <input type="text" id="txtNameRegister" placeholder="Name">
            <p id="mess-Name-Register" class="text-danger"></p>
            <input type="email" placeholder="Email Address">
            <span>
                <input type="checkbox" class="checkbox">
                Keep me signed in
            </span>
            <button type="submit" class="btn btn-default">Login</button>
        </form>
    </div>
    <!--/login form-->
</div>
<div class="col-sm-1">
    <h2 class="or">OR</h2>
</div>
<div class="col-sm-4">
    <div class="signup-form">
        <!--sign up form-->
        <h2>New User Signup!</h2>
        
        <form action="register" method="POST">
            <input type="text" name="txtName" placeholder="Name">
            <input type="email" name="txtEmail" placeholder="Email Address">
            <input type="password" name="txtPassword" placeholder="Password">
            <button type="submit" name="btnSignup" class="btn btn-default">Signup</button>
        </form>
        <?php 
            if( isset($data['result_insert']) )
            {
                
                if( ((int)json_decode($data['result_insert'])) > 0 )
                {
                    echo '<h3 id="mess-insert" class="text-success">Đăng ký thành công</h3>';
                }
                else
                {
                    echo '<h3 class="text-danger">Đăng ký thất bại</h3>';
                }
            }
        ?>
    </div>
    <!--/sign up form-->
</div>

