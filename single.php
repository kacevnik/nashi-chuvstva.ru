<?php get_header(); ?>
<div class="container">
	<div id="primary-left">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
			<div class="post-title">
				<h1><?php the_title(); // заголовок поста ?></h1>
			</div>
			<div class="post-content">
				<?php the_content(); // контент ?>
			</div>
		</article>
	<?php endwhile; // конец цикла ?>

	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>