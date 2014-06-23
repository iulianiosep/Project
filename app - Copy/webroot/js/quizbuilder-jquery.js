$( document ).ready(function() {
	var   counter = 0
		, arrayLength = 0
		, punctaj = 0
		,corect = 0;

		var clocktimer;
	
	var vector = [];
	function loadQuestions (count) {
	$.getJSON( "questions.json", function( data ) {
		// console.log(data);
	})
	.done(function(data){
		var   question = ''
			, answer = '';
		$.each( data, function( key, val ) {
			if (key === counter) {	
			question += '<h3 class="cardTitle">Question</h3>' + '<p>' + val.Q + '</p>';
			answer += '<h3 class="cardTitle">Answers</h3>' +  '<p>' + val.A + '</p>';
			//console.log(key, val);
			};
		});
		$('#questions').html(question);
		$('#answers').html(answer);
		arrayLength = data.length;
	});
	}
	loadQuestions(counter);
	$('#next').click(function(){
		loadQuestions(counter);
		
		$('#flashCard').removeClass('flipped');
		
		if (counter < arrayLength-1)
			counter ++;
		else
			counter=0;
		
		var playeranswer = document.getElementById("your").value;
		//array with answers 
		vector.push(playeranswer);

		$('#your').val("");
		
		//console.log(counter + ' ' + arrayLength);
	});
	$('#answer').click(function () {
		$('#flashCard').toggleClass('flipped');
		// console.log("clicked");
	});
	$('#finish').click(function(){


		 var mesaj;
    if (confirm("You want to finish this test ? If you want to finish press OK!") == true) {
        mesaj = "You pressed OK!";
        //verification and update 
        var xmlHTTP = new XMLHttpRequest();
    try
    {
    xmlHTTP.open("GET", "raspunsuri.xml", false);
    xmlHTTP.send(null);
    }
    catch (e) {
        window.alert("Unable to load the requested file.");
        return;
    }

    //var x = xmlHTTP.responseXML.getElementsByTagName('answer')[0].firstChild.nodeValue;
    //alert(x);

        for (var i = 0; i < vector.length; i++) {
        var x = xmlHTTP.responseXML.getElementsByTagName('answer')[i].firstChild.nodeValue;
        if (vector[i] == x){
        		corect++;
        		
        }
        vector = [];
        
							}
      
    } else {
    	//do nothing special
        mesaj = "You pressed Cancel!";
    }
    punctaj = corect * 10;
    	alert("You have answer corectly at "+corect+" questions. You win "+punctaj+" points !");
				
	});
});

//Reading material http://stackoverflow.com/questions/2067472/what-is-jsonp-all-about
//var dataObj = {}; dataObj.highScore = 100000; dataObj.playerName = "Some Player"; localStorage.setItem("myKey", JSON.stringify(dataObj));