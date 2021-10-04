<?php require('head.php'); ?>

<?php require('navigation.php'); ?>

<!-- Question Block -->

<section class="question_block call_check_block exspress_test_block">
	<div class="wrapper">
		<div class="question_block_content content_container">

			<!-- Vertical Audio Line -->


			<!-- Left Container -->
			<div class="question_block_left_side">
				<div class="notice_container">
					<div class="notice_container_content">
						<p class="notice_container_content_text">Чтобы создать комментрий на аудиодорожке - наведите стрелку на аудиодорожку и двойным нажатием создайте отметку. комментарий привяжется к началу автоматически.</p>
						<div class="notice_change_btn notice_change_btn_right">
							<img src="images/notice_change_btn_right.svg">
						</div>
					</div>
				</div>
				<div class="title">
					<h4 class="middle_title bold_bottom_border">Рандомные тесты</h4>
				</div>
				<div class="exspress_test_block_content">
					<div class="exspress_test_block_test_title">
						<h4>Lorem ipsum bla bla bla</h4>
					</div>
					<div class="exspress_test_block_test_timer">
						<img src="images/exspress_test_block_test_timer.svg" alt="">
					</div>
					<div class="exspress_test_block_test_items">
						<div class="exspress_test_block_test_items_title">
							<p>Выберите правильный ответ</p>
							<img src="images/exspress_test_block_test_items_arrow.svg">
						</div>
						<ul>
							<li>
								<p>Бла бла бла</p>
							</li>
							<li>
								<p>Бла бла бла</p>
							</li>
							<li>
								<p>Бла бла бла</p>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- Modal Window -->

<div class="modal_window call_check_block_modal" id="modal_window">
	<div class="modal_window_container">
		<div class="modal_window_title">
			<h3>Создание комментария</h3>
			<div class="modal_timing">
				<div>
					<p class="small_title">Начало тайминга</p>
					<p class="text_container border_none">00:15</p>
				</div>
			</div>
			<div class="modal_timing">
				<div>
					<p class="small_title">Конец тайминга</p>
					<p class="text_container border_none">00:45</p>
				</div>
			</div>
			<div class="modal_window_close_btn">
				<img src="images/modal_close.svg">
			</div>
		</div>
		<div class="modal_content">
			<div class="modal_content_trigger_container">
				<p class="left_title">Голос</p>
				<input type="checkbox" name="" id="gender">
				<label class="trigger_label" for="gender">
					<span></span>
				</label>
				<p class="right_title">Текст</p>
			</div>
			<div class="modal_content_textarrea">
				<p>adg adg adg adg ad gadg d ag dsjgkdsj gklsdjg lsdj gjsdklg jsdklg jsdgj sdkjg sdjg sldkjg dsjgkldsjgsjg jsdlg jsdgj sdljg kldsj gsdjkjsdlg jsdk jgdsjgsdjg ksdjgksdjgkjsd klgjsdkgjdsjgkldsjkjsd j kj j hjh jh hj hh kjhkj h hjk hjk hjh h kh kj hkj</p>
				<img class="modal_recycle" src="images/modal_recycle.svg">
			</div>
		</div>
		<div class="modal_button_container">
			<button>Добавить</button>
		</div>
	</div>
</div>

<div class="modal_window call_check_block_modal" id="modal_window_2">
	<div class="modal_window_container">
		<div class="modal_window_title">
			<h3>Редактирование</h3>
			<div class="modal_window_close_btn">
				<img src="images/modal_close.svg">
			</div>
		</div>
		<div class="modal_content">
			<div class="modal_2_inputs">
				<div class="flex">
					<div>
						<p class="small_title">Имя клиента</p>
						<input class="noborder_input" type="text" name="" placeholder="Ермолаев Иван Андреевич">
					</div>
				</div>
				<div class="flex">
					<div>
						<p class="small_title">Ссылка на Amo Crm</p>
						<input class="noborder_input" type="text" name="" placeholder="https://checkreman/370566/">
					</div>
				</div>
				<div class="flex">
					<div>
						<p class="small_title">Этап</p>
						<input class="noborder_input" type="text" name="" placeholder="dskgjkasd jgakl gjlkasdjg ">
					</div>
				</div>
				<div class="flex">
					<div>
						<p class="small_title">Воронка</p>
						<input class="noborder_input" type="text" name="" placeholder="Первичный контакт">
					</div>
				</div>
			</div>
			<div class="modal_2_checkboxes">
				<div class="flex">
					<div>
						<p class="small_title">Дата создания</p>
						<input class="noborder_input" type="text" name="" placeholder="11.01.2021">
					</div>
				</div>
				<div class="flex">
					<div>
						<p class="small_title">Дата звонка</p>
						<input class="noborder_input" type="text" name="" placeholder="11.01.2021">
					</div>
				</div>
				<div class="flex">
					<div>
						<p class="small_title">Длительность</p>
						<input class="noborder_input" type="text" name="" placeholder="00:45:16">
					</div>
				</div>
				<div class="flex">
					<p class="question_block_question_text">Показать ошибки</p>
					<input type="checkbox" name="" id="checkbox1">
					<label class="label_for_checkbox" for="checkbox1"></label>
				</div>
				<div class="flex">
					<p class="question_block_question_text">Автоисправление ошибок</p>
					<input type="checkbox" name="" id="checkbox1">
					<label class="label_for_checkbox" for="checkbox1"></label>
				</div>
				<div class="flex">
					<p class="question_block_question_text">Текст оператора</p>
					<input type="checkbox" name="" id="checkbox1">
					<label class="label_for_checkbox" for="checkbox1"></label>
				</div>
				<div class="flex">
					<p class="question_block_question_text">Текст клиента</p>
					<input type="checkbox" name="" id="checkbox1">
					<label class="label_for_checkbox" for="checkbox1"></label>
				</div>
			</div>
			<div class="modal_2_buttons">
				<div class="modal_button_container">
					<button class="border_button">Загрузить файл</button>
				</div>
				<div class="modal_button_container">
					<button class="border_button">Записать голосом</button>
				</div>
				<div class="modal_button_container">
					<button class="border_button">Импорт из CRM</button>
				</div>
				<div class="modal_button_container">
					<button>Транскрибировать</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal_overlay">
</div>

<?php require('footer.php'); ?>