<footer class="section_menu" id="contacts">
	<div class="container-fluid">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-10">
				<div class="row">
					<?php dynamic_sidebar('sidebar-footer1')?>
					<div class="col-lg-1 order-lg-2 d-sm-none d-lg-block"></div>
					<?php dynamic_sidebar('sidebar-footer2')?>
					<div class="col-lg-1 order-lg-4 d-sm-none d-lg-block"></div>
					<?php dynamic_sidebar('sidebar-footer3')?>
				</div>
			</div>
			<div class="col-1"></div>
		</div>
	</div>
</footer>
<div id="pop-up">
    <div class="pop-up">
        <p><b>Добрый день/вечер/ночь! :)</b></p>
        <p>Данный проект - учебный, создан при освоении автором<br>практических задач, предназначен для демонстрации в НЕКОММЕРЧЕСКИХ целях. Для создания сайта были использованы материалы из публичного доступа сети Интернет (картинки, шрифты, фото, видеоуроки, форумы,<br> Данный сайт вымышленной организации, и он не имеет никакого отношения к представленным на нём фото и людям. Отправка заявок не осуществляется всвязи с условиями ипользования хостинга (функционал предусмотрен)<br>
		<button type="button" onclick="popYes()"><b>Ясненько</b></button>
	</p>
        
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><b>Записаться на занятие</b></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
			</div>
			<div class="modal-body">
				<div class="row g-3">
					<p>Оставьте Ваши контакты, мы перезвоним Вам в ближайшее время</p>
					<?php echo do_shortcode('[contact-form-7 id="415" title="Контактная форма модального окна"]') ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php wp_footer()?>