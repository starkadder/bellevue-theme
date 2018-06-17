<?php get_header(); ?>

      <div class="row">
        <div class="col-sm-8 band-main">

<?php 
    // retrieve and render posts:
    if ( have_posts() ) : while ( have_posts() ) : the_post();
       get_template_part( 'post', get_post_format() );
    endwhile; endif; 
?>

        </div><!-- /.band-main -->

        <?php get_sidebar(); ?>

      </div><!-- /.row -->

<?php get_footer(); ?>

