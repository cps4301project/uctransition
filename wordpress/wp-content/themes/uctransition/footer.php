	<? if ( is_front_page() ) {} else { ?>
	<footer class="site-footer text-center">
		<p><? bloginfo('name'); ?> - &copy; <? echo date('Y'); ?></p>
	</footer>
	<? } ?>
	<? wp_footer(); ?>
	</div>
</body>
</html>