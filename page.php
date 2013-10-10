<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package USA Rugby College Sevens
 */

get_header(); ?>

<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('top-feature')) : else : ?>
<?php endif; ?>

	<div id="posts">
		<?php the_post(); ?>
		<article>
			<div class="article-wrapper">
				<?php the_content();?>
			</div>
		</article>
		
	</div>

<?php get_footer(); ?>
