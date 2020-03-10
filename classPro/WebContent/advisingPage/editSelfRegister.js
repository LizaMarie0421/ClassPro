/**
 * 
 */
function addClass() {
	var container = document.getElementById("container");
	var input = document.createElement("input");


	container.appendChild(document.createTextNode("Member"));
	input.type = "text";
	container.appendChild(input);
	container.appendChild(document.createElement("br"));
	
	document.getElementById("className").innerHTML='this is working in out of script';

}
$("#buyerForm").clone().appendTo("#wrapper");