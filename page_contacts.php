<?php
// Template Name: Contakts Page

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
			<div class="content-contakts">
				<div class="num-phone-tur">
					<p>контактний номер турніру : 097-010-09-22</p>
				</div>
				<div class="foto_of_boss">
					<div class="block_vith_foto">
						<p><img src="<?php echo get_template_directory_uri();?>/assets/img/first_boss.png"></p>
						<p>мамедов максим</p>
						<p>головний організатор</p>
						<p>v9ky@ukr.net</p>
					</div>
					<div class="block_vith_foto">
						<p><img src="<?php echo get_template_directory_uri();?>/assets/img/sekond_boss.png"></p>
						<p>поливяний євген</p>
						<p>організатор</p>
						<p>v9kyinfo@gmail.com</p>
					</div>
					<div class="block_vith_foto">
						<p><img src="<?php echo get_template_directory_uri();?>/assets/img/shord_boss.png"></p>
						<p>коробенко вадим</p>
						<p>шеф-редактор</p>
						<p>v9kyinfo@gmail.com</p>
					</div>
				</div>
				<div class="form">
					<p>зворотній зв’язок</p>
					<input type="text" name="your_name" placeholder="ІМ'Я">
					<input type="text" name="mail" placeholder="*E-MAIL">
					<textarea>повідомлення</textarea>
					<a href="#">НАДІСЛАТИ</a>
				</div>
				<!--<div class="button_mor">
					<a href="#">більше</a>
				</div>-->
			</div>
		</div>
	</div>
</article>

<?php
    get_footer();
?>
