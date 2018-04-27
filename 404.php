<?php get_header(); ?>

	<main id="main" class="notfound__main main__container" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

		<article id="post-not-found" class="notfound__article">

			<header class="notfound__article_header">

				<h1><?php _e( 'Epic 404 - Article Not Found', 'bonestheme' ); ?></h1>

			</header>

			<section class="notfound__article_body">

				<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'bonestheme' ); ?></p>

			</section>

			<section class="notfound__article_search">

					<p><?php get_search_form(); ?></p>

			</section>

			<footer class="notfound__article_footer">

					<p><?php _e( 'This is the 404.php template.', 'bonestheme' ); ?></p>

			</footer>

		</article>

	</main>

<?php get_footer(); ?>
