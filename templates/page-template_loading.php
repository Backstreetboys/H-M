<?php
/*
 * Template Name: loading
 *
 * @package H&M projekt
 * @subpackage H&M projekt
 * @since PACKAGE VERSION 1.0
 */
get_header(); 
?>
<div class="loading">
</div>
<p class="loading_text">Din betalning behandlas.</p>
<script type="text/javascript">
var $ = jQuery;
$(window).load(function() {

    // Your application has indicated there's an error
    window.setTimeout(function(){

        // Move to a new location or you can do something else
     	/*För Martin*/window.location.href = "<?= get_template_directory_uri(); ?>/receipt";
       /*För Erik*/ //window.location.href = "http://localhost/terminsprojekt/receipt/";

    }, 5000);

});

</script>
<?php get_footer(); ?>