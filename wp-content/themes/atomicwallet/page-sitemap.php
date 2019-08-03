<?php
get_header();
/*
Template Name: Sitemap Page
*/

if(is_page('sitemap')){ get_template_part('partials/sitemap');}

the_content();



get_footer();

?>