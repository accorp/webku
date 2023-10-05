       	<div class="maxxfooter maxx_clear">			
		    <div class="footer">
				<div class="logofooter">
				    <div class="menufooter maxx_clear">
					<?php 
						if (has_nav_menu('footerone')) {
							wp_nav_menu(array(
								'theme_location' => 'footerone', 
								'container' => 'div',
								'container_class' => 'footer_one',
								'menu_class' => 'footer_menu', 
								'menu_id' => 'one',
								'fallback_cb' => false
							));
						} 
					?>
			    	</div>
					<div class="copyright">
				    	<?php maxx_text_footer(); ?>
					</div>
		        </div>
				<script>
			    	function mysearch() {
						document.body.classList.toggle('opensearch');
						document.body.classList.remove('openshare', 'openmenu', 'openside');
					}
					function myshare() {
						document.body.classList.toggle('openshare');
						document.body.classList.remove('opensearch', 'openmenu', 'openside');
					}
					function mymenu() {
						document.body.classList.toggle('openmenu');
						document.body.classList.remove('opensearch', 'openshare', 'openside');
					}
					function myside() {
						document.body.classList.toggle('openside');
						document.body.classList.remove('opensearch', 'openmenu', 'openshare');
					}
					
					var buttons = document.getElementsByClassName("menu-item-has-children");
					
					[].forEach.call(buttons, function(el) {
						el.addEventListener("click", function() {
					    	el.classList.toggle("active");
				    	});
					});

				</script>
		    </div><!-- footer --> 
		</div>
		<?php 
	    	get_template_part('content/share');
			wp_footer(); 
		?>
	</body>
</html>