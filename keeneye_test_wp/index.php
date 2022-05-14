<?php
get_header();
if ( is_front_page() || is_home() ) {
    get_template_part( 'homef' );
}else if ( have_posts() ) : while ( have_posts() ) : the_post();
get_template_part( 'entry' );
endwhile; endif;
get_footer();