
// ---------- script properties ----------


var results_location = "results.php";


// ---------- end of script properties ----------


function search_form(jse_Form) {
	if (jse_Form.d.value.length > 0) {
		document.cookie = "d=" + escape(jse_Form.d.value);
		window.location = results_location;
	}
}
