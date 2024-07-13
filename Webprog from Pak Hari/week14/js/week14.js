$("#btnHide").click(function() {
	$("h2").slideUp();
});

$("#btnShow").click(function() {
	$("h2").fadeIn("slow");
});

$("#btnToggle").click(function() {
	$("h2").toggle();
});

$("#btnFade").click(function() {
	$("h2").fadeTo("slow", 0.5);
});

$("#btnHTML").click(function() {
	$("h2").html("Test Jquery...");
});

$("#btnAppend").click(function() {
	$("h2").append("Test Jquery...");
});

$("#btnAfter").click(function() {
	$("h2").after("<p>Test Jquery...</p>");
});

$("#btnBefore").click(function() {
	$("h2").before("<p>Test Jquery...</p>");
});

$("#btnReset").click(function() {
	$("h2").html("");
});

$("#btnRemove").click(function() {
	$("h2").remove();
});

$("#btnGetHTML").click(function() {
	var usehtml = $("h2").html();
	var usetext = $("h2").text();
	
	alert(usehtml);
	alert(usetext);
});