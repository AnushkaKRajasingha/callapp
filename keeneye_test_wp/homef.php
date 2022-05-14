<?php /*
* Home page template part
*/ ?>
<div class="container-fluid primary-bg-dark">
        <section id="sec-hero" class="container">
            <div class="row">
                <div class="col-6">
                    <h1><?php if(!empty(get_theme_mod(KEYTECHDOMAIN . 'hero_sec_h1_text'))) { echo get_theme_mod(KEYTECHDOMAIN . 'hero_sec_h1_text'); } else echo "Have your best call" ;?></h1>
                    <h4><?php if(!empty(get_theme_mod(KEYTECHDOMAIN . 'hero_sec_h4_text'))) { echo get_theme_mod(KEYTECHDOMAIN . 'hero_sec_h4_text'); } else echo "Fast, easy & unlimited conferece call services"; ?></h4>
                    <div class="cta">
                        <button type="button" class="btn btn-primary btn-light" ><?php if(!empty(get_theme_mod(KEYTECHDOMAIN . 'hero_sec_btn1_text'))) { echo get_theme_mod(KEYTECHDOMAIN . 'hero_sec_btn1_text'); } else echo "Try it Free";?></button>
                        <button type="button" class="btn btn-primary btn-dark"><?php if(!empty(get_theme_mod(KEYTECHDOMAIN . 'hero_sec_btn2_text'))) { echo get_theme_mod(KEYTECHDOMAIN . 'hero_sec_btn2_text'); } else echo "Get a Demo"; ?></button>
                    </div>
                </div>
                <div class="col-6">
                    <img class="img-fluid" src="<?php echo get_theme_mod(KEYTECHDOMAIN . 'hero_sec_image'); ?>" alt="Hero Image" title="Hero Image" />
                </div>
            </div>
        </section>
</div>
<div class="container-fluid ">
    <section id="sec-1" class="container">
        <h3 class="text-center">Instant Conference Calls</h3>
        <h5 class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pellentesque vulputate sapien id accumsan. Phasellus luctus nisi felis, in placerat urna convallis vitae. In egestas lectus scelerisque ipsum feugiat, vitae efficitur lectus eleifend. Suspendisse quis arcu in erat pulvinar tempor. Donec sed tempor eros, nec venenatis felis. Nam pellentesque, tortor.</h5>
        <div class="text-center" ><img class="img-fluid" src="<?php echo KEYTECHURL;?>/images/img-sec-1.svg" alter="Section - 1 image" /></div>
    </section>
</div>
<div class="container-fluid secondary-bg">
    <div id="sec-2" class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div><img class="img-fluid" src="<?php echo KEYTECHURL;?>/images/img-sec-2.svg" alt="Section - 2 image" /></div>
            </div>
            <div class="col-6">
                <div>
                    <h2>Perfect Solution for Small Businesses</h2>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
                    <div class="cta">
                        <button type="button" class="btn btn-primary btn-dark">Try it Free</button>
                        <button type="button" class="btn btn-primary btn-light">Get a Demo</button> <i class="bi bi-star"></i>
                    </div>
                    <div class="review row">
                    <div class="col-5">
                        <img src="<?php echo KEYTECHURL;?>/images/img-starts.svg" alt="strts" /> </div>
                        <div class="col-7"><p>9,876 businesses use ChatApp and they rate it as 5-stars</p></div>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery( document ).ready(function() {
        jQuery('button').click(function(){
            window.location.href='https://tinyurl.com/random-slug';
        });
    });
</script>
