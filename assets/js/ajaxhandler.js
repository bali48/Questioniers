/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var nextround = function(){
    var base_url = 'localhost/Questioniers/';
  var name = $('#UserName').val();
  var test = $('#test').val();
  console.log(test);
  if(name == ''){
      alert('please input your name');
      return false;
  }
  if(test == '0'){
      alert('please choose Test First');
      return false;
  }
  else{
     window.location.href = "../Views/quiz.php?name="+name+"&test="+test;
  }
};