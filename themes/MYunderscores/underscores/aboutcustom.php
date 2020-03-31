<!-- deigan helped me with this, assuming he got the code from somewhere but not sure where  -->


<?php
//  Template Name: About custom template
//  description: >-
//  For the about page
get_header();
?>
  <div id="primary" class="content-area">
    <main id="main" class="aboutCustom">
    <?php
    while ( have_posts() ) :
      the_post();
      get_template_part( 'template-parts/content', 'page' );
      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;
    endwhile; // End of the loop.
    ?>
    </main><!-- #main -->
  </div><!-- #primary -->
<?php
get_sidebar();
get_footer();