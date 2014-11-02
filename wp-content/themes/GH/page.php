<?php get_header(); ?>

<div class="content-page">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		the_content();?>
		<script type="text/javascript">
		$(document).ready(function(){
    			$("a.<?php the_title();?>").addClass("active");
  		});
		</script>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>