<?php
?>


<footer id= "footer" class="main-footer pt-20 pb-60">

    <section class="vc_row">
        <div class="container">
            <div class="row">

                <div class="lqd-column col-md-4 col-sm-4 col-xs-12 mb-20 main-navigation">


                    <a class="navbar-brand" href="index.php" rel="home">
										<span >

											<img class="logo-default" src="./assets/img/logo/main-logo.png" alt="Techmarkable">
										</span>
                    </a>

                    <p class="copy-right-text"> Copyright  ©2020 by Techmarkable.com</p>

                </div><!-- /.col-md-3 for logo-->


                <div class="lqd-column  col-md-4 col-sm-4 col-xs-12 mb-20 main-navigation">

                    <h3 class="widget-title">Main Navigation</h3>
                    <ul class="lqd-custom-menu reset-ul font-size-18 lh-2">
                        <li><a href="#wrap">Homepage</a></li>

                        <li><a href="#aboutus">About Us</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#currentproject">project</a></li>
                    </ul>

                </div>


                <div class="lqd-column col-md-4 col-sm-4 col-xs-12 mb-20 footer-right">
                    <h3 class="widget-title" align="center" >Get in touch</h3>
                    <div class="ld-sf ld-sf--input-bordered ld-sf--button-solid ld-sf--size-sm ld-sf--circle ld-sf--border-thin ld-sf--button-show ld-sf--button-inside">
                        <!-- Begin Mailchimp Signup Form -->

                        <div id="mc_embed_signup">
                            <form action="https://gmail.us5.list-manage.com/subscribe/post?u=45bb665454b57c0fdefdb054b&amp;id=5b269a24c1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                    <div class="mc-field-group">
                                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter your Email ID">
                                    </div>


                                    <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_45bb665454b57c0fdefdb054b_5b269a24c1" tabindex="-1" value=""></div>
                                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                </div>
                            </form>
                        </div>
                        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                        <!--End mc_embed_signup-->
                        <div class="ld_sf_response"></div>
                    </div><!-- /.ld-sf -->

                </div><!-- /.lqd-column col-md-4 col-md-offset-1 -->


                <div class="lqd-column col-md-12 col-sm-12 col-xs-12 text-md-right">
                    <div class="header-module">

                        <ul class="social-icon branded-text social-icon-md">
                            <li><a href="https://www.facebook.com/techmarkable/?modal=admin_todo_tour" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/techmarkable?s=09" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/techmarkable/about/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://www.instagram.com/techmarkableofficial/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>



            </div><!-- /.row -->
        </div><!-- /.container -->

    </section>



</footer><!-- /.main-footer -->

</div><!-- /#wrap -->

<!-- include Google hosted jQuery Library -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script type="text/javascript">
    /*$('form').on('submit', function (e) {
        e.preventDefault(); //prevent default action
        var proceed = true;
        var form = this;

        //simple validation at client's end
        //loop through each field and we simply change border color to red for invalid fields
        $(form).find(':required').each(function(){
            $(this).css('border-color','');
            if(!$.trim($(this).val())){ //if this field is empty
                $(this).css('border-color','red'); //change border color to red
                proceed = false; //set do not proceed flag
            }
            //check invalid email
            var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                $(this).css('border-color','red'); //change border color to red
                proceed = false; //set do not proceed flag
            }

        }).keyup(function() { //reset previously set border colors on .keyup()
            $(this).css('border-color','');
        }).change(function() {  //for select box
            $(this).css('border-color','');
        });

        if(proceed){ //everything looks good! proceed...
            //get input field values data to be sent to server
            var post_url = $(this).attr("action"); //get form action url
            var request_method = $(this).attr("method"); //get form GET/POST method
            var form_data = $(this).serialize(); //Encode form elements for submission

            //Ajax post data to server
            $.ajax({
                url : post_url,
                type: request_method,
                dataType : 'json',
                data : form_data
            })
                .done(function(response){
                    if(response.type == 'error'){ //load json data from server and output message
                        output = '<div class="error">'+response.text+'</div>';
                    }else{
                        $(form)[0].reset(); //reset this form upon success
                        output = '<div class="success">'+response.text+'</div>';
                    }
                    $("#contact_form #contact_results").html(output);
                });
        }
    });*/
    //<-----------------------------------script for dropdown button in topbar----------------------------------->

    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-button-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
    // <!-------------------------scroll to top button script------------------->
    var btn = $('#button');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });
    // <!---------------------------------------------------->
    $(window).scroll(function(){
        if($(this).scrollTop() > 80){
            $('.mainbar').addClass('sticky')
        } else{
            $('.mainbar').removeClass('sticky')
        }
    });
</script>

<script src="./assets/vendors/jquery.min.js"></script>
<script src="./assets/js/theme-vendors.js"></script>
<script src="./assets/js/theme.min.js"></script>




</body>
</html>
