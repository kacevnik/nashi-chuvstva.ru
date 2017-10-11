	
	        <!-- END Sidebar -->
		</aside>	 
</div> 
            <!-- Footer -->
            <footer id="footer">
				
                <!-- Footer widgets -->
                <div class="container">
                    <div class="row">  
											                </div>                        
	            </div>  
                <!-- Copyright -->
                <div id="copyright">
                    <p>&copy; 2017 Журнал для девушек "Он Мой" onmoy.com Парням вход воспрещен :) Автор идеи: Юля Серова</p><span style="font-weight: bold;"><a href="">О ПРОЕКТЕ</a> | <a href="">КОНТАКТЫ</a></span>
                    <p><a href="#" id="back-to-top"><i class="fa fa-arrow-circle-up"></i></a></p>
                </div>   
            </footer>
		</div>
<script type='text/javascript' src='http://onmoy.com/wp-content/themes/yaaburnee-themes/lib/js/jquery.easing.js?ver=3.9.20'></script>
<script type='text/javascript' src='http://onmoy.com/wp-content/themes/yaaburnee-themes/lib/js/jquery.menu.js?ver=3.9.20'></script>
<script type='text/javascript' src='http://onmoy.com/wp-content/themes/yaaburnee-themes/lib/js/jquery.bxslider.js?ver=3.9.20'></script>
<script type='text/javascript' src='http://onmoy.com/wp-content/themes/yaaburnee-themes/lib/js/jquery.lightbox.js?ver=3.9.20'></script>
<script type='text/javascript' src='http://onmoy.com/wp-content/themes/yaaburnee-themes/lib/js/yaaburnee.js?ver=3.9.20'></script>
<script type='text/javascript' src='http://onmoy.com/wp-content/themes/yaaburnee-themes/lib/js/scripts.php?ver=3.9.20'></script>
<script type='text/javascript' src='http://onmoy.com/wp-includes/js/comment-reply.min.js?ver=3.9.20'></script>
	</body>
</html><footer>
		<?php $args = array( // опции для вывода нижнего меню, чтобы они работали, меню должно быть создано в админке
			'theme_location' => 'bottom', // идентификатор меню, определен в register_nav_menus() в function.php
			'container'=> false, // обертка списка, false - это ничего
			'menu_class' => 'bottom-menu', // класс для ul
	  		'menu_id' => 'bottom-nav', // id для ul
	  	);
		wp_nav_menu($args); // выводим нижние меню
		?>
	</footer>
<?php wp_footer(); ?>
</body>
</html>