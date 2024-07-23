<?php

get_header(); ?>

<div class="max-w-4xl mx-auto px-4">

  <div class="prose max-w-full">
    <?php if (have_posts()) {
      while(have_posts()) {
        the_post(); ?>
        <div>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php echo wp_trim_words(get_the_content(), 40, '...') ?>
        </div>
          /*
          * Include the Post-Type-specific template for the content.
          * If you want to override this in a child theme, then include a file
          * called content-___.php (where ___ is the Post Type name) and that will be used instead.
          */
          get_template_part( 'template-parts/content', get_post_type() );
      <?php
      }
    } ?>
  </div>
</div>

<?php get_footer();