var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };



window.onload = function () {
	$("add").onclick = addScore;
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
};

function displayResults()
{
	var average = 0;
	var high = 0;
	var hPos = 0;

	for(var i=0;i<scores.length;i++)
	{
		average = average + scores[i];

		if(scores[i] > high) {
			high = scores[i];
			hPos = i;
		}
	}

	average = average / scores.length;

	document.getElementById("results").innerHTML="<h2> Results </h2><br /> Average score = "+average + "<br \> High score = "+names[hPos]+ " with a score of " + +high+"<br \>";
}

function displayScores() {
	
	var result = "";

	for(var i = 0; i < scores.length; i++) {
		result = result + names[i] + "		" + scores[i] + "<br>";
	}

	document.getElementById("scores_table").innerHTML="<h2> Scores </h2><br /> " + result;

}

function addScore() {

	name = document.getElementById("name").value;
	score = document.getElementById("score").value;

	scoreInt = parseInt(score);

	if (document.getElementById("name").value == "" || document.getElementById("score").value == "") {
		alert("You must enter a name and a valid score");
	}
	else if (scoreInt < 0 || scoreInt > 100) {
		alert("You must enter a name and a valid score");
	}
	else {
		names[names.length] = name;
		scores[scores.length] = scoreInt;
	}
	
}
