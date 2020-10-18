<?php get_header(); ?>

<div class="container content">
    
    <div class="main block">
        
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
        
                <article class="page">
                    <h2><?php the_title(); ?></h2>			
                    <div class="well">
                        Company Phone: 555-555-5555
                    </div><!-- .well -->
                    <?php the_content(); ?>
                </article><!-- .page -->
                
            <?php endwhile; ?>
        <?php else : ?>
            <?php wpautop( 'Sorry, there are no posts' ); ?>
        <?php endif; ?>
                
    </div><!-- .main block -->
    
    <div class="side">
        <div class="block">
            <h3>Sidebar Head</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
            <a class="button" href="#">More</a>
        </div><!-- .block -->
    </div><!-- .side -->
    
</div><!-- .container content -->

<?php get_footer(); ?>