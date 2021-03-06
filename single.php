<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="inner-content wrap">

					<div class="grid">

						<div class="grid__item lap--two-thirds desk--three-quarters">

							<div id="main" class="main clearfix" role="main">

								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

									<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

										<header class="article-header">

											<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>

											<p class="byline vcard"><?php _e("Posted", "hacksawtheme"); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "hacksawtheme"); ?> <span class="author"><?php the_author_posts_link(); ?></span> <span class="amp">&amp;</span> <?php _e("filed under", "hacksawtheme"); ?> <?php the_category(', '); ?>.</p>

										</header> <!-- end article header -->

										<section class="entry-content clearfix" itemprop="articleBody">
											<?php the_content(); ?>
										</section> <!-- end article section -->

										<footer class="article-footer">

											<?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>

										</footer> <!-- end article footer -->

										<?php comments_template(); ?>

									</article> <!-- end article -->

								<?php endwhile; ?>

								<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
							    		<header class="article-header">
							    			<h1><?php _e("Oops, Post Not Found!", "hacksawtheme"); ?></h1>
							    		</header>
							    		<section class="entry-content">
							    			<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "hacksawtheme"); ?></p>
							    		</section>
							    		<footer class="article-footer">
							    		    <p><?php _e("This is the error message in the single.php template.", "hacksawtheme"); ?></p>
							    		</footer>
									</article>

								<?php endif; ?>

							</div> <!-- end #main -->

						</div><!--

	    			 --><div class="grid__item lap--one-third desk--one-quarter">

			    			<?php get_sidebar('blog-sidebar'); ?>

	    				</div>

					</div><!-- end .grid -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
