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
	console.log("Hello function");
}
firstFunction();

function secondFunction(num1, num2){
	return num1 * num2;
}

