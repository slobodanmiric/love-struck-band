<?php get_header(); ?>
    
    <!-- header -->
    <header class="page-headers">
        <h1><span><?php bloginfo('name'); ?></span> <br> <?php bloginfo('description'); ?> </h1>
    </header>
    
    
    <!-- main content -->
    <section class="container main-content">
       
        <div class="main box">
           
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                <article class="blog-post">
                    <?php if(has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                    <h2><?php the_title(); ?></h2>
                    <p class="meta">
                    Posted at 
                    <?php the_time('F j, Y g:i a'); ?>
                    by 
                    <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>">
                        <?php the_author(); ?>
                    </a>
                    </p>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="btn">Read more</a>
                </article>
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo wp_apautop('Sorry, no posts were found'); ?>
            <?php endif; ?>
        
        </div>
        
        <aside>
            <?php if(is_active_sidebar('sidebar')) : ?>
                <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
        </aside>
    </section>

    
<?php get_footer(); ?>