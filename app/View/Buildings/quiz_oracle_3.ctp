

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
answers[0] = "Simple Object Access Protocol";
answers[1] = "to get information with web service";
answers[2] = "by using some api to get information";
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

<center><h1>Oracle | Floor 3</h1></center>
<div id="concepts" style="width:676px;height:498px;;line-height:3em;overflow:scroll;">
<form name="quiz">


<b>1. What does mean SOAP?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q1" value="Simple Object Access Protocol">Simple Object Access Protocol</li>
  <li><input type="radio" name="q1" value="Simple Object Acceptable Protocol">Simple Object Acceptable Protocol</li>
  <li><input type="radio" name="q1" value="Simple Online Access Protocol">Simple Online Access Protocol</li>
</ul>

<b>2. Where you use SOAP?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q2" value="to get information with web service">to get information with web service</li>
  <li><input type="radio" name="q2" value="to spend you free time">to spend you free time</li>
  <li><input type="radio" name="q2" value="to listen music">to listen music</li>
</ul>
<b>3. How does Soap wroks?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q3" value="by using some api to get information">by using some api to get information</li>
  <li><input type="radio" name="q3" value="by your web ports">by your web ports</li>
  <li><input type="radio" name="q3" value="by your own route">by your own route</li>
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



