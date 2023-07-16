<footer id="footer" class="footer"> 
	<div class="footer_content">
		<div class="footer-widgets">
			<?php
			$sidebar = apply_filters('filter_all_sidebar', 'footer-v2') ;
			if (is_active_sidebar($sidebar)) {
				dynamic_sidebar($sidebar);
			}
			?>
		</div>
	</div>
</footer>

<?php
wp_footer();
?>

</body>

</html>