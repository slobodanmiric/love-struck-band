<?php get_header(); ?>
    
    <!-- header -->
    <header class="main-header">
        <h1><span><?php bloginfo('name'); ?></span> <br> <?php bloginfo('description'); ?> </h1>
    </header>
    
    <!-- about -->
    <section class="about container">
        <article>
            <h2 class="headings">About</h2>
            <p>It is impossible to think of the blues guitar without thinking of Stevie Ray Vaughan. It is his legacy that inspired many musicians. Among them are Love Struck, a tribute band from Novi Sad dedicated to the preservation of the true Texan blues form that will forever be the epitome of lightning blues. This is what happens when three seasoned musicians decide to pay tribute to one of the greatest blues artists of all time.</p>
        </article>
        <hr>
    </section>
    
    <!-- band -->
    <section class="band">
        <h2 class="headings">Band members</h2>
        <div class="container">
            <article>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/band1.jpg" alt="">
                <h4>Vlada Jankovic</h4>
                <p>guitar and vocals</p>
            </article>
            <article>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/band2.jpg" alt="">
                <h4>Predrag Dmirrović</h4>
                <p>bass</p>
            </article>
            <article>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/band3.jpg" alt="">
                <h4>Milan Maksimović</h4>
                <p>drums</p>
            </article>
            <hr>
        </div>
    </section>
    
    
    <!-- video -->
    <section class="container video">
        <h2 class="headings">Video</h2>
        <iframe width="100%" height="700" src="https://www.youtube.com/embed/TP7D0DH5Y6k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>

    
<?php get_footer(); ?>