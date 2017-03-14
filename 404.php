<?php get_header(); ?>

            <div id="content" class="content">

                <div id="inner-content" class="inner-content wrap cf">

                    <div class="grid">

                        <div class="grid__item one-whole desk--one-whole">

                            <main id="main" class="main cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

                                <article id="post-not-found" class="hentry cf">

                                    <header class="article-header">

                                        <h1><?php _e( 'Page Not Found', 'wp-starter' ); ?></h1>

                                    </header>

                                    <section class="entry-content">

                                        <p><?php _e( 'Sorry, the page you were looking for does not exist.', 'wp-starter' ); ?></p>

                                    </section>

                                    <section class="search">

                                        <p><?php get_search_form(); ?></p>

                                    </section>

                                </article>

                            </main>

                        </div>

                    </div>

                </div>

            </div>

<?php get_footer(); ?>
