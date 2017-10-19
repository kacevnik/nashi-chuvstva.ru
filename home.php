
<?php get_header(); ?>

<?php
    $args_category_list = array(
        'type'         => 'post',
        'child_of'     => '',
        'parent'       => '',
        'orderby'      => 'count',
        'order'        => 'DESC',
        'hide_empty'   => 1,
        'hierarchical' => 1,
        'exclude'      => '',
        'include'      => '',
        'number'       => 0,
        'taxonomy'     => 'category',
        'pad_counts'   => false,
    );

    $res_category_list =  array();

    $category_list = get_categories( $args_category_list );

?>
<!-- Container -->
<div class="container">
	<!-- Primary left -->
	<div id="primary-left">
        <div class="clear"></div>
        <!-- Category block news -->
            <?php
                foreach ($category_list as $cat) {
                if($cat->parent == 0){
            ?>
            <div class="category-block-news-1 clearfix">
                <!-- Category title -->
                <div class="category-title" style="background-color: #D46026">
                    <h3><?php echo $cat->name; ?></h3>
                    <a href="<?php echo get_category_link($cat->cat_ID); ?>" class="category-link"></a>
                </div>
                <?php
                    $my_query = new WP_Query('cat='.$cat->cat_ID.'&posts_per_page=1');
                    if($my_query->have_posts()){
                        while ( $my_query->have_posts() ) : $my_query->the_post();
                ?>
                <!-- Main post -->
                <div class="main-post link-more_none">
                    <div class="cont-img">
                        <a href="<?php echo get_permalink(); ?>">
                            <?php the_post_thumbnail('full'); ?>
                        </a>
                    </div>
                    <h2>
                        <a href="<?php echo get_permalink(); ?>"><?php the_title(); // заголовок?></a>
                    </h2>
                    <?php the_excerpt(); ?>                         
                </div>
                <?php
                        endwhile;
                    }
                ?>
     
    <!-- Block list news -->
    <ul class="block-news">
        <?php
            $my_query_2 = new WP_Query('cat='.$cat->cat_ID.'&posts_per_page=5&offset=1');
            if($my_query_2->have_posts()){
                while ( $my_query_2->have_posts() ) : $my_query_2->the_post();
        ?>
        <!-- Post -->
        <li class="small-thumb-post">
            <div class="cont-img">
                <a href="<?php echo get_permalink(); ?>">
                    <?php $size = array('80', '80'); ?>
                    <?php the_post_thumbnail($size); ?>                    
                </a>
            </div>
            <div class="description">
                <div class="entry-meta">
                    <span class="post-date"><?php echo get_the_date('F d, Y'); ?></span>
                </div>
                <h2>
                    <a href="<?php echo get_permalink(); ?>"><?php the_title(); // заголовок?></a>
                </h2>
            </div>
        </li>
        <?php
                endwhile;
            }
        ?>         
    </ul>                         
</div>
<?php
    }
}
?>
<div class="clear"></div>      
</div>
	   <!-- Sidebar -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>