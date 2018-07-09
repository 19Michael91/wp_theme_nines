<?php
// Template Name: Goal Turu Page

    get_header();

?>
<article class="box-widht">

 <?php get_sidebar(); ?>

	<div class="main-content-page">
		<div class="breadcrumb">
			<a href="#" class="new-background">Новини v9ky</a>
			<a href="#">v9ky київ</a>
		</div>
		<p class="head-goal">пряма трансляція</p>
		<p class="goal-name">10 тур 3 кращі голи (Черкаси-Зима 2017) футзал</p>
		<div class="video-block-trans">
			<iframe width="850" height="410" src="https://www.youtube.com/embed/X5cksiMb9zs" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="video-thumbnails">
			<div class="slider-thumb owl-carousel">
				<div class="item-thumb">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/thumb.png" alt="">
				</div>
				<div class="item-thumb">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/thumb.png" alt="">
				</div>
				<div class="item-thumb">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/thumb.png" alt="">
				</div>
				<div class="item-thumb">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/thumb.png" alt="">
				</div>
				<div class="item-thumb">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/thumb.png" alt="">
				</div>
				<div class="item-thumb">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/thumb.png" alt="">
				</div>
			</div>
		</div>
	</div>
</article>

<?php
    get_footer();
?>
