<?php get_header(); ?>

	<main id="main" class="page__main main__container" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('page__container'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

			<header class="page__header">

				<h1 class="page__title" itemprop="headline"><?php the_title(); ?></h1>

				<p class="page__metadata">
					<?php printf( __( 'Posted', 'bonestheme').
														' <time class="page__time" datetime="%1$s" itemprop="datePublished">%2$s</time> '.
														__( 'by',  'bonestheme').
														' <span class="page__author">%3$s</span>', 
														get_the_time('Y-m-j'), 
														get_the_time(get_option('date_format')), 
														get_the_author_link( get_the_author_meta( 'ID' ) )); 
					?>
				</p>

			</header>

			<section class="page__body" itemprop="articleBody">

				<?php
				
					the_content();

				?>

			</section>

			<?php comments_template(); ?>

		</article>

		<?php endwhile; endif; ?>

	</main>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
