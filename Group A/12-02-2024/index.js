console.log("Hello External JS file");

// single line comment
/* multiple line
comment */

// declaring variables
let myName;
let age = 13;
let school = 'Strathmore';
let course = true;
let unit = null;
let height = 15.4;

// check data types
console.log(typeof myName);
console.log(typeof age);

//arrays
agesOfStudents = [16, 17, 15,18]
console.log("Age of first student is " 
	+ agesOfStudents[0] );

//objects
let student = {
	studentName: 'Clara',
	age: 20,
	course: 'Web Dev',
	studentDetails: function(){
		return this.studentName 
		+ " is " + this.age 
		+ " taking " + this.course;
	}
};
// access object properties
console.log(student.course);

//functions
function firstFunction(){
	let z = "Hello"; //local scope
	console.log("Hello function");
}
//console.log(z);

firstFunction();

function secondFunction(num1, num2){
	return num1 * num2;
}

let x = 20;
//let x = 'hello';

const y = 15;
//y = 20;

//conditional statements: if, else
if (y > 20) {
	console.log("Too big");
} else if (y < 20) {
	console.log("Too small");
} else {
	console.log("Perfect");
}
// for loop
for(let i=1; i<7; i++){
	console.log("I is " + i);

}

// block scope
{
	let hello = 40;
}

//console.log(hello);