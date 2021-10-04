<?php require('head.php'); ?>

<?php require('navigation.php'); ?>

<!-- Create Session Block -->

<section class="create_session_block">
	<div class="wrapper">
		<?php require('second_navigation.php'); ?>
		<div class="content_container">
			<div class="title">
				<h4 class="middle_title">Назначение сессии ученику</h4>
			</div>
			<div class="filter_container">
				<p class="filter_title">Фильтры</p>
				<img class="small_hamburger modal_open" src="images/hamburger_icon.svg">
				<div class="arrea_for_result"></div>
			</div>
			<div class="horisontal_row">
				<div class="flex">
					<div>
						<p class="small_title">Название сессии</p>
						<input class="noborder_input" type="text" name="" placeholder="Название сессии для Ивана Андреевича">
					</div>
				</div>
				<div class="flex">
					<div>
						<p class="small_title">Общее время сессии</p>
						<input class="noborder_input" type="text" name="" placeholder="40 мин">
					</div>
				</div>
				<div class="flex">
					<div>
						<p class="small_title">Информация о клиенте</p>
						<input type="checkbox" name="" id="checkbox2">
						<label class="label_for_checkbox" for="checkbox2"></label>
					</div>
				</div>
			</div>
			<div class="flex row_for_legend">
				<p class="small_title small_title_for_legend">Общая легенда</p>
				<div class="flex">
					<input type="checkbox" name="" id="checkbox3">
					<label class="label_for_checkbox" for="checkbox3"></label>
					<p class="small_title small_title_for_legend">Выбрать все</p>
				</div>
				<div class="flex">
					<input type="checkbox" name="" id="checkbox4">
					<label class="label_for_checkbox" for="checkbox4"></label>
					<p class="small_title small_title_for_legend">Случайный порядок</p>
				</div>
				<div class="flex">
					<p class="small_title small_title_for_legend">Вопросы: выбрано 1 из 163</p>
				</div>
			</div>
			<div class="horisontal_row">
				<div class="textarea_wrap">
					<textarea></textarea>
				</div>
			</div>
			<div class="horisontal_row">
				<div class="questions_list_scroll style_for_scroll">
					<div class="questions_list_row">
						<div class="questions_list_question">
							<div class="title">
								<p class="small_title">Вопрос №1</p>
							</div>
							<div class="questions_list_question_content">
								<div class="flex">
									<div class="questions_list_question_control">
										<div class="flex">
											<input type="checkbox" name="" id="checkbox5">
											<label class="label_for_checkbox" for="checkbox5"></label>
										</div>
										<div class="flex">
											<p class="small_title">Очередь</p>
											<input class="input_border_bottom" type="text" name="" placeholder="1">
										</div>
										<div class="flex">
											<p class="small_title">Время</p>
											<input class="input_border_bottom" type="text" name="" placeholder="0:10">
										</div>
									</div>
									<div class="questions_list_question_text">
										<p>
											впгывр грорп фрв прфыв лпрлофвыпр лоыфрпл офрывопрыфвопр лофыврпло рфывоп рфвырп лофыврп лорфыв лоп рыф прлофыпр лофывр плоыфврп лофрывплор флопрфылв рплоыф рлоыфврп лоыфврпло рфывлп рлофыв прлоыфвр лоыфвр лорывф рпфоывпрло впгывр грорп фрв прфыв лпрлофвыпр лоыфрпл офрывопрыфвопр лофыврпло рфывоп рфвырп лофыврп лорфыв лоп рыф прлофыпр лофывр плоыфврп лофрывплор флопрфылв рплоыф рлоыфврп лоыфврпло рфывлп рлофыв прлоыфвр лоыфвр лорывф рпфоывпрло  
										</p>
										<p class="small_title">Подробнее</p>
									</div>
								</div>
							</div>
						</div>
						<div class="questions_list_legend">
							<p class="questions_list_legend_title">Легенда</p>
							<div class="questions_list_legend_text style_for_scroll">
								<p>впгывр грорп фрв прфыв лпрлофвыпр лоыфрпл офрывопрыфвопр лофыврпло рфывоп рфвырп лофыврп лорфыв лоп рыф прлофыпр лофывр плоыфврп лофрывплор</p>
							</div>
							<div class="questions_list_legend_control">
								<div class="flex">
									<p class="small_title">Имя</p>
									<p>Николай</p>
								</div>
								<div class="flex">
									<p class="small_title">Возраст</p>
									<p>23</p>
								</div>
								<div class="flex">
									<p class="small_title">Пол</p>
									<p>Мужчина</p>
								</div>
								<div class="flex">
									<p class="small_title">Особые пометки</p>
									<p>Лояльный</p>
								</div>
							</div>
						</div>
					</div>
					<div class="questions_list_row">
						<div class="questions_list_question">
							<div class="title">
								<p class="small_title">Вопрос №1</p>
							</div>
							<div class="questions_list_question_content">
								<div class="flex">
									<div class="questions_list_question_control">
										<div class="flex">
											<input type="checkbox" name="" id="checkbox5">
											<label class="label_for_checkbox" for="checkbox5"></label>
										</div>
										<div class="flex">
											<p class="small_title">Очередь</p>
											<input class="input_border_bottom" type="text" name="" placeholder="1">
										</div>
										<div class="flex">
											<p class="small_title">Время</p>
											<input class="input_border_bottom" type="text" name="" placeholder="0:10">
										</div>
									</div>
									<div class="questions_list_question_text">
										<p>
											впгывр грорп фрв прфыв лпрлофвыпр лоыфрпл офрывопрыфвопр лофыврпло рфывоп рфвырп лофыврп лорфыв лоп рыф прлофыпр лофывр плоыфврп лофрывплор флопрфылв рплоыф рлоыфврп лоыфврпло рфывлп рлофыв прлоыфвр лоыфвр лорывф рпфоывпрло впгывр грорп фрв прфыв лпрлофвыпр лоыфрпл офрывопрыфвопр лофыврпло рфывоп рфвырп лофыврп лорфыв лоп рыф прлофыпр лофывр плоыфврп лофрывплор флопрфылв рплоыф рлоыфврп лоыфврпло рфывлп рлофыв прлоыфвр лоыфвр лорывф рпфоывпрло  
										</p>
										<p class="small_title">Подробнее</p>
									</div>
								</div>
							</div>
						</div>
						<div class="questions_list_legend">
							<p class="questions_list_legend_title">Легенда</p>
							<div class="questions_list_legend_text style_for_scroll">
								<p>впгывр грорп фрв прфыв лпрлофвыпр лоыфрпл офрывопрыфвопр лофыврпло рфывоп рфвырп лофыврп лорфыв лоп рыф прлофыпр лофывр плоыфврп лофрывплор</p>
							</div>
							<div class="questions_list_legend_control">
								<div class="flex">
									<p class="small_title">Имя</p>
									<p>Николай</p>
								</div>
								<div class="flex">
									<p class="small_title">Возраст</p>
									<p>23</p>
								</div>
								<div class="flex">
									<p class="small_title">Пол</p>
									<p>Мужчина</p>
								</div>
								<div class="flex">
									<p class="small_title">Особые пометки</p>
									<p>Лояльный</p>
								</div>
							</div>
						</div>
					</div>
					<div class="questions_list_row">
						<div class="questions_list_question">
							<div class="title">
								<p class="small_title">Вопрос №1</p>
							</div>
							<div class="questions_list_question_content">
								<div class="flex">
									<div class="questions_list_question_control">
										<div class="flex">
											<input type="checkbox" name="" id="checkbox5">
											<label class="label_for_checkbox" for="checkbox5"></label>
										</div>
										<div class="flex">
											<p class="small_title">Очередь</p>
											<input class="input_border_bottom" type="text" name="" placeholder="1">
										</div>
										<div class="flex">
											<p class="small_title">Время</p>
											<input class="input_border_bottom" type="text" name="" placeholder="0:10">
										</div>
									</div>
									<div class="questions_list_question_text">
										<p>
											впгывр грорп фрв прфыв лпрлофвыпр лоыфрпл офрывопрыфвопр лофыврпло рфывоп рфвырп лофыврп лорфыв лоп рыф прлофыпр лофывр плоыфврп лофрывплор флопрфылв рплоыф рлоыфврп лоыфврпло рфывлп рлофыв прлоыфвр лоыфвр лорывф рпфоывпрло впгывр грорп фрв прфыв лпрлофвыпр лоыфрпл офрывопрыфвопр лофыврпло рфывоп рфвырп лофыврп лорфыв лоп рыф прлофыпр лофывр плоыфврп лофрывплор флопрфылв рплоыф рлоыфврп лоыфврпло рфывлп рлофыв прлоыфвр лоыфвр лорывф рпфоывпрло  
										</p>
										<p class="small_title">Подробнее</p>
									</div>
								</div>
							</div>
						</div>
						<div class="questions_list_legend">
							<p class="questions_list_legend_title">Легенда</p>
							<div class="questions_list_legend_text style_for_scroll">
								<p>впгывр грорп фрв прфыв лпрлофвыпр лоыфрпл офрывопрыфвопр лофыврпло рфывоп рфвырп лофыврп лорфыв лоп рыф прлофыпр лофывр плоыфврп лофрывплор</p>
							</div>
							<div class="questions_list_legend_control">
								<div class="flex">
									<p class="small_title">Имя</p>
									<p>Николай</p>
								</div>
								<div class="flex">
									<p class="small_title">Возраст</p>
									<p>23</p>
								</div>
								<div class="flex">
									<p class="small_title">Пол</p>
									<p>Мужчина</p>
								</div>
								<div class="flex">
									<p class="small_title">Особые пометки</p>
									<p>Лояльный</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="create_session_button">
				<button>Назначить сессию</button>
			</div>
		</div>
	</div>
