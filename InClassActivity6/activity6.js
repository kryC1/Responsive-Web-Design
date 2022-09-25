var timeout = 500;
var level = 1;
var cnt = 0;

var $ = function (id) { return document.getElementById(id); };



window.onload = function () {
	$("myButton").onmouseover = myHover;
	$("start").onclick = myStart;
	$("myButton").onclick = myCount;
};

function changePos() {
	document.getElementById("myButton").style.marginLeft = Math.random()*1000+"px";
	document.getElementById("myButton").style.marginTop = Math.random()*700+"px";
}

function myCount() {
	cnt++;

	if (cnt == 3) {
		alert("You won!\nNext Level: " + (++level));
		cnt = 0;
		timeout = timeout - 100;
	}

	if (timeout < 0) {
		if(confirm("Congratulations! You finished the game.\nClick OK to start again.")){
			document.getElementById("start").style.visibility = "visible";
			document.getElementById("myButton").style.visibility = "hidden";
		}
		timeout = 500;
		level = 1;
		cnt = 0;
	}

	document.getElementById("score").innerHTML = "<h1>Score: " + cnt + "<h1>"
}

function myStart() {
	document.getElementById("start").style.visibility = "hidden";
	document.getElementById("myButton").style.visibility = "visible";
}

function myHover() {
	setTimeout(changePos, timeout);
}