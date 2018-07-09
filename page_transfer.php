<?php
// Template Name: Transfer Page

    get_header();

?>

<article class="box-widht">

 <?php get_sidebar(); ?>

	<div class="main-content-page">
		<div class="breadcrumb">
			<a href="#" class="new-background">Новини v9ky</a>
			<a href="#">v9ky київ</a>
		</div>
		<div class="content">
			<div class="content-page-transfer">
				<div class="item-transfer">
					<p class="date-transfer">23.03.2017</p>
					<div class="transfer-tabl">
						<div class="transf-comand-1">
							<img src="" alt="">
							<p class="name-club-transfer">ВІЛЬНИЙ АГЕНТ</p>
							<p class="name-pers-transfer">Ім'я Призвіще</p>
						</div>
						<img src="<?php echo get_template_directory_uri();?>/assets/img/right.png" alt="">
						<div class="transf-comand-2">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/fcb.png" alt="">
							<p class="name-club-transfer">Длинное название</p>
						</div>
					</div>
				</div>
				<div class="item-transfer">
					<p class="date-transfer">23.03.2017</p>
					<div class="transfer-tabl">
						<div class="transf-comand-1">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/fcb.png" alt="">
							<p class="name-club-transfer">Длинное название</p>
							<p class="name-pers-transfer">Ім'я Призвіще</p>
						</div>
						<img src="<?php echo get_template_directory_uri();?>/assets/img/right.png" alt="">
						<div class="transf-comand-2">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/fcb.png" alt="">
							<p class="name-club-transfer">Длинное название</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</article>

<?php
    get_footer();
?>
