var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };

var addScore = function()
{
	if($("score").value >0 && $("score").value<=100 && $("name").value != "")
	{
		names.push($("name").value);
		scores.push($("score").value);

		$("name").value="";
		$("score").value="";
	}
	else
	{
		alert("You Must Enter a Name and Valid Score");
	}

	$("name").focus();
}

var displayResults = function()
{
	var max=0;
	var sum=0;
	var index=0;
	var average=0;
	var length = scores.length;

	for(var i=0; i<length;i++)
	{
		sum = sum + Number(scores[i]);
		if(scores[i]>max)
		{
			max=scores[i];
			index=i;
		}
	}

	average = sum / length;

	$("results").innerHTML = "<h2>Results</h2>";
	$("results").innerHTML = "<p>Average score: " + average + "</p>";
	$("results").innerHTML = "</br><p>High score is: "  + names[index] + " with a score of " + max + "</p>";
}


var displayScores = function()
{
	var length = scores.length;

	$("scores_table").innerHTML = "<h2>Scores</h2>";
	$("scores_table").innerHTML = "<tr><th>Name</th><th>Score</th></tr>";

	for(var i=0;i<length;i++)
	{
		$("scores_table").innerHTML += "<tr><td>" + names[i] + "</td><td>" + scores[i] + "</td></tr>";
 	}	
}


window.onload = function () {
	$("name").focus();
	$("add").onclick = addScore;
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
};


