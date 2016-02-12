                <div id="sidebar1" class="sidebar cf" role="complementary">

                    <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

                        <?php dynamic_sidebar( 'sidebar1' ); ?>

                    <?php else : ?>

                        <!-- There are no widgets defined in the backend. -->

                    <?php endif; ?>

                </div>
