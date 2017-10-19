	<article id="post-<?php the_ID(); ?>" <?php post_class('main-post custom_main_post'); ?>> <?php // контэйнер с классами и id ?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> <?php // заголовок поста и ссылка на его полное отображение (single.php) ?>

		<?php $size_t = array('210', '120');if ( has_post_thumbnail() ) the_post_thumbnail($size_t); // выводим миниатюру поста, если есть ?>
		<?php the_excerpt(); ?>
	</article>