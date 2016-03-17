<!DOCTYPE html>
<script>
document.onkeydown = function(event) {
	var key_press = String.fromCharCode(event.keyCode);
	var key_code = event.keyCode;
	document.getElementById('kp').innerHTML = key_press;
    document.getElementById('kc').innerHTML = key_code;
	var status = document.getElementById('status');
	status.innerHTML = "DOWN Event Fired For : "+key_press;
	if(key_press == "W"){
		alert("Put script to run specific for 'W' key here");
	} else if(key_press == "A") {
		alert("Put script to run specific for 'A' key here");
	} else if(key_press == "S") {
		alert("Put script to run specific for 'S' key here");
	} else if(key_press == "D") {
		alert("Put script to run specific for 'D' key here");
	}
}
document.onkeyup = function(event){
    var key_press = String.fromCharCode(event.keyCode);
	var status = document.getElementById('status');
	status.innerHTML = "UP Event Fired For : "+key_press;
}
</script>
<h2>Javascript Capture Keyboard Input Example</h2>
<h3>onkeydown - onkeyup</h3>
Key Pressed : <span id="kp"></span>
<br />
Key Code : <span id="kc"></span>
<p id="status">Keyboard Event Status</p>