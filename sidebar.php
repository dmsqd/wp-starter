				<div id="page-sidebar" class="sidebar fourcol last clearfix" role="complementary">

					<?php if ( is_active_sidebar( 'page-sidebar' ) ) : ?>

						<?php dynamic_sidebar( 'page-sidebar' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->

						<div class="alert help">
							<p><?php _e("Please activate some Widgets in the default sidebar.", "dmsqdtheme");  ?></p>
						</div>

					<?php endif; ?>

				</div>