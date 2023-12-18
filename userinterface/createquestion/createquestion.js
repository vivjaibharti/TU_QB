var id=1;
const questionContainer=document.getElementById("questionContainer");

$(document).ready(function(){
  alert("Jquery");
  var q1div = $('<div>');
  q1div.attr("id", "q"+id);
  q1div.attr("class","questionDiv")
  q1div.text("Q1. ");

  var lb1 = $('<label>');
  lb1.text('Select Question type');
  lb1.attr("for","s"+id);

  var select1 = $('<select>');
  select1.attr("id", "s"+id);
  select1.attr("class", "selectQuestion");

  for (var i = 0; i < 3; i++) {
    var option = $('<option>');
    if (i === 0) {
      option.text('Select question Type');
    } else if (i === 1) {
      option.text('Objective');
      option.attr("value", 'Objective');
      option.attr("id","s"+id+i)
      option.attr("onclick", "selectQuestion()")
    } else if (i === 2) {
      option.text('Subjective');
      option.attr("value",'Subjective');
      option.attr("id","s"+id+i)
      option.attr("onclick", "selectQuestion()")
    }
    select1.append(option);
  }

  var qinputContainer=$("<div>");
  qinputContainer.attr("id","q"+id+"1");
  qinputContainer.attr("class","qInputContainer")
  id++;

  $('#questionContainer').append(q1div);
  $('#q1').append(lb1);
  $('#q1').append(select1);
  $('#q1').append(qinputContainer);

});

$(document).ready(function(){
    $(document).on("change",".questionDiv .selectQuestion" ,function(){

        alert("fun Called");

        var divIds=$('.questionDiv');
        var length=divIds.length;
        alert(length);

        // Find the closest parent div with class "questionDiv"
        var questionDiv = $(this).closest(".questionDiv");
        alert(questionDiv);
    
        // Find the child div with class "qInputContainer" within the parent div
        var qInputContainer = questionDiv.find(".qInputContainer");
        alert(qInputContainer);
    
        // Get the id of the qInputContainer
        var qInputContainerId = qInputContainer.attr("id");
    
        var selectValue=$(this).val();
        alert(qInputContainerId+selectValue)
    
        if(selectValue==="Objective")
        {
          $("#"+qInputContainerId).empty();
          var questionbox=$('<textarea>');
          questionbox.attr("class","objQuestion");
          questionbox.attr("id","objQuestion"+qInputContainerId);
          questionbox.attr("placeholder","Enter a MCQ")
          $("#"+qInputContainerId).append(questionbox);

          for(i=1;i<5;i++)
          {
            var option=$("<textarea>");
            option.attr("class","objOption");
            option.attr("id",qInputContainerId+"objOption"+i);
            option.attr("placeholder","Enter Option "+i)
            $("#"+qInputContainerId).append(option);
          }

          var addBtn=$('<button>');
          addBtn.attr("class","addBtn");
          addBtn.attr("id","addBtn"+qInputContainerId);
          addBtn.text("Add");

          $("#"+qInputContainerId).append(addBtn);
        }
        else if(selectValue==="Subjective")
        {
          $("#"+qInputContainerId).empty();
          var questionbox=$('<textarea>');
          questionbox.attr("class","subjQuestion");
          questionbox.attr("id","subjQuestion"+qInputContainerId);
          questionbox.attr("placeholder","Enter a Question")
          $("#"+qInputContainerId).append(questionbox);

          var addBtn=$('<button>');
          addBtn.attr("class","addBtn");
          addBtn.attr("id","addBtn"+qInputContainerId);
          addBtn.text("Add");

          $("#"+qInputContainerId).append(addBtn);
        }
        
        });

});


$(document).on("click","#addQuestionBtn",function(){
    var divIds=$('.questionDiv');
    var length=divIds.length;
    alert(length);
    length++;
    var qdiv = $('<div>');
    qdiv.attr("id", "q"+length);
    qdiv.attr("class","questionDiv");
    qdiv.text("Q"+length+". ");

  var lb1 = $('<label>');
  lb1.text('Select Question type');
  lb1.attr("for","s"+length);

  var select = $('<select>');
  select.attr("id", "s"+length);
  select.attr("class", "selectQuestion");

  for (var i = 0; i < 3; i++) {
    var option = $('<option>');
    if (i === 0) {
      option.text('Select question Type');
    } else if (i === 1) {
      option.text('Objective');
      option.attr("value", 'Objective');
      option.attr("id","s"+length+i)
      option.attr("onclick", "selectQuestion()")
    } else if (i === 2) {
      option.text('Subjective');
      option.attr("value",'Subjective');
      option.attr("id","s"+length+i)
      option.attr("onclick", "selectQuestion()")
    }
    select.append(option);
  }

  var qinputContainer=$("<div>");
  qinputContainer.attr("id","q"+length+"1");
  qinputContainer.attr("class","qInputContainer")

  $('#questionContainer').append(qdiv);
  $('#q'+length).append(lb1);
  $('#q'+length).append(select);
  $('#q'+length).append(qinputContainer);

});
    


