		<div id="container-foot">
			
			<div id="footer">
				
				<div id="footer-left">
					<ul id="social-media">
						<li class="facebook"><a href="http://www.facebook.com"><span>Facebook</span></a></li>
					    <li class="youtube"><span>YouTube</span</li>
					    <li class="rss"><span>RSS</span></li>
					</ul>
					<p><a><strong>Quick Links:</strong></a> <a href="http://my.johnshopkins.edu" target="_blank">My Johns Hopkins</a> | <a href="http://jhem.johnshopkins.edu" target="_blank">JHEM</a></p>
					<p><a href="http://www.jhu.edu">Johns Hopkins University</a> | <a href="http://krieger.jhu.edu">Zanvyl Krieger School of Arts and Sciences</a></p>
					<small>&copy; Johns Hopkins University. All rights reserved.</small>
				</div><!--End footer-left -->
				
				<div id="footer-right">
					<?php get_sidebar('address-sb'); ?>
				</div><!--End footer-right -->
				
			</div> <!--End footer -->
			
			<div class="clearboth"></div> <!--to have background work properly -->
		
		</div> <!--End container-foot -->
		<?php wp_footer(); ?>
	</body>
		<script src="<?php network_home_url(); ?>/min/?f=wp-content/themes/centers/assets/js/respond.min.js,wp-content/themes/centers/assets/js/ksas_custom.js<?php if (is_front_page()) { ?>,wp-content/themes/centers/assets/js/ksas_frontpage.js<?php } ?>&1"></script>
</html>

