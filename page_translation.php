<?php
// Template Name: Translation Page

    get_header();

?>
<article class="box-widht">

 <?php get_sidebar(); ?>

	<div class="main-content-page">
		<div class="breadcrumb">
			<a href="#" class="new-background">Новини v9ky</a>
			<a href="#">v9ky київ</a>
		</div>
		<p class="head-translation">пряма трансляція</p>
		<p class="live-trans">дата<img src="<?php echo get_template_directory_uri();?>/assets/img/Ellipse-2-copy.png" alt=""></p>
		<div class="video-block-trans">
			<iframe width="850" height="410" src="https://www.youtube.com/embed/X5cksiMb9zs" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</article>

<?php
    get_footer();
?>
