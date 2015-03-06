<div class="socialIcons clearfix">
	<!--twitter-->
	<div class="twit">
		<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink();?>" data-text="<?php the_title(); ?>" data-via="gwenzez">Tweet</a>
	</div>
	<!-- facebook -->
	<div class="face">
		<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo
		urlencode(get_permalink($post->id)); ?>&amp;layout=standard&
		amp;show_faces=false&amp;width=350&amp;action=like&amp;colorscheme=light"
		scrolling="no" frameborder="0" allowTransparency="true" ></iframe>
	</div>
	<!-- google+ -->
	<div class="googling">
		<div class="g-follow" data-annotation="bubble" data-height="20" data-href="//plus.google.com/u/0/105269656081536631998" data-rel="author"></div>
	</div>
</div>