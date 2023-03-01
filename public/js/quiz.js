/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/quiz.js ***!
  \******************************/
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
//variables-----------------------------------------------------------------------
var answer_radio_index = 0;
var draggin_obj;
var draggin_parent;

// collect a containers from template and remove teamplate from DOM---------------
var answer_template = document.querySelector('.answer').cloneNode(true);
document.querySelector('.answer').remove();
var question_template = document.querySelector('.question').cloneNode(true);
document.querySelector('.question').remove();
var quiz_template = document.querySelector('.quiz').cloneNode(true);
document.querySelector('.quiz').remove();
document.querySelector('.send').classList.add('hide');

//collect data
function collectData() {
  var data = [];
  //quiz
  var _iterator = _createForOfIteratorHelper(document.querySelectorAll('.quiz')),
    _step;
  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      quiz_el = _step.value;
      var quiz_questions = quiz_el.querySelectorAll('.question');
      var questins_arr = [];
      //questions
      var _iterator2 = _createForOfIteratorHelper(quiz_questions),
        _step2;
      try {
        for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
          question_el = _step2.value;
          var answers = question_el.querySelectorAll('.answer');
          var answers_arr = [];
          //answers
          var _iterator3 = _createForOfIteratorHelper(answers),
            _step3;
          try {
            for (_iterator3.s(); !(_step3 = _iterator3.n()).done;) {
              answer_el = _step3.value;
              {
                answers_arr.push({
                  answer: answer_el.querySelector('.answer_text').value,
                  is_right: answer_el.querySelector('.form-check-input').checked
                });
              }
            }
          } catch (err) {
            _iterator3.e(err);
          } finally {
            _iterator3.f();
          }
          questins_obj = {};
          questins_obj[question_el.querySelector('.question_name').value] = answers_arr;
          questins_arr.push([questins_obj]);
        }
      } catch (err) {
        _iterator2.e(err);
      } finally {
        _iterator2.f();
      }
      quiz_obj = {};
      quiz_obj[quiz_el.querySelector('input.form-control').value] = questins_arr;
      data.push([quiz_obj]);
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
  return data;
}

//listeners------------------------------------------------------------------------
document.addEventListener('click', function (e) {
  // Create quiz card
  if (e.target.classList.contains('createQuiz')) {
    var quizContainer = document.querySelector('.quizContainer');
    var quiz = quiz_template.cloneNode(true);
    quizContainer.append(quiz);

    //show send button
    document.querySelector('.send').classList.remove('hide');
  } else if (e.target.classList.contains('addQuestion')) {
    // create question card
    var question = question_template.cloneNode(true);
    e.target.parentNode.append(question);
  } else if (e.target.classList.contains('addAnswer')) {
    //create answer
    var answer = answer_template.cloneNode(true);
    answer_in_list = e.target.parentNode.querySelector('.answer');
    //if question exist in list
    if (answer_in_list) {
      answer.querySelector('.form-check-input').name = answer_in_list.querySelector('.form-check-input').name;
    } else {
      answer_radio_index += 1;
      answer.querySelector('.form-check-input').name += answer_radio_index.toString();
    }
    e.target.parentNode.append(answer);
  } else if (e.target.classList.contains('btn-close')) {
    // Remove element button
    e.target.parentNode.remove();

    // hide send button
    var quiz_check = document.querySelector('.quiz');
    if (!quiz_check) {
      document.querySelector('.send').classList.add('hide');
    }
  } else if (e.target.classList.contains('send')) {
    // collect and send data
    var collected_data = collectData();
    console.log(JSON.stringify(collected_data));
    console.log(collected_data);
  }
});
document.addEventListener('dragstart', function (e) {
  e.target.classList.add('dragging');
  draggin_obj = e.target.cloneNode(true);
  draggin_parent = e.target.parentNode;
});
document.addEventListener('dragend', function (e) {
  e.target.classList.remove('dragging');
  // if (e.target != draggin_parent) {
  // console.log(draggin_parent.contains(e.target));
  // console.log(e.target)
  // }
});

document.addEventListener('dragleave', function (e) {
  // if (e.target != draggin_parent) {
  // console.log(draggin_parent.contains(e.target));
  // console.log(e.target);
  // }
});
document.addEventListener('dragover', function (e) {
  // if (e.target != draggin_parent) {
  // console.log(draggin_parent.contains(e.target));
  console.log(e.target);
  // }
});
//validators----------------------------------------------------------------------
function check_empty_quiz() {
  var flag_is_empty = false;
  var _iterator4 = _createForOfIteratorHelper(document.querySelectorAll('.quiz')),
    _step4;
  try {
    for (_iterator4.s(); !(_step4 = _iterator4.n()).done;) {
      quiz_el = _step4.value;
      if (length(quiz_el.querySelector('.quiz_name').value) < 1) {
        flag_is_empty = true;
      }
    }
  } catch (err) {
    _iterator4.e(err);
  } finally {
    _iterator4.f();
  }
  return flag_is_empty;
}
function check_empty_question(elem) {
  var flag_is_empty = false;
  var _iterator5 = _createForOfIteratorHelper(elem.querySelectorAll('.card.question')),
    _step5;
  try {
    for (_iterator5.s(); !(_step5 = _iterator5.n()).done;) {
      question_el = _step5.value;
      if (length(question_el.querySelector('.question_name').value) < 1) {
        flag_is_empty = true;
      }
    }
  } catch (err) {
    _iterator5.e(err);
  } finally {
    _iterator5.f();
  }
  return flag_is_empty;
}
function check_empty_questio(elem) {
  var flag_is_empty = false;
  var _iterator6 = _createForOfIteratorHelper(elem.querySelectorAll('.card-body')),
    _step6;
  try {
    for (_iterator6.s(); !(_step6 = _iterator6.n()).done;) {
      question_el = _step6.value;
      if (length(question_el.querySelector('.answer_text').value) < 1) {
        flag_is_empty = true;
      }
    }
  } catch (err) {
    _iterator6.e(err);
  } finally {
    _iterator6.f();
  }
  return flag_is_empty;
}
/******/ })()
;