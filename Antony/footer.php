				<footer id="you">
					<div class="ft-ul">
						<ul>
							<li><a href="<?php echo rss_url(); ?>">RSS</a></li>
							<?php if(twitter_account()): ?>
							<li><a href="<?php echo twitter_url(); ?>" target="_blank">@<?php echo twitter_account(); ?></a></li>
							<?php endif; ?>
							<li><a href="https://facebook.com/<?php echo site_meta('facebook'); ?>" target="_blank">f/<?php echo site_meta('facebook'); ?></a></li>
							<li><a href="/" title="Return to my website.">Home</a></li>
						</ul>
					</div>
					<p>Copyright &copy; <?php echo date('Y'); ?> <?php echo site_name(); ?> .All rights reserved.
						<br/>
						<a href="http://anchorcms.com" target="_blank"><img src="<?php echo theme_url('img/favicon.png'); ?>" alt="AnchorCMS"/></a>
					</p>
				</footer>
			</section>	
		</div>	
	</body>
</html>