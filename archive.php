<!-- Gets special header for blog -->
<?php get_header('primary'); ?>

<!-- Basic page layout for all future created pages -->
<div class="container">
	<div class="row">
		<?php get_template_part('includes/section','archive'); ?>
	</div>

</div>

<?php get_footer('primary'); ?>