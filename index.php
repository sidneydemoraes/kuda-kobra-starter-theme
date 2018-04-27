<?php get_header(); ?>

	<main id="main" class="blog__main main__container" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

		<?php if (have_posts()) : ?>
		
		<h1 class="blog__title"><?php __( 'Blog', 'bonestheme' ) ?></h1>

		<?php while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('blog__excerpt'); ?> role="article">

			<header class="blog__excerpt_header">

				<h2 class="blog__excerpt_title">
					<a class="blog__excerpt_link" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>
				<p class="blog__exceprt_metadata">
					<?php 
						printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
												/* the time the post was published */
												'<time class="blog__excerpt_time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
												/* the author of the post */
												'<span class="blog__excerpt_by">'.__( 'by', 'bonestheme').'</span> <span class="blog__excerpt_author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
						); ?>
				</p>

			</header>

			<section class="blog__excerpt_body">
				<?php the_content(); ?>
			</section>

			<footer class="blog__excerpt_footer">
				<p class="blog__excerpt_comment-count">
					<?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
				</p>


				<?php printf( '<p class="blog__excerpt_categories">' . __('filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

				<?php the_tags( '<p class="blog__excerpt_tags">' . __( 'Tags:', 'bonestheme' ), ', ', '</p>' ); ?>

			</footer>

		</article>

		<?php endwhile; ?>

				<?php bones_page_navi(); ?>

		<?php else : ?>

				<article id="post-not-found" class="blog__notfound_container">
						<header class="blog__notfound_header">
							<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
					</header>
						<section class="blog__notfound_body">
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
					</section>
					<footer class="blog__notfound_footer">
							<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
					</footer>
				</article>

		<?php endif; ?>

	</main>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>