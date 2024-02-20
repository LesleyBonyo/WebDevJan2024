//DOM
/* access HTML elements
	getElementById()
	getElementsByTagName()
	getElementsByClassName()
*/
let firstHeading = document.getElementById('myId');

console.log(firstHeading);

let paragraphs = document.getElementsByTagName('p');
console.log(paragraphs[1]);

let myClass = document.getElementsByClassName('myClass');
console.log(myClass[0]);

//properties
// innerHTML
paragraphs[0].innerHTML = "I have changed";
// change HTML attribute
let myLink = document.getElementById('myLink');
myLink.href = "https://strathmore.edu/";
//change/add CSS Style
firstHeading.style.color = "blue";
firstHeading.style.textAlign = "center";
firstHeading.style.textDecoration = "overline";
//value
function getProduct(){
	let num1 = document.getElementById('num1');
	let num2 = document.getElementById('num2');
	let product = num1.value * num2.value;
	//console.log(product);
	//document.getElementById('result').innerHTML = product;
	alert("The product is: " + product);
	return false;
}

//document.getElementById('submit').onclick = getProduct();
function clickMe(){
	let myDiv = 
	document.getElementById('output');
	myDiv.innerHTML += "I have been clicked<br>";
}
let myButton = 
document.getElementById('myButton');
myButton.addEventListener('click',clickMe);
//myButton.addEventListener('mouseover',)


