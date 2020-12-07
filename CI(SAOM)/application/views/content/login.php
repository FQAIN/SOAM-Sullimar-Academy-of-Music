<?php $img_url = base_url() . "assets/img/"; ?>
<section class="" id="">
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h3 class="card-title text-center">Log in to SAOM</h3>
                <br>
                <div class="card-text">
                    <?php
                    echo form_open('Login/index/');
                    if ($this->session->userdata('loggedIn')) 
                    {

                        echo '<p><a href="' . site_url("Home/Logout") . '">Logout</a></p>';
                    } 
                    else 
                    {
                        echo 
                        '<label>Email</label><br>
                            <input type="text" name="email" placeholder="Email" size="10" class="input_field"><br>
                                
                            <label>Password</label><br>
                                <input type="password" name="password" placeholder="Password" class="input_field">

                            <p><a href="' . site_url("GG/AddEntry") . '">Register</a></p>
                            <input type="submit" name="submit" value="Login" alt="Login" id="submit_btn" >';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>