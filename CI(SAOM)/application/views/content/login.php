<?php $img_url = base_url() . "assets/img/"; ?>
<section class="" id="">
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h3 class="card-title text-center">Log in to SAOM</h3>
                <br>
                <div class="card-text">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <a href="#" style="float:right;font-size:12px;">Forgot password?</a>
                            <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn"><a href="<?php echo site_url('Home/dashboard'); ?>">Sign in</a></button>
                        <div class="sign-up">
                            Don't have an account? <a href="<?php echo site_url('Home/register'); ?>">Create One</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>