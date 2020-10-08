<?php get_header();?>
<main id="main-content">
	<div id="test-script"></div>
	<?php if (is_home()): ?>
		<?php if (have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
				<div class="postPreview">
				<?php the_post_thumbnail(); ?>
				<div class="previewText">
					<div class="postMeta">
						<p><?php echo get_the_date(); ?></p>
					</div>
				<a href="<?php echo get_post_permalink();?>"><h2 class="postTitle"><?php the_title(); ?></h2></a>
				<p><?php the_excerpt(); ?></p>
				<a href="<?php echo get_post_permalink();?>">Read More </a><span class="icon-cheveron-right"></span>
			</div>
		</div>
			<?php endwhile; ?>
		<?php endif; ?>
	<?php endif; ?>
</main>
<?php get_footer(); ?>