<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">

	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header><!-- .page-header -->
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			

		<?php
				if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				echo "<div class=template-preview>";
				$categories = get_the_category();
				$category_id = $categories[0]->cat_ID;
				//echo "category_id: ".$category_id."<br />";
				$tagz = get_the_title();
				
				
				if (get_post_meta( get_the_ID(), 'wpcf-desktop-image-preview' ))
				{
						$key_1_values = get_post_meta( get_the_ID(), 'wpcf-desktop-image-preview' ); 
						$key_2_values = get_post_meta( get_the_ID(), 'wpcf-code-html' );
						$key_3_values = get_post_meta( get_the_ID(), 'wpcf-columns-number' );

						echo '<div class="img-template">';
						echo '<a href="'.$key_2_values[0].'" target="_blank">';
						echo '<img src="'.$key_1_values[0].'" /></a>';
						echo '</div>';
				}
				echo '<div class="info-template"';
				echo "<strong>".$tagz."</strong><br />"; 
				if ($key_3_values[0] == 1){
					echo $key_3_values[0]." Column";
				}
				else{
					echo $key_3_values[0]." Columns";
				}
				
				echo '</div>';
				echo "</div>";
				//the_title_attribute();
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				//get_template_part( 'template-parts/post/content', get_post_format() );

			endwhile;

			the_posts_pagination( array(
				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			) );

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php //get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
