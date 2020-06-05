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
                <article class="page">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
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