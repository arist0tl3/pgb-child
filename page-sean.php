<?php

/* Template Name: Sean's Template */

get_header(); ?>

<div class="sidebar col-sm-12 col-md-4 col-lg-4">
  
  <?php tha_sidebars_before(); ?>
    <div class="row">
      <?php tha_sidebar_top(); ?>
      <?php do_action( 'before_sidebar' ); ?>
      <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

        <aside id="search" class="widget widget_search col-xs-12 col-sm-6 col-md-12">
          <div class="">
            <?php get_search_form(); ?>
          </div>
        </aside>

        <aside id="archives" class="widget widget_archive col-xs-12 col-sm-6 col-md-12">
          <div class="col-lg-12">
            <h3 class="widget-title"><?php _e( 'Archives', 'pgb' ); ?></h3>
            <ul>
              <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
          </div>
        </aside>

        <aside id="meta" class="widget widget_meta col-xs-12 col-sm-6 col-md-12">
          <div class="col-lg-12">
            <h3 class="widget-title"><?php _e( 'Meta', 'pgb' ); ?></h3>
            <ul>
              <?php wp_register(); ?>
              <li><?php wp_loginout(); ?></li>
              <?php wp_meta(); ?>
            </ul>
          </div>
        </aside>

      <?php endif; ?>
      <?php tha_sidebar_bottom(); ?>
    </div><!-- close .sidebar-padder -->
  <?php tha_sidebars_after(); ?>

</div>

	<div id="content" class="main-content-inner col-sm-12 col-md-8 col-lg-8">

		<?php tha_content_top(); ?>

		<?php // <!--The Loop ?>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php tha_entry_before(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?>>

					<?php tha_entry_top(); ?>

					<?php get_template_part( 'posts', 'header' ); ?>

					<div class="col-md-12">

						<div class="row">

							<?php get_template_part( 'content', get_post_format() ); ?>

						</div>

					</div>

					<?php get_template_part( 'posts', 'footer' ); ?>

					<?php tha_entry_bottom(); ?>

				</article><!-- #post-## -->

				<?php tha_entry_after(); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>

			<?php endwhile; // end of the loop. ?>

		<?php endif; ?>

		<?php // The Loop--> ?>

		<?php tha_content_bottom(); ?>

	</div>



<?php get_footer(); ?>

