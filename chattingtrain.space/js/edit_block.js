document.querySelector(".full_screen_button").onclick = function() {FullScreenButtonGreenFunc()};
document.querySelector(".green_close_button").onclick = function() {GreenCloseButton()};
document.querySelector(".vertical_open_question_block_right_side").onclick = function() {verticalOpenRightSide()};

function FullScreenButtonGreenFunc() {
	var question_block_right_side = document.querySelector('.question_block_right_side');
	var vertical_open_question = document.querySelector('.vertical_open_question_block_right_side');
	vertical_open_question.classList.add('vertical_open_question_open');
	question_block_right_side.classList.add('question_block_right_side_close');
}

function GreenCloseButton(){
	var vertical_open_question = document.querySelector('.vertical_open_question_block_right_side');
	var question_block_right_side = document.querySelector('.question_block_right_side');
	question_block_right_side.classList.remove('question_block_right_side_close');
	vertical_open_question.classList.remove('vertical_open_question_open');	
}

function verticalOpenRightSide() {
	var vertical_open_question = document.querySelector('.vertical_open_question_block_right_side');
	var question_block_right_side = document.querySelector('.question_block_right_side');
	question_block_right_side.classList.remove('question_block_right_side_close');
	vertical_open_question.classList.remove('vertical_open_question_open');		
}