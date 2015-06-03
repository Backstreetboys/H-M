<?php
/*
 * Template Name: Carousel
 *
 * @package H&M projekt
 * @subpackage H&M projekt
 * @since PACKAGE VERSION 1.0
 */
get_header();

        query_posts('post_type=post&post_status=publish&posts_per_page=100&paged='. get_query_var('paged'));

	if( have_posts()) {

        while( have_posts() ) {
        the_post();

	    the_post_thumbnail();

        }

}
get_footer(); ?>