</section>


<!-- Modal Window -->

<div class="modal_window" id="modal_window">
	<div class="modal_window_container answers_check_modal style_for_scroll">
		<div class="modal_window_title">
			<div class="modal_window_close_btn">
				<img src="images/modal_close.svg">
			</div>
		</div>
		<div class="modal_list_container">


			<div class="modal_list_subcontainer">
				<h3 class="small_title small_title_for_legend">Выбор ученика</h3>
				<div class="">
					<div class="select" tabindex="1">
						<span class="tag_result_selected"><p>Иван</p></span>
						<span class="tag_result_selected"><p>Максим</p></span>
						<span class="tag_result_selected"><p>Павел</p></span>
					</div>
				</div>
				<h3 class="small_title small_title_for_legend">Выбор тренига</h3>
				<div class="">
					<div class="select" tabindex="1">
						<span class="select_value">Выбрать</span>
						<ul class="select_dropdown">
							<li class="select_option">Трениг №1</li>
							<li class="select_option">Трениг №2</li>
							<li class="select_option">Трениг №3</li>
						</ul>
						<span class="select_value">
						</span>
					</div>
					<span class="tag_result"></span>
				</div>
				<h3 class="small_title small_title_for_legend">Дата сессии</h3>
				<div class="">
					<div class="select" tabindex="1">
						<span class="select_value">Выбрать</span>
						<ul class="select_dropdown">
							<input type="date" name="">
						</ul>
					</div>
					<br />
					<span class="tag_result"></span>
				</div>
			</div>
			
			<div class="check_modal_result">
				<h3 class="small_title small_title_for_legend">Поиск по тэгу</h3>
				<div class="table_scroll style_for_scroll flex question_block_modal_list_tag">
					<ul class="question_block_modal_list">
						<li>
							<div class="question_block_modal_list_item">
								<input type="text" name="">
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal_overlay">
</div>

<?php require('footer.php'); ?>