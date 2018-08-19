/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var nextround = function () {
    var base_url = 'localhost/Questioniers/';
    var name = $('#UserName').val();
    var test = $('#test').val();
    console.log(test);
    if (name == '') {
        alert('please input your name');
        return false;
    }
    if (test == '0') {
        alert('please choose Test First');
        return false;
    } else {
        window.location.href = "../Views/quiz.php?name=" + name + "&test=" + test;
    }
};

var renderhtml = function (data) {

    var source = data;
//console.log(source.ActualQuestion);
    var renderme = '<p>' + source.ActualQuestion + '</p>\n\
            <input type="hidden" id="questionid" value="' + source.QuizQuestionsID + '">\n\
                <form><div class="row">';
    for (var i = 0; i < source.Answers.length; i++) {

        renderme += '<div class="col-md-6">\n\
                        <div class="form-group">\n\
                            <label class="btn btn-primary">\n\
                                <input isvalid=' + source.Answers[i].IsValid + ' id="Answer" name="Answer" class="Answer" value="' + source.Answers[i].IsValid + '" type="radio">';
        renderme += source.Answers[i].Answer;
        renderme += '</label>\n\
                        </div>\n\
                    </div>';
    }
    renderme += '</div></form>';
    $('.output').html(renderme);

};

var GetQuestion = function (testid, offset) {
    // console.log(testid,offset);
    var TestID = testid;
    var OffSet = offset;
    var GetQuestionparams = {TestID: TestID, OffSet: OffSet};
    $.ajax({
        type: "POST",
        url: "../Controller/main_controller.php",
        data: {GetQuestionparams: GetQuestionparams},
        cache: false,
        success: function (html) {
            html = JSON.parse(html);
            if (typeof html['error'] === 'undefined') {
                // does not exist
                var newoffset = parseInt(offset)
                $('#offset').val(newoffset + 1);
                renderhtml(html);

            } else {
                alert('undefined');
            }
        },
        error: function (e) {
            alert(e);
        }
    });
};

var nextQuestion = function (testid) {
    var offset = $('#offset').val();
    offset = parseInt(offset);
    QuestionsCount = parseInt(QuestionsCount);
    var answer = $("input[name='Answer']:checked").val();
    if (answer == null || answer == undefined) {
        alert('Please Choose one Option');
    } else {
                var barlimit = parseInt(QuestionsCount) * 10;
                var limit = 100 / barlimit;
                var currentprogress = parseFloat($('.progress-bar').attr('aria-valuenow'));
                $('.progress-bar').attr('aria-valuenow', currentprogress + barlimit + limit);
                $('.progress-bar').css('width', currentprogress + barlimit + limit + '%');
        if (answer == 1) {
            TotalResult += 1;
            console.log('TotalResult', TotalResult);
        }
        if (offset <= QuestionsCount - 1) {
            GetQuestion(testid, offset);
        } else {
            console.log('else');
            $('.done').show();//css('display','block');
            $('.next').hide();//css('display','none');
        }
    }
}

var FinalizeResult = function(){
  window.location.href = '../Views/result.php?Result='+TotalResult+'&total='+QuestionsCount;
  
};