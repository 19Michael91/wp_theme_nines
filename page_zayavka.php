<?php
// Template Name: Zayavka Page

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
			<h2 class="team-online">заявити команду on-line</h2>
			<form action="" method="" id="form-zayavka">
				<input type="text" placeholder="НАЗВА КОМАНДИ">
				<input type="text" placeholder="МІСТО">
				<input type="text" placeholder="ОРГАНІЗАТОР (ІМ'Я ТА ПРІЗВИЩЕ)">
				<input type="text" placeholder="ТЕЛЕФОН">
				<input type="text" placeholder="КАПІТАН (ІМ'Я ТА ПРІЗВИЩЕ)">
				<input type="text" placeholder="ТЕЛЕФОН">
				<input type="text" placeholder="ПОСИЛАННЯ НА ФОТО КОМАНДИ">
				<input type="text" placeholder="ПОСИЛАННЯ НА ЕМБЛЕМУ КОМАНДИ">
				<input type="text" placeholder="ПОСИЛАННЯ НА ЕМБЛЕМУ КОМАНДИ">
				<p class="marginTop">попередній список гравців(піб, <span>дата народження</span>).</p>
				<p>заповнюйте точні та повні імена українською мовою</p>
				<textarea></textarea>
				<input type="submit" value="НАДІСЛАТИ">
			</form>
		</div>
	</div>
</article>

<?php
    get_footer();
?>
