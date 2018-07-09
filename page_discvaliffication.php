<?php
// Template Name: Discvaliffication Page

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
			<div class="content-asistent">
				<div class="tabl_disq">
				<table class="tabl_disq">
				  <tr class="tabl_head">
				    <td>ДИСКВАЛІФІКАЦІЯ</td>
					<td></td>
					<td></td>
				  </tr>
				  <tr>
					<td><img src="<?php echo get_template_directory_uri();?>/assets/img/avatar.png"><p>Ім'я Фамілія</p></td>
					<td><img src="<?php echo get_template_directory_uri();?>/assets/img/komand_logo.png"><p>Назва Команди</p></td>
					<td><img src="<?php echo get_template_directory_uri();?>/assets/img/red-card.png"><p>5 Тур</p></td>
				  </tr>
				  <tr>
					<td><img src="<?php echo get_template_directory_uri();?>/assets/img/avatar.png"><p>Ім'я Фамілія</p></td>
					<td><img src="<?php echo get_template_directory_uri();?>/assets/img/komand_logo.png"><p>Назва Команди</p></td>
					<td><img src="<?php echo get_template_directory_uri();?>/assets/img/yellow-card.png"><p>5 Тур</p><img src="<?php echo get_template_directory_uri();?>/assets/img/yellow-card.png"><p>4 Тур</p><img src="<?php echo get_template_directory_uri();?>/assets/img/yellow-card.png"><p>3 Тур</p></td>
				  </tr>
				  <tr>
					<td><img src="<?php echo get_template_directory_uri();?>/assets/img/avatar.png"><p>Ім'я Фамілія</p></td>
					<td><img src="<?php echo get_template_directory_uri();?>/assets/img/komand_logo.png"><p>Назва Команди</p></td>
					<td><img id="disk" src="<?php echo get_template_directory_uri();?>/assets/img/discval_D2.png"></td>
				  </tr>
				</table>

				<table class="tabl_porush">
				  <tr class="tabl_head">
				    <td>ПОРУШЕННЯ</td>
					<td></td>
					<td></td>
				  </tr>
				  <tr>
					<td><img src="<?php echo get_template_directory_uri();?>/assets/img/avatar.png"><p>Ім'я Фамілія</p></td>
					<td><img src="<?php echo get_template_directory_uri();?>/assets/img/komand_logo.png"><p>Назва Команди</p></td>
					<td><img src="<?php echo get_template_directory_uri();?>/assets/img/yellow-card.png"><p>5 Тур</p></td>
				  </tr>
				</table>
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
