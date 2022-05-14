<?php 
class clskeeneye{

    var $defaults_logosettings = array(
        'height'               => 21,
        'width'                => 76,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,
    );

    function __construct()
    {
        add_action( 'wp_enqueue_scripts',array($this, KEYTECHDOMAIN.'_scripts') );
        add_theme_support( 'custom-logo', $this->defaults_logosettings );
        add_filter( 'upload_mimes', array($this,KEYTECHDOMAIN.'_mime_types') );
        add_action( 'after_setup_theme', array($this,KEYTECHDOMAIN.'_register_navwalker' ));
        add_action( 'init', array($this,KEYTECHDOMAIN.'_register_menu' ));
        add_action( 'widgets_init', array($this,KEYTECHDOMAIN.'_widgets_init' ));

        $this->keytech_customizer();

    }


    public function keytech_scripts() {
        wp_register_script( 'propper', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ,array('jquery'));
        wp_register_script( 'bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js",array('jquery'));
        wp_enqueue_script( 'propper' );
        wp_enqueue_script( 'bootstrap' );

        wp_register_style( 'bootstrap_keytec', KEYTECHURL. '/css/customization.css');
        wp_register_style( 'bootstrap_keytec_proj', KEYTECHURL. '/css/project.css');
        wp_enqueue_style('bootstrap_keytec');
        wp_enqueue_style('bootstrap_keytec_proj');
    }

    public function keytech_mime_types( $mimes ){
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }

    function keytech_register_navwalker(){
        require_once KEYTECHDIR. '/inc/class-wp-bootstrap-navwalker.php';
    }

    function keytech_register_menu() {
        register_nav_menu('header-menu',__( 'Header Menu' ));
        register_nav_menu('footer-menu',__( 'Footer Menu' ));
    }

    public static function keytech_menu_fallback( $args ) {
        ?>
        <div class="collapse navbar-collapse fallbackmenu" id="navbarNav">
            <ul class="nav nav-pills">
                <li class="nav-item"><a  data-bs-toggle="collapse" href="#menumessage" role="button" aria-expanded="false" aria-controls="menumessage" class="nav-link" aria-current="page">Product</a></li>
                <li class="nav-item"><a data-bs-toggle="collapse" href="#menumessage" role="button" aria-expanded="false" aria-controls="menumessage" class="nav-link" aria-current="page">Services</a></li>
                <li class="nav-item"><a data-bs-toggle="collapse" href="#menumessage" role="button" aria-expanded="false" aria-controls="menumessage" class="nav-link" aria-current="page">Pricing</a></li>
                <li class="nav-item"><a data-bs-toggle="collapse" href="#menumessage" role="button" aria-expanded="false" aria-controls="menumessage" class="nav-link" aria-current="page">Contact</a></li>
                <li class="nav-item"><a data-bs-toggle="collapse" href="#menumessage" role="button" aria-expanded="false" aria-controls="menumessage" class="nav-link" aria-current="page">Log In</a></li>
                <li class="nav-item"><a href="#" class="nav-link menu-button">Try it Free</a></li>
            </ul>
        </div>

              <div class="collapse fixed-top alert-dismissible" role="alert" id="menumessage">
                  <div class="card card-body">
                        <h5>These pages does not exist. only for the demonstration purpose. Go ahead and create new menu from the admin area.</h5>
                  </div>
              </div>
        <?php
    }

    function keytech_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Footer Widget Area 1', KEYTECHDOMAIN ),
            'id'            => KEYTECHDOMAIN.'_widgetarea_1',
            'description'   => __( 'Widgets in this area will be shown under the page footer column 1', KEYTECHDOMAIN ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<span><Strong>',
            'after_title'   => '</Strong></span>',
        ) );
        register_sidebar( array(
            'name'          => __( 'Footer Widget Area 2', KEYTECHDOMAIN ),
            'id'            => KEYTECHDOMAIN.'_widgetarea_2',
            'description'   => __( 'Widgets in this area will be shown under the page footer column 2', KEYTECHDOMAIN ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<span><Strong>',
            'after_title'   => '</Strong></span>',
        ) );
        register_sidebar( array(
            'name'          => __( 'Footer Widget Area 3', KEYTECHDOMAIN ),
            'id'            => KEYTECHDOMAIN.'_widgetarea_3',
            'description'   => __( 'Widgets in this area will be shown under the page footer column 3', KEYTECHDOMAIN ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<span><Strong>',
            'after_title'   => '</Strong></span>',
        ) );
        register_sidebar( array(
            'name'          => __( 'Footer Widget Area 4', KEYTECHDOMAIN ),
            'id'            => KEYTECHDOMAIN.'_widgetarea_4',
            'description'   => __( 'Widgets in this area will be shown under the page footer column 4', KEYTECHDOMAIN ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<span><Strong>',
            'after_title'   => '</Strong></span>',
        ) );
    }

    private function keytech_customizer(){
        global  $wp_customize;
        if(!is_null($wp_customize)) {
            $wp_customize->add_panel(KEYTECHDOMAIN . '_theme_options',
                array(
                    'priority' => 0,
                    'title' => __('Theme Options', KEYTECHDOMAIN),
                    'description' => __(KEYTECHNAME . '- Theme Modifications can be done here', KEYTECHDOMAIN),
                )
            );

            /* Static home page settings - starts */



            $wp_customize->add_section(KEYTECHDOMAIN . 'stat_hp_options',
                array(
                    'title' => __('Static Home Page Settings', KEYTECHDOMAIN),
                    'priority' => 1,
                    'panel' => KEYTECHDOMAIN . '_theme_options'
                )
            );



            $wp_customize->add_setting(KEYTECHDOMAIN . 'hero_sec_image',
                array(
                    'default' => get_theme_file_uri(KEYTECHURL."/images/img-hero-sec.svg"),
                    'sanitize_callback' => 'sanitize_text_field',
                    'transport' => 'refresh',
                )
            );

            $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, KEYTECHDOMAIN . 'hero_sec_image', array(
                'label' => 'Home Page Hero Section Image',
                'description' => 'Image put here will be outputted in the Home Page Hero Section image',
                'priority' => 10,
                'section' => KEYTECHDOMAIN . 'stat_hp_options',
                'settings' => KEYTECHDOMAIN . 'hero_sec_image',
            )));



            $wp_customize->add_setting(KEYTECHDOMAIN . 'hero_sec_h1_text',
                array(
                    'default' => __('Have your best call', KEYTECHDOMAIN),
                    'sanitize_callback' => 'sanitize_text_field',
                    'transport' => 'refresh',
                )
            );
            $wp_customize->add_control(KEYTECHDOMAIN . 'hero_sec_h1_text',
                array(
                    'type' => 'text',
                    'priority' => 10,
                    'section' => KEYTECHDOMAIN . 'stat_hp_options',
                    'label' => 'Home Page Hero Section Tile Text',
                    'description' => 'Text put here will be outputted in the Home Page Hero Section Tile',
                )
            );

            $wp_customize->add_setting(KEYTECHDOMAIN . 'hero_sec_h4_text',
                array(
                    'default' => __('Fast, easy & unlimited conferece call services', KEYTECHDOMAIN),
                    'sanitize_callback' => 'sanitize_text_field',
                    'transport' => 'refresh',
                )
            );
            $wp_customize->add_control(KEYTECHDOMAIN . 'hero_sec_h4_text',
                array(
                    'type' => 'text',
                    'priority' => 10,
                    'section' => KEYTECHDOMAIN . 'stat_hp_options',
                    'label' => 'Home Page Hero Section Text',
                    'description' => 'Text put here will be outputted in the Home Page Hero Section text',
                )
            );

            $wp_customize->add_setting(KEYTECHDOMAIN . 'hero_sec_btn1_text',
                array(
                    'default' => __('Try it Free', KEYTECHDOMAIN),
                    'sanitize_callback' => 'sanitize_text_field',
                    'transport' => 'refresh',
                )
            );
            $wp_customize->add_control(KEYTECHDOMAIN . 'hero_sec_btn1_text',
                array(
                    'type' => 'text',
                    'priority' => 10,
                    'section' => KEYTECHDOMAIN . 'stat_hp_options',
                    'label' => 'Home Page Hero Section Button 1 Text',
                    'description' => 'Text put here will be outputted in the Home Page Hero Section Button 1',
                )
            );
            $wp_customize->add_setting(KEYTECHDOMAIN . 'hero_sec_btn1_url',
                array(
                    'default' => __('#', KEYTECHDOMAIN),
                    'sanitize_callback' => 'sanitize_text_field',
                    'transport' => 'refresh',
                )
            );
            $wp_customize->add_control(KEYTECHDOMAIN . 'hero_sec_btn1_url',
                array(
                    'type' => 'url',
                    'priority' => 10,
                    'section' => KEYTECHDOMAIN . 'stat_hp_options',
                    'label' => 'Home Page Hero Section Button 1 Url',
                    'description' => 'Text put here will be outputted in the Home Page Hero Section Button 1 url',
                )
            );
            $wp_customize->add_setting(KEYTECHDOMAIN . 'hero_sec_btn2_text',
                array(
                    'default' => __('Get a Demo', KEYTECHDOMAIN),
                    'sanitize_callback' => 'sanitize_text_field',
                    'transport' => 'refresh',
                )
            );
            $wp_customize->add_control(KEYTECHDOMAIN . 'hero_sec_btn2_text',
                array(
                    'type' => 'text',
                    'priority' => 10,
                    'section' => KEYTECHDOMAIN . 'stat_hp_options',
                    'label' => 'Home Page Hero Section Button 2 Text',
                    'description' => 'Text put here will be outputted in the Home Page Hero Section Button 2',
                )
            );
            $wp_customize->add_setting(KEYTECHDOMAIN . 'hero_sec_btn2_url',
                array(
                    'default' => __('#', KEYTECHDOMAIN),
                    'sanitize_callback' => 'sanitize_text_field',
                    'transport' => 'refresh',
                )
            );
            $wp_customize->add_control(KEYTECHDOMAIN . 'hero_sec_btn2_url',
                array(
                    'type' => 'url',
                    'priority' => 10,
                    'section' => KEYTECHDOMAIN . 'stat_hp_options',
                    'label' => 'Home Page Hero Section Button 2 Url',
                    'description' => 'Text put here will be outputted in the Home Page Hero Section Button 2 url',
                )
            );
            /* Static home page settings - ends */


            $wp_customize->add_section(KEYTECHDOMAIN .'_footer_options',
                array(
                    'title' => __('Footer Options', KEYTECHDOMAIN),
                    'priority' => 1,
                    'panel' => KEYTECHDOMAIN . '_theme_options'
                )
            );

            // Setting for Copyright text.
            $wp_customize->add_setting(KEYTECHDOMAIN .'_copyright_text',
                array(
                    'default' => __('© Copyright Chatpp Inc.', KEYTECHDOMAIN),
                    'sanitize_callback' => 'sanitize_text_field',
                    'transport' => 'refresh',
                )
            );

            // Control for Copyright text
            $wp_customize->add_control(KEYTECHDOMAIN .'_copyright_text',
                array(
                    'type' => 'text',
                    'priority' => 10,
                    'section' => KEYTECHDOMAIN .'_footer_options',
                    'label' => 'Copyright text',
                    'description' => 'Text put here will be outputted in the footer',
                )
            );
        }
    }

}