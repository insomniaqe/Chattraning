<?php require('head.php'); ?>

<?php require('navigation.php'); ?>

<!-- Close Question Block -->

<section class="close_question_block">
	<div class="wrapper">
		<?php require('second_navigation.php'); ?>
		<div class="content_container">
			<div class="title">
				<h4 class="middle_title">Вопрос №1 из 265</h4>
			</div>
			<div class="top_side">
				<div class="flex">
					<div class="modal_content_trigger_container">
						<p class="left_title">Голос</p>
						<input type="checkbox" name="" id="gender">
						<label class="trigger_label" for="gender">
							<span></span>
						</label>
						<p class="right_title">Текст</p>
					</div>
					<button>Записать голосом</button>
					<div class="cut_audio_container">
						<button class="modal_open">Обрезать аудио</button>
						<p>audio.mp3</p>
						<img src="images/audio_sample.svg">
					</div>
				</div>
				<div class="flex">

				</div>
			</div>
			<div class="close_question_block_content">
				<div class="left_side">
					<div class="left_side_top">
						<div class="flex">
							<div>
								<p class="small_title">Имя</p>
								<input type="text" name="" placeholder="Николай">
							</div>
							<div class="flex">
								<input type="checkbox" name="" id="checkbox1">
								<label class="label_for_checkbox" for="checkbox1"></label>
								<img src="images/question_icon.svg" alt="" class="question_icon">
							</div>
						</div>
						<div class="flex">
							<div>
								<p class="small_title">Возрраст</p>
								<select name="" id="">
									<option value="">18-35</option>
									<option value="">18-35</option>
									<option value="">18-35</option>
									<option value="">18-35</option>
									<option value="">18-35</option>
								</select>
							</div>
							<div class="flex">
								<input type="checkbox" name="" id="checkbox2">
								<label class="label_for_checkbox" for="checkbox2"></label>
								<img src="images/question_icon.svg" alt="" class="question_icon">
							</div>
						</div>
						<div class="flex">
							<div>
								<div class="gender_title">
									<p>Муж</p>
									<p>Жен</p>
								</div>
								<p class="small_title">Пол</p>
								<input type="checkbox" name="" id="gender">
								<label class="trigger_label" for="gender">
									<span></span>
								</label>
							</div>
							<div class="flex">
								<input type="checkbox" name="" id="checkbox3">
								<label class="label_for_checkbox gender_checkbox" for="checkbox3"></label>
								<img src="images/question_icon.svg" alt="" class="question_icon">
							</div>
						</div>
						<div class="flex">
							<div>
								<p class="small_title">Особые пометки</p>
								<select name="" id="">
									<option value="">Лояльный</option>
									<option value="">Лояльный</option>
									<option value="">Лояльный</option>
									<option value="">Лояльный</option>
									<option value="">Лояльный</option>
								</select>
							</div>
							<div class="flex">
								<input type="checkbox" name="" id="checkbox4">
								<label class="label_for_checkbox" for="checkbox4"></label>
								<img src="images/question_icon.svg" alt="" class="question_icon">
							</div>
						</div>
					</div>
					<div class="left_side_bottom">
						<div class="flex">
							<div>
								<p class="small_title">Особые пометки</p>
								<textarea></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="right_side">
					<div class="right_side_top">
						<div class="flex">
							<div>
								<p class="small_title">Статус</p>
								<select name="" id="">
									<option value="">Уже клиент</option>
									<option value="">Уже клиент</option>
									<option value="">Уже клиент</option>
									<option value="">Уже клиент</option>
									<option value="">Уже клиент</option>
								</select>
							</div>
							<div class="flex">
								<input type="checkbox" name="" id="checkbox5">
								<label class="label_for_checkbox" for="checkbox5"></label>
								<img src="images/question_icon.svg" alt="" class="question_icon">
							</div>
						</div>
						<div class="flex">
							<div>
								<p class="small_title">Дополнительная информация</p>
								<input type="text" name="" placeholder="Николай">
							</div>
						</div>
					</div>
					<div class="right_side_bottom">
						<div class="flex">
							<div>
								<p class="small_title">Вопрос</p>
								<textarea></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="right_side_bottom_buttons">
				<div class="flex">
					<button>Вернуться</button>
					<button>Добавить в цепочку</button>
					<button>Сохранить</button>
				</div>
			</div>
			<div class="pagination_container">
				<div class="pagination">
					<button>&lt;</button>
					<button>1</button>
					<button>2</button>
					<button>3</button>
					<button>4</button>
					<button>5</button>
					<button>6</button>
					<button>&gt;</button>
					<button>&gt;|</button>
				</div>
				<button class="pagination_create">Добавить</button>
			</div>

		</div>
	</div>
</section>

<div class="modal_window audio_cut_modal" id="modal_window">
	<div class="modal_window_container">
		<div class="modal_window_title">
			<div class="audio_cut_button audio_cut_modal_buttons">
				<img src="images/audio_cut_button.svg" alt="">
			</div>
			<div class="audio_cut_volume audio_cut_modal_buttons">
				<img src="images/audio_cut_volume.svg" alt="">
				<p>Громкость</p>
			</div>
			<div class="audio_cut_range audio_cut_modal_buttons">
				<input type="range" name="">
			</div>
			<div class="audio_cut_refresh_icon audio_cut_modal_buttons">
				<img src="images/audio_cut_refresh_icon.svg">
			</div>
			<div class="audio_cut_close_icon modal_window_close_btn audio_cut_modal_buttons">
				<img src="images/audio_cut_close_icon.svg">
			</div>
		</div>
		<div class="modal_content">
			<img class="big_audioline" src="images/big_audioline.svg" alt="">
		</div>
		<div class="modal_content">
			<div class="audio_cut_button audio_cut_modal_buttons">
				<img src="images/audio_cut_button.svg" alt="">
			</div>
			<div class="audio_cut_volume audio_time_control audio_cut_modal_buttons">
				<input type="number" name="" value="0.10" step="0.1">
				<input type="number" name="" value="0.40" step="0.1">
			</div>
			<div class="audio_modal_save_button">
				<button>Сохранить</button>
			</div>
		</div>
	</div>
</div>
<div class="modal_overlay">
</div>

<?php require('footer.php'); ?>