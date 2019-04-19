<?php
/**
 * The template for displaying the footer
 *
 */
 
?>
		</div><!-- #main -->
	</div><!-- #page -->
	
	<footer id="gk-footer" role="contentinfo">
		<?php if (is_active_sidebar('bottom')) : ?>
		<div id="gk-bottom" role="complementary">
			<div class="widget-area">
				<?php dynamic_sidebar('bottom'); ?>
			</div>
		</div>
		<?php endif; ?>
		
		<div id="gk-social">
			<?php wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'social-menu')); ?>
		</div>
		
		<div id="gk-copyrights">
			<?php do_action('portfolio_credits'); ?>
			
			<p class="copyright"><a target = "_blank" href="https://jq.qq.com/?_wv=1027&k=5om9OxK">.dev域名QQ群522392271</a></p>
			<p class="poweredby"><a href="http://zhan.dev/" rel="nofollow">zhan.dev</a>				<script type="text/javascript" src="https://s23.cnzz.com/z_stat.php?id=1276303600&web_id=1276303600"></script>
			</p>
		</div><!-- .site-info -->
	</footer><!-- end of #gk-footer -->
	
	<?php wp_footer(); ?>
</body>
</html>
