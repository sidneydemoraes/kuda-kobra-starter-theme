<?php get_header(); ?>

<main id="main" class="" role="main">
	<h1 class=""><span><?php _e( 'Search Results for:', 'bonestheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">

			<header class="">

				<h3 class=""><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

										<p class="">
												<?php printf( __( 'Posted %1$s by %2$s', 'bonestheme' ),
													/* the time the post was published */
													'<time class="" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
															/* the author of the post */
															'<span class="">by</span> <span class="" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
												); ?>
										</p>

			</header>

			<section class="">
					<?php the_excerpt( '<span class="">' . __( 'Read more &raquo;', 'bonestheme' ) . '</span>' ); ?>

			</section>

			<footer class="">

				<?php if(get_the_category_list(', ') != ''): ?>
									<?php printf( __( 'Filed under: %1$s', 'bonestheme' ), get_the_category_list(', ') ); ?>
									<?php endif; ?>

								<?php the_tags( '<p class=""><span class="">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

			</footer> <!-- end article footer -->

		</article>

	<?php endwhile; ?>

			<?php bones_page_navi(); ?>

		<?php else : ?>

				<article id="post-not-found" class="">
					<header class="">
						<h1><?php _e( 'Sorry, No Results.', 'bonestheme' ); ?></h1>
					</header>
					<section class="">
						<p><?php _e( 'Try your search again.', 'bonestheme' ); ?></p>
					</section>
					<footer class="">
							<p><?php _e( 'This is the error message in the search.php template.', 'bonestheme' ); ?></p>
					</footer>
				</article>

		<?php endif; ?>

	</main>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>