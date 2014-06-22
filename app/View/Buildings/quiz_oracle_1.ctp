
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
var numQues = 5;

// Insert number of choices in each question
var numChoi = 3;

// Insert number of questions displayed in answer area
var answers = new Array(5);

// Insert answers to questions
answers[0] = "Javascript is a dynamic,</br> function based scripting language.";
answers[1] = "Asynchronous JavaScript and XML.";
answers[2] = "Atlas";
answers[3] = "ASP.NET AJAX.";
answers[4] = "in mixt-side.";

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

<center><h1>Oracle | Floor 1</h1></center>
<div id="concepts" style="width:676px;height:498px;;line-height:3em;overflow:scroll;">
<form name="quiz">


<b>1. What is Javascript?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q1" value="Javascript is a dynamic,</br> function based scripting language.">Javascript is a dynamic,</br> function based scripting language.</li>
  <li><input type="radio" name="q1" value="avascript is a machine.">Javascript is a machine.</li>
  <li><input type="radio" name="q1" value="Javascript is a coockie."> Javascript is a coockie.</li>
  <li><input type="radio" name="q1" value="Javascript is a toy."> Javascript is a toy.</li>
</ul>

<b>2. What combination of technologies</br> gives AJAX its name?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q2" value="ASP and XAML.">ASP and XAML.</li>
  <li><input type="radio" name="q2" value="Asynchronous JavaScript and XML.">Asynchronous JavaScript and XML.</li>
  <li><input type="radio" name="q2" value="Autonomic Computing and DHTML.">Autonomic Computing and DHTML.</li>
  <li><input type="radio" name="q2" value="Atlas and XML."> Atlas and XML.</li>
</ul>
<b>3. Which one of these legendary Greek</br> mythical figures or places is the code name</br> for Microsoft's version of AJAX ?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q3" value="Oracle.">Oracle.</li>
  <li><input type="radio" name="q3" value="Atlas">Atlas</li>
  <li><input type="radio" name="q3" value="Hercules">Hercules</li>
  <li><input type="radio" name="q3" value="Delphi">Delphi</li>
</ul>
<b>4. Where is the control in AJAX?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q4" value="in client-side">in client-side</li>
  <li><input type="radio" name="q4" value="you are not in control with AJAX.">you are not in control with AJAX.</li>
  <li><input type="radio" name="q4" value="in server-side.">in server-side.</li>
  <li><input type="radio" name="q4" value="in mixt-side.">in mixt-side.</li>
</ul>
<b>5. What has Microsoft renamed its free Web client framework?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q5" value="MSN AJAX.">MSN AJAX.</li>
  <li><input type="radio" name="q5" value="Live ASP">Live ASP</li>
  <li><input type="radio" name="q5" value="ASP.NET AJAX.">ASP.NET AJAX.</li>
  <li><input type="radio" name="q5" value=".NET Designer">.NET Designer</li>
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



