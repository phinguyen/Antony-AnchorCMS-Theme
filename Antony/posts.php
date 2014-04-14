<?php theme_include('header'); ?>


	<?php if(has_posts()): ?>
	<section id="over" class="content">
		<ul class="items">
			<?php posts(); ?>
			<li>
				<article class="wrap">
					<h1>
						<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
					</h1>

					<div class="content">
						<?php echo article_markdown(); ?>
					</div>

					<footer>
						Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?>.
					</footer>
				</article>
			</li>
		
			<?php $i = 0; while(posts()): ?>
			<li>
				<article class="wrap">
					<h2>
						<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
					</h2>
					<footer>
						Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?>.
					</footer>
				</article>
			</li>
			<?php endwhile; ?>
		</ul>
	</section>
	<?php if(has_pagination()): ?>
		<nav class="pagination">
			<div class="wrap">
				<div class="prev">
					<?php echo posts_prev(); ?>
				</div>
				<div class="next">
				<?php echo posts_next(); ?>
				</div>
			</div>
		</nav>
		<?php endif; ?>
	<?php else: ?>
	<section id="over" class="content">
		<p>Looks like you have some writing to do!</p>
	</section>
	<?php endif; ?>



<?php theme_include('footer'); ?>