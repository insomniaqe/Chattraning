document.querySelector(".question_blocks_list_modal_window_close_btn").onclick = function() {modalCloseFunc()};
document.querySelector(".question_blocks_list_modal_open").onclick = function() {modalOpenFunc()};

function modalOpenFunc() {
	var modalWindow = document.querySelector('#modal_window');
	modalWindow.classList.add('modal_window_open')
	var modalOverlay = document.querySelector('.modal_overlay');
	modalOverlay.classList.add('overlay_window_open');
}

function modalCloseFunc() {
	var modalWindow = document.querySelector('#modal_window');
	modalWindow.classList.remove('modal_window_open')
	var modalOverlay = document.querySelector('.modal_overlay');
	modalOverlay.classList.remove('overlay_window_open');
}