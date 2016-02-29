<?php
/*
 * CUSTOM POST TYPE TAXONOMY TEMPLATE
 *
 * This is the custom post type taxonomy template. If you edit the custom taxonomy name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom taxonomy is called "register_taxonomy('shoes')",
 * then your template name should be taxonomy-shoes.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates#Displaying_Custom_Taxonomies
*/
?>

<?php get_header(); ?>

            <div id="content" class="content">

                <div id="inner-content" class="inner-content wrap cf">

                    <div class="grid">

                        <div class="grid__item one-whole lap--two-thirds desk--three-quarters">

                            <main id="main" class="main cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

                                <h1 class="archive-title h2"><span><?php _e( 'Posts Categorized:', 'bonestheme' ); ?></span> <?php single_cat_title(); ?></h1>

                                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

                                    <header class="article-header">

                                        <h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                                        <p class="byline vcard"><?php
                                            printf(__('Posted <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(__('F jS, Y', 'bonestheme')), bones_get_the_author_posts_link(), get_the_term_list( get_the_ID(), 'custom_cat', "", ", ", "" ));
                                        ?></p>

                                    </header>

                                    <section class="entry-content">
                                        <?php the_excerpt( '<span class="read-more">' . __( 'Read More &raquo;', 'bonestheme' ) . '</span>' ); ?>

                                    </section>

                                </article>

                                <?php endwhile; ?>

                                <?php bones_page_navi(); ?>

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
