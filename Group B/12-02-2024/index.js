// single line comment
/* multiple line
comment */
console.log("External");

// declaring variables
let age; // undefined
let firstName = 'Clara'; //string
let register = false; //boolean
let school = null; // null
let height = 15.2; // number

// check data types
console.log(typeof age);
console.log(typeof firstName);

//arrays
let heightOfStudents = [23.2, 14,12];
console.log(typeof heightOfStudents);

console.log(heightOfStudents[1]);

//objects
let student = {
	firstName: 'John',
	age: 22,
	course: 'DBIT',
	studentDetails: function(){
		console.log(this.firstName 
			+ " is " + this.age 
			+ " taking " 
			+ this.course);
	}
};
console.log(
	student.firstName + 
	" is " + student.age);

//functions
function totalCost(val1, val2){
	// console.log('Hello function');
	return val1 + val2;
}

let x = 10;
//let x = 'student';
console.log(x);

const y = 25;
//y = 30;
//conditional statements
if (y > 30) {
	console.log("Too high");
} else if (y < 30) {
	console.log("Too low");
} else{
	console.log("Perfect");
}
// for loop
for(let i=0; i<5; i++){
	console.log("I is " + i);
}



