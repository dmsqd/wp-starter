<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="inner-content wrap">

					<div class="grid">

						<div class="grid__item lap--two-thirds desk--three-quarters">
						    <div id="main" class="main" role="main">

							    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								    <header class="article-header">

									    <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

								    </header> <!-- end article header -->

								    <section class="entry-content clearfix" itemprop="articleBody">
									    <?php the_content(); ?>
									</section> <!-- end article section -->

								    <?php //comments_template(); ?>

							    </article> <!-- end article -->

							    <?php endwhile; ?>

							    <?php endif; ?>

		    				</div><!-- end #main -->

						</div>

					</div><!-- end .grid -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
