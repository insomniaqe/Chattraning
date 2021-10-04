document.querySelector(".question_block_right_side .notice_change_btn_right").onclick = function() {BlockRotateFunc()};
document.querySelector(".question_block_left_side .notice_change_btn_right").onclick = function() {BlockRotateFunc()};
document.querySelector("#modal_window_2 .modal_window_close_btn").onclick = function() {settingsModalCloseFunc()};
document.querySelector(".vertical_audio_line_container").onclick = function() {audioLineFunc()};

function BlockRotateFunc() {
	var question_block_right_side = document.querySelector('.question_block_right_side');
	var question_block_right_side_notice_img = document.querySelector('.question_block_right_side .notice_change_btn_right img');
	var question_block_right_side_notice_btn = document.querySelector('.question_block_right_side .notice_change_btn_right');
	var question_block_left_side_notice_img = document.querySelector('.question_block_left_side .notice_change_btn_right img');
	var question_block_left_side_notice_btn = document.querySelector('.question_block_left_side .notice_change_btn_right');
	var question_block_left_side = document.querySelector('.question_block_left_side');
	var question_block_right_side_title = document.querySelector('.question_block_right_side .notice_container_content_text');
	var question_block_left_side_title = document.querySelector('.question_block_left_side .notice_container_content_text');

	question_block_right_side_notice_btn.classList.toggle('question_block_right_side_notice_btn_change');
	question_block_right_side_notice_img.classList.toggle('question_block_right_side_notice_img_change');
	question_block_left_side_notice_btn.classList.toggle('question_block_left_side_notice_btn_change');
	question_block_left_side_notice_img.classList.toggle('question_block_left_side_notice_img_change');
	question_block_right_side_title.classList.toggle('visib_none');
	question_block_left_side_title.classList.toggle('visib_none');
	question_block_right_side.classList.toggle('question_block_right_side_change');
	question_block_left_side.classList.toggle('question_block_left_side_change');
}

function settingsModalCloseFunc() {
	var modalWindow = document.querySelector('#modal_window_2');
	modalWindow.classList.remove('modal_window_open')
	var modalOverlay = document.querySelector('.modal_overlay');
	modalOverlay.classList.remove('overlay_window_open');
}

function audioLineFunc() {
	var audioLine = document.querySelector('.vertical_audio_line_container');
	audioLine.classList.add('audioLineZindex');
}