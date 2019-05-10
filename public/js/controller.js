$(document).ready(function () {
	
var questionNumber=0;
var questionBank=new Array();
var stage="#game1";
var stage2=new Object;
var questionLock=false;
var numberOfQuestions;
var score=0;
    var j=1 ;
    var protanopia=0;
    var normal=0;
    var deuteranopia=0;
    var t ;











    $.getJSON('js/activity.json', function(data) {

		for(i=0;i<data.quizlist.length;i++){ 
			questionBank[i]=new Array;
			questionBank[i][0]=data.quizlist[i].question;
			questionBank[i][1]=data.quizlist[i].option1;
			questionBank[i][2]=data.quizlist[i].option2;
			questionBank[i][3]=data.quizlist[i].option3;
            questionBank[i][4]=data.quizlist[i].option4;
            questionBank[i][5]=data.quizlist[i].normal;
            questionBank[i][6]=data.quizlist[i].protanopia;
            questionBank[i][7]=data.quizlist[i].deuter;



        }
		 numberOfQuestions=questionBank.length;




		displayQuestion();
		})//gtjson
 
 



function displayQuestion(){


    var rnd=Math.random()*3;
rnd=Math.ceil(rnd);
 var q1;
 var q2;
 var q3;
    var q4;


var a = "img/plate"+j+".png" ;


    if(rnd==1){q1=questionBank[questionNumber][1];q2=questionBank[questionNumber][2];q3=questionBank[questionNumber][3];q4=questionBank[questionNumber][4];}
if(rnd==2){q2=questionBank[questionNumber][1];q3=questionBank[questionNumber][2];q1=questionBank[questionNumber][3];q4=questionBank[questionNumber][4];}
if(rnd==3){q3=questionBank[questionNumber][1];q1=questionBank[questionNumber][2];q2=questionBank[questionNumber][3];q4=questionBank[questionNumber][4];}


    $(stage).append('<div class="imageSize"><center><img src="'+a+'" width="300" height="300"/></center></div><div class="questionText">'+questionBank[questionNumber][0]+'</div><table>' +
        '<tr>' +
        '<td><div id="1" class="option">'+q1+'</div></td>' +
        '<td><div id="2" class="option">'+q2+'</div></td></tr><tr><td><div id="3" class="option">'+q3+'</div></td><td><div id="4" class="option">'+q4+'</div></td></tr>');

    j=j+1;


// <div id="5" class="option"><img src="img/logo.png" height="200" width="200"/></div>
 $('.option').click(function(){
     var answer = $(this).text();


if(answer==questionBank[questionNumber][5])
    {
        normal++ ;
    }
     if(answer==questionBank[questionNumber][6])
     {
         protanopia++ ;
     }
     if(answer==questionBank[questionNumber][7])
     {
         deuteranopia++ ;
     }

     if(questionLock==false){questionLock=true;



  setTimeout(function(){changeQuestion()},1000);
 }})
}//display question

	
	
	
	
	
	function changeQuestion(){
		
		questionNumber++;

	if(stage=="#game1"){stage2="#game1";stage="#game2";}
		else{stage2="#game2";stage="#game1";}
	
	if(questionNumber<numberOfQuestions){displayQuestion();}else{displayFinalSlide();}
	
	 $(stage2).animate({"right": "+=800px"},"slow", function() {$(stage2).css('right','-800px');$(stage2).empty();});
	 $(stage).animate({"right": "+=800px"},"slow", function() {questionLock=false;});
	}//change question
	

	
	
	function displayFinalSlide(){
        if (normal>5)
        {t = "Almost Normal Vision" ;
        }
        else
        if (protanopia>4)
        {t="Protanopia : They have a neutral point at a cyan-like wavelength around 492 nm (see spectral color for comparison)—that is, they cannot discriminate light of this wavelength from white. For a protanope, the brightness of red, orange, and yellow are much reduced compared to normal."}
        else
        if (deuteranopia>4)
        {t="Deuteranopia"}
        else
        {t="Vision Problem, You need to go to the ophthalmologist"}

		$(stage).append('<div class="questionText">You have finished the test!<br><br>Correct answers: '+normal+' / 10<br>Result: '+t+'</div>');
		
	}//display final slide
	
	
	
	
	
	
	
	});//doc ready