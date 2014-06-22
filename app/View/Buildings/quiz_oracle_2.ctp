
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
answers[0] = "INSERT INTO";
answers[1] = "UNGRANT";
answers[2] = "Master to slave replication";
answers[3] = "SELECT UNIQUE";
answers[4] = "SELECT * FROM Persons";

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

<center><h1>Oracle | Floor 2</h1></center>
<div id="concepts" style="width:676px;height:498px;;line-height:3em;overflow:scroll;">
<form name="quiz">


<b>1. Which SQL statement is used to insert</br> new data in a database?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q1" value="INSERT NEW">INSERT NEW</li>
  <li><input type="radio" name="q1" value="INSERT INTO">INSERT INTO</li>
  <li><input type="radio" name="q1" value="ADD NEW">ADD NEW</li>
</ul>

<b>2. If you want to undo a GRANT,</br> you should use?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q2" value="UNDO">UNDO</li>
  <li><input type="radio" name="q2" value="UNGRANT">UNGRANT</li>
  <li><input type="radio" name="q2" value="REVOKE">REVOKE</li>
</ul>
<b>3. What kind of replication is supported</br> by the MySQL server?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q3" value="Multiple-master replication">Multiple-master replication</li>
  <li><input type="radio" name="q3" value="Master to slave replication">Master to slave replication</li>
  <li><input type="radio" name="q3" value="MySQL doesn't support replication">MySQL doesn't support replication</li>
</ul>
<b>4. Which SQL statement is used to</br> return only different values?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q4" value="SELECT UNIQUE">SELECT UNIQUE</li>
  <li><input type="radio" name="q4" value="SELECT DIFFERENT">SELECT DIFFERENT</li>
  <li><input type="radio" name="q4" value="SELECT DISTINCT">SELECT DISTINCT</li>
</ul>

<b>5. With SQL, how do you select all the</br> columns from a table named "Persons"?</b>
<ul style="margin-top: 1pt">
  <li><input type="radio" name="q5" value="SELECT * FROM Persons">SELECT * FROM Persons</li>
  <li><input type="radio" name="q5" value="SELECT Persons">SELECT Persons</li>
  <li><input type="radio" name="q5" value="SELECT [all] FROM Persons">SELECT [all] FROM Persons</li>
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


