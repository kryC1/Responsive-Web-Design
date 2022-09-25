$(document).ready(function() {
	$( "#birthday" ).datepicker();

	$( "#languages" ).autocomplete({
		source: languages
	});

});

var languages = [
"javascript",
"Java",
"C++",
"C",
"Pyhton"
];