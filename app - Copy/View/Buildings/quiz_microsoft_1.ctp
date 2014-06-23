

<HEAD>

<style type="text/css">
<!--
.bgclr {background-color: white; color: black; font-weight: bold;}
-->
</style>

<script language="JavaScript">


<!-- Begin
// Insert number of questions
var puncte = 0;
var numQues = 4;

// Insert number of choices in each question
var numChoi = 3;

// Insert number of questions displayed in answer area
var answers = new Array(4);

// Insert answers to questions
answers[0] = "is the emerging standards body for Web application security";
answers[1] = "when you are attacked and the app is functional";
answers[2] = "instlaing a antivirus";
answers[3] = "finding issue in your app";

// Do not change anything below here ...
function getScore(form) {
  var score = 0;
  var currElt;
  var currSelection;
  for (i=0; i<numQues; i++) {
    currElt = i*numChoi;
    for (j=0; j<numChoi; j++) {
      currSelection = form.elements[currElt + j];
      if (currSelection.checked) {
        if (currSelection.value == answers[i]) {
          score++;
          break;
        }
      }
    }
  }
  score = Math.round(score/numQues*100);
  form.percentage.value = score + "%";
  puncte = score * 10;
  var correctAnswers = "";
  for (i=1; i<=numQues; i++) {
    correctAnswers += i + ". " + answers[i-1] + "\r\n";
    
  }

  form.solutions.value = correctAnswers;
  form.Points.value = puncte;


 

}
//  End -->
</script>



</HEAD>


<BODY>

<center><h1>Microsoft | Floor 1</h1></center>
<div id="concepts" style="width:676px;height:498px;;line-height:3em;overflow:scroll;">
<form name="quiz">


<b>1. What is OWASP?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q1" value="is the emerging standards body for Web application security">is the emerging standards body for</br> Web application security</li>
  <li><input type="radio" name="q1" value="is a cryptosystem">is a cryptosystem</li>
  <li><input type="radio" name="q1" value="is a perfect-secret">is a perfect-secret</li>
</ul>

<b>2. When you are sure that you</br> have a sure application?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q2" value="when you play">when you play</li>
  <li><input type="radio" name="q2" value="when you read something">when you read something</li>
  <li><input type="radio" name="q2" value="when you are attacked and the app is functional">when you are attacked and the app</br> is functional</li>
</ul>
<b>3. How you secure your internet?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q3" value="installing a web plugin">instaling a web plugin</li>
  <li><input type="radio" name="q3" value="instlaing a antivirus">instlaing a antivirus</li>
  <li><input type="radio" name="q3" value="cheking your firewall">checking your firewall</li>
</ul>
<b>4. What does a "Adversar" to attack your app?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q4" value="finding issue in your app">finding issue in your app</li>
  <li><input type="radio" name="q4" value="checking your browser">checking your browser</li>
  <li><input type="radio" name="q4" value="playing with yoru app">playing with your app</li>
</ul>


<div id="correct_ans">

Correct answers:<br>
<textarea class="bgclr" name="solutions" wrap="virtual" rows="4" cols="30" disabled></textarea>


<input type="button" value="Get Score" onClick="getScore(this.form)">
<input type="reset" value="Clear answers">
<p> Score: <strong><input class="bgclr" type="text" size="5" name="percentage" disabled></strong><br><br>
Total Win Points:<br>
<input type="text" value="" name="Points" onClick="getScore(this.form)">
</p>
</div>






</form>


</div>



