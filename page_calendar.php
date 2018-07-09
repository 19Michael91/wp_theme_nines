<?php
// Template Name: Calendar Page

    get_header();

?>
<article class="box-widht">

	<?php get_sidebar(); ?>

	<div class="main-content-page">
		<div class="breadcrumb">
			<a href="#" class="new-background">Новини v9ky</a>
			<a href="#">v9ky київ</a>
		</div>
		<p class="gallery-title">ФОТОГАЛЛЕРЕЯ</p>
		<div class="photo-page">
			<div class="photo-slider-main-page">
				<div class="photo-big gallery-big">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/photo-slider-item.png" alt="">
				</div>
				<div class="gallery-thumb-photo owl-carousel">
					<div class="gallery-thumb">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/photo-slider-item.png" alt="">
					</div>
					<div class="gallery-thumb">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/photo-slider-item.png" alt="">
					</div>
					<div class="gallery-thumb">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/photo-slider-item.png" alt="">
					</div>
					<div class="gallery-thumb">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/photo-slider-item.png" alt="">
					</div>
					<div class="gallery-thumb">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/photo-slider-item.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</article>

<?php
    get_footer();
?>
