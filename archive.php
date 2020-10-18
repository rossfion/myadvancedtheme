<?php get_header(); ?>

<div class="container content">
    <div class="main block">
        
        <?php
            if ( is_category() ) {
                single_cat_title();
            } else if ( is_author( )) {
                the_post();
                echo 'Archives By Author: ' . get_the_author();
                rewind_posts();
            } else if ( is_tag() ) {
                single_tag_title();
            } else if ( is_day() ) {
                echo 'Archives By Day: ' . get_the_date();
            } else if ( is_month() ) {
                echo 'Archives By Month: ' . get_the_date('F Y');
            } else if ( is_year() ) {
                echo 'Archives By Year: ' . get_the_date('Y');
            } else {
                echo 'Archives';
            }
        ?>

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <?php wpautop( 'Sorry, there are no posts' ); ?>
        <?php endif; ?>
        
    </div><!-- .main block -->
    
    <div class="side">
        <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar' ); ?>
        <?php endif; ?>
    </div><!-- .side -->
    
</div><!-- .container content -->

<?php get_footer(); ?>