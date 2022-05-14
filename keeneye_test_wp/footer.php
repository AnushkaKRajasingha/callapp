<footer class="container-fluid ">
    <section id="sec-footer" class="container">
        <div class="row d-block d-sm-none" >
            <div class="col-12">
                <img class="logo" src="<?php echo KEYTECHURL;?>/images/omg-footer-logo.svg" alt="Footer logo" /><br/>
                <span>The last team chat you<br/>will ever need</span>
            </div>
        </div>
        <div class="d-none d-md-block">
        <div class="row" >
            <div class="col-4">
                <img class="logo" src="<?php echo KEYTECHURL;?>/images/omg-footer-logo.svg" alt="Footer logo" /><br/>
                <span>The last team chat you<br/>will ever need</span>
            </div>
            <div class="col-2" >

                <?php if(is_active_sidebar(KEYTECHDOMAIN.'_widgetarea_1')) {  dynamic_sidebar( KEYTECHDOMAIN.'_widgetarea_1'); } else { ?>
                <span><Strong>Help</Strong></span>
                <ul>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Knowledge Base</a></li>
                    <li><a href="#">Tutorials</a></li>
                </ul>
                <?php } ?>
            </div>
            <div class="col-2">
                <?php if(is_active_sidebar(KEYTECHDOMAIN.'_widgetarea_2')) {  dynamic_sidebar( KEYTECHDOMAIN.'_widgetarea_2'); } else { ?>
                <span><Strong>Features</Strong></span>
                <ul>
                    <li><a href="#">Screen Sharing</a></li>
                    <li><a href="#">iOS & Android Apps</a></li>
                    <li><a href="#">File Sharing</a></li>
                    <li><a href="#">User Management</a></li>
                </ul>
                <?php } ?>
            </div>
            <div class="col-2">
                <?php if(is_active_sidebar(KEYTECHDOMAIN.'_widgetarea_3')) {  dynamic_sidebar( KEYTECHDOMAIN.'_widgetarea_3'); } else { ?>
                <span><Strong>Company</Strong></span>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
                <?php } ?>
            </div>
            <div class="col-2">
                <?php if(is_active_sidebar(KEYTECHDOMAIN.'_widgetarea_4')) {  dynamic_sidebar( KEYTECHDOMAIN.'_widgetarea_4'); } else { ?>
                <span><Strong>Contact Us</Strong></span>
                <ul>
                    <li><a href="#">info@chatapp.com</a></li>
                    <li><a href="#">1-800-200-300</a></li>
                    <li><a href="#">3500 Deer Creek Rd<br/>Palo Alto, CA</a></a></li>
                </ul>
                <?php } ?>
            </div>
        </div>
    </div>
        <div class="row copyright"><span><?php if(!empty(get_theme_mod(KEYTECHDOMAIN . '_copyright_text'))) { echo get_theme_mod(KEYTECHDOMAIN . '_copyright_text'); } else echo "© Copyright Chatpp Inc." ;?></span></div>
    </section>
</footer>
</body>
</html>