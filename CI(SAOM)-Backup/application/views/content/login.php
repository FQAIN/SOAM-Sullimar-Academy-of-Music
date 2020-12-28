<?php $img_url = base_url() . "assets/img/"; ?>
<style>
    .card-text {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 360px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    .card-text input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
    }
    .card-text button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #4CAF50;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
    }
    .card-text button:hover,.form button:active,.form button:focus {
        background: #43A047;
    }
</style>
<section class="" id="">
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h3 class="card-title text-center">Log in to SAOM</h3>
                <br>
                <div class="card-text">
                    <?php
                    echo form_open('Login/index/');
                    if ($this->session->userdata('loggedIn')) {

                        echo '<p><a href="' . site_url("Home/Logout") . '">Logout</a></p>';
                    } else {
                        echo
                        '<label>Email</label><br>
                            <input type="text" name="email" placeholder="Email" size="10" class="input_field"><br>
                                
                            <label>Password</label><br>
                                <input type="password" name="password" placeholder="Password" class="input_field">

                          <br>   <br>
                            <input type="submit" name="submit" value="Login" alt="Login" id="submit_btn" >';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>