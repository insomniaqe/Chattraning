<?php require('head.php'); ?>

<?php require('navigation.php'); ?>

<!-- Answers Check Block -->

<section class="create_session_block chat_block">
	<div class="wrapper">
		<?php require('second_navigation.php'); ?>
		<div class="content_container">
			<div class="title">
				<h4 class="middle_title">Название самого самого тренига №5</h4>
				<div class="chat_block_time_container">
					<div>
						<p class="small_title black_title">Общее время</p>
						<p class="text_container border_none">01:55:32</p>
					</div>
					<div>
						<p class="small_title black_title">Время на вопрос</p>
						<p class="text_container border_none">00:47:28</p>
					</div>
					<div>
						<p class="small_title black_title">Всего вопросов</p>
						<p class="text_container border_none">155 из 253</p>
					</div>
				</div>

			</div>
			<div class="chat_content">
				<div class="left_side">
					<div class="chat_contact_list style_for_scroll">
						<div class="chat_contact_list_item">
							<div class="chat_content_avatar">
								<img src="images/chat_content_avatar1.jpg">
							</div>
							<p>Имя или название группы</p>
							<div class="chat_notification"></div>
						</div>
						<div class="chat_contact_list_item">
							<div class="chat_content_avatar">
								<img src="images/chat_content_avatar1.jpg">
							</div>
							<p>Имя или название группы</p>
							<div class="chat_notification"></div>
						</div>
						<div class="chat_contact_list_item">
							<div class="chat_content_avatar">
								<img src="images/chat_content_avatar1.jpg">
							</div>
							<p>Имя или название группы</p>
							<div class="chat_notification"></div>
						</div>
						<div class="chat_contact_list_item">
							<div class="chat_content_avatar">
								<img src="images/chat_content_avatar1.jpg">
							</div>
							<p>Имя или название группы</p>
						</div>
						<div class="chat_contact_list_item">
							<div class="chat_content_avatar">
								<img src="images/chat_content_avatar1.jpg">
							</div>
							<p>Имя или название группы</p>
						</div>
						<div class="chat_contact_list_item">
							<div class="chat_content_avatar">
								<img src="images/chat_content_avatar1.jpg">
							</div>
							<p>Имя или название группы</p>
						</div>
						<div class="chat_contact_list_item">
							<div class="chat_content_avatar">
								<img src="images/chat_content_avatar1.jpg">
							</div>
							<p>Имя или название группы</p>
						</div>
						<div class="chat_contact_list_item">
							<div class="chat_content_avatar">
								<img src="images/chat_content_avatar1.jpg">
							</div>
							<p>Имя или название группы</p>
						</div>
					</div>
				</div>

				<div class="right_side">
					<div class="chat_arrea_row chat_arrea_row_left">
						<div class="message_container">
							<div class="chat_arrea_row_left_container">
								<p class="chat_arrea_row_title">John Doe</p>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum</p>
								<p>2h</p>
							</div>
							<div class="chat_content_angle"></div>
							<div class="chat_content_avatar">
								<img src="images/chat_content_avatar1.jpg">
							</div>
						</div>
						<div class="message_container">
							<div class="chat_arrea_row_left_container">
								<p class="chat_arrea_row_title">John Doe</p>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum</p>
								<p>2h</p>
							</div>
							<div class="chat_content_angle"></div>
							<div class="chat_content_avatar">
								<img src="images/chat_content_avatar1.jpg">
							</div>
						</div>
						<div class="message_control">
							<div class="message_control_container">
								<img class="chat_audio_icon" src="images/chat_audio_icon.svg">
							</div>
						</div>
					</div>
					<div class="chat_arrea_row chat_arrea_row_right">
						<div class="message_container">
							<div class="chat_content_avatar">
								<img src="images/chat_content_avatar2.jpg">
							</div>
							<div class="chat_content_angle"></div>
							<div class="chat_arrea_row_right_container">
								<p class="chat_arrea_row_title">John Doe</p>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum</p>
								<p>2h</p>
							</div>
						</div>

					</div>

					<div class="send_message_container">
						<input class="send_message_input" type="text" name="" placeholder="Введите сообщение...">
						<div class="message_control">
							<div class="message_control_container">
								<img class="chat_mic_icon" src="images/chat_mic_icon.svg">
								<button>Отправить</button>
							</div>
						</div>
					</div>
				</div>

				<div class="left_side chat_right_navigation">
					<div class="tab">
						<button class="tablinks active" onclick="openCity(event, 'tab1')">Общая легенда</button>
						<button class="tablinks" onclick="openCity(event, 'tab2')">Легенда вопроса</button>
					</div>

					<div id="tab1" class="tabcontent active" style="display: block;">
						<div>
							<p class="text_container border_none">Название блока 1</p>
						</div>
						<div>
							<p class="small_title black_title">Автор</p>
							<p class="text_container">Ермолаев Иван Андреевич</p>
						</div>
						<div>
							<p class="small_title black_title">Дата создания</p>
							<p class="text_container">11.10.2020</p>
						</div>
						<div>
							<p class="small_title black_title">Всего вопросов</p>
							<p class="text_container">155 из 253</p>
						</div>
						<div>
							<p class="small_title black_title">Легенда</p>
							<p class="text_container">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet </p>
						</div>
						<div>
							<p class="small_title black_title">Общее время</p>
							<p class="text_container">01:55:32</p>
						</div>
						<div>
							<p class="small_title black_title">Время на вопрос</p>
							<p class="text_container">00:47:28</p>
						</div>
					</div>

					<div id="tab2" class="tabcontent">
					<div class="chat_arrea_row">
						<div class="chat_arrea_row_container">
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no</p>
						</div>
						<div class="chat_arrea_row_legend_items">
							<div class="item">Николай</div>
							<div class="item">Мужчина</div>
							<div class="item">23 года</div>
							<div class="item">Лояльный</div>
						</div>
					</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<?php require('footer.php'); ?>