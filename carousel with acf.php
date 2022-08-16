custom carousel oxygen

// THIS IS THE PHP CODE

<?php if( have_rows('logo_partner') ): ?>
<div class="slider">
	<div class="slide-track">
		<?php while ( have_rows('logo_partner') ) : the_row(); ?>
		<div class="slide">
			<img src="<?php the_sub_field('logo_pict'); ?>" height="100" width="100" alt="" />
		</div>
		<?php endwhile; ?>
	</div>
	 <?php endif; ?>  
</div>
 
// THIS IS THE CSS CODE

@keyframes scroll {
	 0% {
		 transform: translateX(0);
	}
	 100% {
		 transform: translateX(calc(-250px * 7));
	}
}
 .slider {
	 height: 100px;
	 margin: auto;
	 overflow: hidden;
	 position: relative;
	 width: auto;
}
 .slider .slide-track {
	 animation: scroll 40s linear infinite;
	 display: flex;
	 width: calc(250px * 14);
}
 .slider .slide {
	 height: 100px;
	 width: 250px;
}
