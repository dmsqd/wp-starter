<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="inner-content wrap">

					<div class="grid">

						<div class="grid__item lap--two-thirds desk--three-quarters">

						    <div id="main" class="main clearfix" role="main">

							    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

								    <header class="article-header">

									    <h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

									    <p class="byline vcard"><?php _e('Posted', 'hacksawtheme'); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(get_option('date_format')); ?></time> <span class="amp">&amp;</span> <?php _e('filed under', 'hacksawtheme'); ?> <?php the_category(', '); ?>.</p>

								    </header> <!-- end article header -->

								    <section class="entry-content clearfix">
									    <?php the_content(); ?>
								    </section> <!-- end article section -->

								    <footer class="article-footer">

		    							<p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>

								    </footer> <!-- end article footer -->

								    <?php // comments_template(); // uncomment if you want to use them ?>

							    </article> <!-- end article -->

							    <?php endwhile; ?>

							        <?php if (function_exists('bones_page_navi')) { ?>
							            <?php bones_page_navi(); ?>
							        <?php } else { ?>
							            <nav class="wp-prev-next">
							                <ul class="clearfix">
							        	        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "hacksawtheme")) ?></li>
							        	        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "hacksawtheme")) ?></li>
							                </ul>
							            </nav>
							        <?php } ?>

							    <?php else : ?>

							        <article class="post-not-found hentry clearfix">
							            <header class="article-header">
							        	    <h1><?php _e("Oops, Post Not Found!", "hacksawtheme"); ?></h1>
							        	</header>
							            <section class="entry-content">
							        	    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "hacksawtheme"); ?></p>
							        	</section>
							        	<footer class="article-footer">
							        	    <p><?php _e("This is the error message in the index.php template.", "hacksawtheme"); ?></p>
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
