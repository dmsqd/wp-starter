<?php get_header(); ?>

            <div id="content" class="content">

                <div id="inner-content" class="inner-content wrap cf">

                    <div class="grid">

                        <div class="grid__item lap--two-thirds desk--three-quarters">

                            <main id="main" class="main cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

                                <?php
                                the_archive_title( '<h1 class="page-title">', '</h1>' );
                                the_archive_description( '<div class="taxonomy-description">', '</div>' );
                                ?>

                                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

                                    <header class="entry-header article-header">

                                        <h3 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                                        <p class="byline entry-meta vcard"><?php
                                            printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
                                             /* the time the post was published */
                                             '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                                                /* the author of the post */
                                                '<span class="by">'.__('by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                                            );
                                        ?></p>

                                    </header>

                                    <section class="entry-content cf">

                                        <?php the_post_thumbnail( 'bones-thumb-300' ); ?>

                                        <?php the_excerpt(); ?>

                                    </section>

                                </article>

                                <?php endwhile; ?>

                                <?php bones_page_navi(); ?>

                                <?php endif; ?>

                            </main>

                        </div><!--

                     --><div class="grid__item lap--one-third desk--one-quarter">

                            <?php get_sidebar(); ?>

                        </div>

                    </div>

                </div>

            </div>

<?php get_footer(); ?>
