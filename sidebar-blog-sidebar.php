				<div id="blog-sidebar" class="blog-sidebar sidebar clearfix" role="complementary">

					<?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>

						<?php dynamic_sidebar( 'blog-sidebar' ); ?>

					<?php else : ?>

						<!-- There are no widgets defined in the backend. -->

					<?php endif; ?>

				</div>
