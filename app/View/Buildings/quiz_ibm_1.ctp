
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
answers[0] = "Pre Hypertext Procesor";
answers[1] = "Linux and MySql PhP ";
answers[2] = "$_GET[]";
answers[3] = "echo";

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

<center><h1>IBM | Floor 1</h1></center>
<div id="concepts" style="width:676px;height:498px;;line-height:3em;overflow:scroll;">
<form name="quiz">


<b>1. What is the full form of PHP?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q1" value="Pre Hypertext Procesor">Pre Hypertext Procesor</li>
  <li><input type="radio" name="q1" value="Hypertext PreProcesor">Hypertext PreProcesor</li>
  <li><input type="radio" name="q1" value="Post Hypertext Procesor">Post Hypertext Procesor</li>
</ul>

<b>2. What is the exapansion of LAMP?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q2" value="Linux and MySql PhP ">Linux and MySql PhP </li>
  <li><input type="radio" name="q2" value="Linux Apache MySql PhP ">Linux Apache Mysql PhP</li>
  <li><input type="radio" name="q2" value="Linux Android Mysql PhP">Linux Android Mysql PhP</li>
</ul>
<b>3. How to make a GET form?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q3" value="$_GET[]">$_GET[]</li>
  <li><input type="radio" name="q3" value="$_POST[]">$_POST[]</li>
  <li><input type="radio" name="q3" value="$-get{}">$-get{}</li>
</ul>
<b>4. What function is use to make a print?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q4" value="printf">printf</li>
  <li><input type="radio" name="q4" value="cout">cout</li>
  <li><input type="radio" name="q4" value="echo">echo</li>
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



