<?php get_header(); ?>

            <div id="content" class="content">

                <div id="inner-content" class="inner-content wrap cf">

                    <div class="grid">

                        <div class="grid__item one-whole lap--two-thirds desk--three-quarters">

                            <main id="main" class="main cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

                                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                    <?php
                                        /*
                                         * Ah, post formats. Nature's greatest mystery (aside from the sloth).
                                         *
                                         * So this function will bring in the needed template file depending on what the post
                                         * format is. The different post formats are located in the post-formats folder.
                                         *
                                         *
                                         * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
                                         * A SPECIFIC POST FORMAT.
                                         *
                                         * If you want to remove post formats, just delete the post-formats folder and
                                         * replace the function below with the contents of the "format.php" file.
                                        */
                                        get_template_part( 'post-formats/format', get_post_format() );
                                    ?>

                                <?php endwhile; ?>

                                <?php endif; ?>

                            </main>

                        </div><!--

                     --><div class="grid__item one-whole lap--one-third desk--one-quarter">

                            <?php get_sidebar(); ?>

                        </div>

                    </div>

                </div>

            </div>

<?php get_footer(); ?>
