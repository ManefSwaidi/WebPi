
function verifpass() {
var pass=	document.getElementById('pass').value;
if(pass.length<8){
	document.getElementById('error').innerText="Password must be 8 characters or more!";
	document.getElementById('btnsub').disabled=true;
}
else if (pass.length > 20){
	document.getElementById('error').innerText="Password must be 20 characters or less!";
	document.getElementById('btnsub').disabled=true;
} else {
	document.getElementById('error').innerText="";
	document.getElementById('btnsub').disabled=false;
}
}