

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
answers[0] = "is a web stateless protocol";
answers[1] = "80";
answers[2] = "Web comunication";
answers[3] = "Common Gateway Interface";

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

<center><h1>IBM | Floor 2</h1></center>
<div id="concepts" style="width:676px;height:498px;;line-height:3em;overflow:scroll;">
<form name="quiz">


<b>1. What means HTTP?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q1" value="is a web stateless protocol">is a web stateless protocol</li>
  <li><input type="radio" name="q1" value="is a way to transger file">is a way to transger file</li>
  <li><input type="radio" name="q1" value="is a application who use internet">is a application who use internet70</li>
</ul>

<b>2. What port use HTTP?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q2" value="50">50</li>
  <li><input type="radio" name="q2" value="79">79</li>
  <li><input type="radio" name="q2" value="80">80</li>
</ul>
<b>3. Where you use http protocol ?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q3" value="Web comunication">Web comunication</li>
  <li><input type="radio" name="q3" value="Web transfer protocol">Web transfer protocol</li>
  <li><input type="radio" name="q3" value="Mail tranfer">Mail tranfer</li>
</ul>
<b>4. What does CGI stand for?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q4" value="Cascading Gate Interaction">Cascading Gate Interaction</li>
  <li><input type="radio" name="q4" value="Common GIF Interface">Common GIF Interface</li>
  <li><input type="radio" name="q4" value="Common Gateway Interface">Common Gateway Interface</li>
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



