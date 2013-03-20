<?php get_header(); ?>

	<div id="pagebody">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="post">
		<div class="PostHead"><span class="PostTitle"><a href="<?php the_permalink() ?>" title="<?php printf(__('Permalink to %s', 'sandbox'), wp_specialchars(get_the_title(), 1)) ?>" rel="bookmark"><?php the_title() ?></a></span>     <span class="PostDate"><?php the_time('jS F, Y'); ?></span></div>
		<?php the_content(); ?>
		<div class="PostFoot"></div>
	</div>
<?php endwhile;?>
	<div id="nav-below" class="navigation">
		<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts', 'sandbox')) ?></div>
		<div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox')) ?></div>
		<div class="clearboth"></div>
	</div>
 <?php else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
	</div>

<?php get_footer(); ?>