<?php
/**
 * @package USA Rugby College Sevens
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="article-img">
<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail('news');
} 
?>
</div>

<div class="article-wrapper">
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'usa-rugby-college-sevens' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'usa-rugby-college-sevens' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'usa-rugby-college-sevens' ) );

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>

		<?php edit_post_link( __( 'Edit', 'usa-rugby-college-sevens' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
	</div>
</article><!-- #post-## -->
