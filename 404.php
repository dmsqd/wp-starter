<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="inner-content wrap grid">

					<div class="grid__item lap--two-thirds desk--three-quarters">

						<div id="main" class="clearfix" role="main">

							<article id="post-not-found" class="hentry clearfix">

								<header class="article-header">

									<h1><?php _e("404 - Page Not Found", "dmsqdtheme"); ?></h1>

								</header> <!-- end article header -->

								<section class="entry-content">

									<p><?php _e("The page you were looking for was not found. Please try searching.", "dmsqdtheme"); ?></p>

								</section> <!-- end article section -->

								<section class="search">

								    <p><?php get_search_form(); ?></p>

								</section> <!-- end search section -->

							</article> <!-- end article -->

						</div> <!-- end #main -->
					</div>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
