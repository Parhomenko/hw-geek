<div class="sidebar">

	<ul class="widgets">
		
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')) : ?>
			<p>sdfsdfsdfsd</p>
		<?php endif?>
		
		<li class="certificates_box"><a href="#">
			<img class="certificates" src="<?php bloginfo('template_url'); ?>/images/certificates.png" alt="certificates" />
		</a></li>
		<li class="sponsors">
			<h4>Наши спонсоры</h4>
			<ul class="partners">
				<li class="de"><a href="#"></a></li>
				<li class="moc"><a href="#"></a></li>
				<li class="ser"><a href="#"></a></li>
				<li class="yt"><a href="#"></a></li>
				<li class="clf"><a href="#"></a></li>
			</ul>
		</li>
	</ul> 
</div>