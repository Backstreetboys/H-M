<?php
/*
 * Template Name: Carousel
 *
 * @package H&M projekt
 * @subpackage H&M projekt
 * @since PACKAGE VERSION 1.0
 */
get_header();

	if( have_posts()) {

        while( have_posts() ) {
        the_post();
        the_content();

        }

}
get_footer(); ?>