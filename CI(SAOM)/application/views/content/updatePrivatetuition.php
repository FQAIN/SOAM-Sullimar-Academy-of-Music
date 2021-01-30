<html>
    <head>
        <title>Update Privatetuition</title>
        <style>
            @import url(https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,531;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,531;1,600;1,700;1,800;1,900&display=swap);

            html {
                font-family: Jost, sans-serif;
                color: #5756a2;
            }
            #form {
                max-width: 100%;
                margin: 3.125rem;
                background: #f1f9fe;
                box-shadow: 0 0.313rem 3.875rem 0 rgba(0, 0, 0, 0.19);
                border-radius: 1.25rem;
                font-size: 1.25rem;
                font-weight: 500;
            }
            #form #title, #form #description {
                text-align: center;
            }
            #form #title {
                padding-top: 3.125rem;
                font-size: 3.125rem;
                font-weight: 700;
                margin: 0;  
            }
            #form #description {
                font-size: 2.063rem;
                font-weight: 300;
                line-height: 1.2;
                margin: 1.25rem;
            }
            #survey-form {
                margin: 3.125rem 6.25rem 0 6.25rem;
            }
            #survey-form .form-gp {
                margin: 0 0 1.75rem;
                padding: 0.25rem;
            }
            #survey-form .form-gp p {
                padding-left: 0.5rem;
                margin: 0;
            }
            #survey-form label .italic {
                font-style: italic;
                font-size: 1rem;
                font-weight: 400;
            }
            #survey-form input, #survey-form select, textarea {
                width: 95%;
                height: 3rem;
                margin-left: 0.5rem;
                padding-left: 0.5rem;
                border-radius: 0.188rem;
                color: #5756a2;
                background-color: #ddeef9;
                border: 0.125rem solid #ddeef9;
                font-size: 1.25rem;
                font-weight: 500;
            }
            input:focus, #survey-form input:focus, textarea:focus {
                outline: 0;
                background-color: transparent;
                border-color: #5756a2;
                border: 0 0 0 0.2rem rgba(87,86,162,.25);
            }
            ::placeholder { 
                color: #5756a2;
            }
            input[type='radio'], #survey-form input[type='radio'] {
                width: 1.25rem;
                height: 1.25rem;
            }
            #survey-form .row .col-md-4 label {
                margin-right: 1.875rem;
            }
            #survey-form .row .col-md-4 span {
                position: relative;
                top: -1.9px;
            }
            put[type='checkbox'], #survey-form input[type='checkbox'] {
                width: 1.25rem;
                height: 1.25rem;
            }
            ul li {
                list-style: none;
            }
            .form-gp .items li {
                width: 50%;
                float: left;
            }
            .form-gp #textarea-label p {
                margin-top: 10.625rem;
            }
            #footer {
                min-height: 25rem;
                position: relative;
            }
            #footer .footer-img {
                left: -7.25rem;
                bottom: 1.875rem;
                position: absolute;
                float: left!important;
            }
            #footer .footer-img img {
                max-width: 100%;
                height: auto;
            }
            #footer .action {
                position: absolute;
                right: 3.125rem;
                bottom: 3.125rem;
                z-index: 1;
                margin: 0 0.625rem;
            }
            #footer .action button, .action button {
                height: 3.094rem;
                width: 11.25rem;
                color: #fff;
                fill: #fff;
                display: block;
                font-size: 1rem;
                font-weight: 500;  
                text-align: center;
                background-color: #5756a2;
                border: 0.125rem solid #5756a2;
                cursor: pointer;
                margin-left: 25px;
            }
            .action button svg {
                width: 1rem;
                top: 0.25rem;
                color: #fff;
                right: -1.5rem !important;
                left: inherit !important;
                position: relative;
            }
            .row {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }
            @media screen and (max-width: 1050px){
                #footer .footer-img img {
                    max-width: 90%;
                }
            }
            @media screen and (max-width: 991px){
                #survey-form {
                    margin: 3.125rem 3.5rem 0 3.5rem;
                }
                #footer .action {
                    position: static;
                    margin-top: 3.125rem;
                }
            }
            @media screen and (max-width: 850px){
                #survey-form .form-gp p {
                    padding-left: 1rem;
                }
                #survey-form input, #survey-form select, textarea {
                    width: 90%;
                    margin-left: 1rem;
                }
            }
            @media screen and (max-width: 767px) {
                #form {
                    margin: 2rem;
                }
                #survey-form {
                    margin: 3.125rem 2rem 0 2rem;
                }
                #form #title {
                    font-size: 2.25rem;
                }
                #form #description {
                    font-size: 1.625rem;
                    margin: 0 0.625rem;
                } 
                #footer .footer-img {
                    left: -2.5rem;
                }
                #footer .footer-img img {
                    max-width: 80%;
                }
            }
            @media screen and (max-width: 667px) {
                .form-gp .items li {
                    width: 100%;
                }
                .form-gp .items li:last-child {
                    margin-bottom: 1rem;
                }
                @media screen and (max-width: 600px) {
                    #form {
                        margin: 0;
                    }
                    #survey-form {
                        margin: 3.125rem 0rem 0 0rem;
                    }
                    #form #title {
                        font-size: 1.5em;
                        line-height: 1;
                    }
                    #footer .footer-img {
                        left: -0.5rem;
                    }
                }
                @media screen and (max-width: 510px) {
                    #dropdown-label .aling {
                        margin: 0 1rem;
                        text-align: left;
                    }
                    #footer {
                        min-height: 20rem;
                    }
                }
                @media screen and (max-width: 460px) {
                    #form #description {
                        font-size: 1.125rem;
                    }
                }
                @media screen and (max-width: 320px){
                    #footer {
                        min-height: 15rem;
                    }
                }
                @media (min-width: 768px) {
                    .col-md-4 {
                        -ms-flex: 0 0 33.333333%;
                        flex: 0 0 33.333333%;
                        max-width: 33.333333%;
                    }
                    #survey-form {
                        max-width: 46.875rem;
                    }
                }




            </style>
            <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js">
            </script>
            <script type="text/javascript">
                $(function () {
                    $("#date").datepicker({dateFormat: 'yy'});
                });
            </script>
        </head>
        <body>
            <div id="form">
                <section id="survey-form">
                    <div class="form-gp">
                        <form method="post" action="<?php echo base_url('index.php/Privatetuitions/commitPrivatetuitionUpdate'); ?>" >
                            <h2>Update Private Tuition Details</h2>
                            <p><a href="<?php echo base_url(); ?>index.php/Privatetuitions/index/" class="back"><-Back to Privatetuition Listings</a></p>

                            <?php
                            foreach ($privatetuition->result_array() as $item) {
                                echo
                                "
                                            <input type='hidden' name='privatetuitionID' value='" . $item['privatetuitionID'] . "'/>
                                                
                                            <p><strong>Room:</strong><br/>
                                            <input type='text' name='room' value='" . $item['room'] . "' id='special'/>
                                                
                                            <p><strong>Student ID:</strong><br/>
                                            <input type='number' name='studentID' value='" . $item['studentID'] . "' id='special'/>
                                                
                                            <p><strong>Staff ID:</strong><br/>
                                            <input type='number' name='staffID' value='" . $item['staffID'] . "' id='special'/>
                                            
                                            <p><strong>Note:</strong><br/>
                                            <input type='text' name='note' value='" . $item['note'] . "' id='special'></p>
                                                
                                            <p><strong>Course ID:</strong><br/>
                                            <input type='number' name='courseID' value='" . $item['courseID'] . "' id='special'/></p>
                                                
                                            <p><strong>date:</strong><br/>
                                            <input type='date' name='date' value='" . $item['date'] . "' id='special'/></p>
                                                
                                            <p><strong>time:</strong><br/>
                                            <input type='time' name='time' value='" . $item['time'] . "' id='special'/></p>
                                        ";
                            }
                            ?>
                            <br>
                            <p><input type="submit" name="submit" value="Update Private Tuition"></p>
                            <br>
                        </form>
                    </div>
                </section>
            </div>
        </body>
    </html>