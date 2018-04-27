<?php get_header(); ?>

	<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

		<?php
		the_archive_title( '<h1 class="">', '</h1>' );
		the_archive_description( '<div class="">', '</div>' );
		?>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">

			<header class="">

				<h3 class=""><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<p class="">
					<?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
														/* the time the post was published */
														'<time class="" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
														/* the author of the post */
														'<span class="">'.__('by', 'bonestheme').'</span> <span class="" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
												); ?>
				</p>

			</header>

			<section class="">

				<?php the_post_thumbnail( 'bones-thumb-300' ); ?>

				<?php the_excerpt(); ?>

			</section>

			<footer class="">

			</footer>

		</article>

		<?php endwhile; ?>

				<?php bones_page_navi(); ?>

		<?php else : ?>

				<article id="post-not-found" class="">
					<header class="">
						<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
					</header>
					<section class="">
						<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
					</section>
					<footer class="">
							<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
					</footer>
				</article>

		<?php endif; ?>

	</main>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
