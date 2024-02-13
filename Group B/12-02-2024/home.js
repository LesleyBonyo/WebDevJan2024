//DOM

//access HTML Elements
let heading = 
	document.getElementById('myId');
console.log(heading);

let paragraphs = 
document.getElementsByTagName('p');
console.log(paragraphs[1]);

let myClass =
document.getElementsByClassName('myClass');

//innerHTML
paragraphs[0].innerHTML = 
		"I have been changed";

// change html attributes
let myLink = 
document.getElementById('myLink');
myLink.href = "https://strathmore.edu/";
// style elements
heading.style.color = "red";
heading.style.textDecoration = "underline";
// value property

function getProduct(){
	let num1 = 
	document.getElementById('num1');
	let num2 = 
	document.getElementById('num2');
	//console.log(num1.value);
	let product = num1.value * num2.value;
	console.log(product);
	return false;
}