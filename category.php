<?php get_header(); ?>
<div class="container">
	<div id="primary-left">     
        <!-- Category block news -->
        <div class="category-block-news-5 clearfix">
			<div class="category-title" style="background:#D46026">
				<h3 class="entry-title"><?php single_cat_title(); // название категории ?></h3>
			</div>
			<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
			<!-- Post -->
				<?php get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php ?>
			<?php endwhile; // конец цикла
			else: echo '<h2>Нет записей.</h2>'; endif; // если записей нет, напишим "простите" ?>	 
			<?php pagination(); // пагинация, функция нах-ся в function.php ?>
        </div>       
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>