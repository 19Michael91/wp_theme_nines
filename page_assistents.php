<?php
// Template Name: Assistents Page

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
				<p>АСИСТЕНТИ</p>
				<table>
				  <tr class="tabl_head">
				    <td>№</td>
					<td></td>
					<td>Матчі</td>
					<td>Голи</td>
					<td>%</td>
					<td>КОМАНДА</td>
				  </tr>
				  <tr>
				    <td>1</td>
					<td><img src="<?php echo get_template_directory_uri();?>/assets/img/avatar.png"><p>Ім'я Фамілія</p></td>
					<td>5</td>
					<td>5</td>
					<td>1</td>
					<td><img src="<?php echo get_template_directory_uri();?>/assets/img/komand_logo.png"><p>Назва Команди</p></td>
				  </tr>
				</table>
				<div class="button_mor">
					<a href="#">більше</a>
				</div>
			</div>
		</div>
	</div>
</article>

<?php
    get_footer();
?>
