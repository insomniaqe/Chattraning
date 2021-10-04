document.querySelector(".close_button button").onclick = function() {closeQuestionFun()};
document.querySelector(".open_question").onclick = function() {openQuestionFun()};

function closeQuestionFun() {
  var questionOpen = document.querySelector('.question_block_right_side');
  questionOpen.classList.add('question_block_right_side_close');
}

function openQuestionFun() {
  var questionClose = document.querySelector('.question_block_right_side_close');
  questionClose.classList.remove('question_block_right_side_close');
}