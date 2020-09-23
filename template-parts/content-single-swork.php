<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Star Star
 */
?>
<div id="app">
	<article id="post-<?php the_ID(); ?>" class="single-article flexed-publication">
		<header>
		<div class="thumb-container"><?php the_post_thumbnail();?></div>
		<?php
		edit_post_link( __( 'Edit', 'textdomain' ), '<p>', '</p>' );
        ?>		
		</header><!-- .entry-header -->
		<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading...<span class="screen-reader-text"> "%s"</span>', 'star' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);
		?>
		<?php 
		star_get_tags(); 
		?>
		</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div> <!-- Container ends -->
