<?php // opening tag
# single line comment
/* multiple line comment */
echo "Hello World";
// data types
$age = 15; //integer
$height = 12.5; //float
$first_name = "Clara"; //string
$register = false; //boolean
$school = null; // null

echo "<br>";
echo var_dump($age)."<br>";
echo var_dump($height)."<br>";
echo var_dump($first_name)."<br>";
echo var_dump($register)."<br>";
echo var_dump($school)."<br>";

//arrays - array()
//indexed arrays
$students = array('John', 'Jane', 'Mark');
echo "<br>Third student is $students[2]";
// associative arrays
$student_ages = array(
	'John'=> 12,
	'Jane'=> 14,
	'Mark'=> 16
	);
echo $student_ages['Jane'];
//multidimensional arrays
$years_months = array(
	array(2020, 2021, 2022),
	array("Jan", "Feb", "Mar")
);
echo "<br>";
echo $years_months[1][1];
// loop through indexed arrays - foreach
foreach ($students as $student) {
	echo "Student name $student <br>";
}
// loop through associative array
foreach($student_ages as $student => $age){
	echo "$student is $age <br>";
}
// for loop
for ($i=1; $i < 3 ; $i++) { echo "<h1> This is a heading</h1>";
	echo "<button> hello</button>";
	// code...
}
// while loop
$x = 1;
while ($x < 4) {
	echo "<h3>Chapter $x</h3>";
	$x++;
}
//conditional statements
//if else
$y = 20;
if ($y < 15) {
	echo "Too low";
} elseif ($y == 15) {
	echo "Exactly";
} else{
	echo "Too high";
}
// function
function first_function(){
	echo "<h6>First Function</h6>";
}
first_function();

function get_product($y, $x){
	return $y * $x;
}
echo get_product(10, 13);
// in built functions - 
//isset() - it has been declared and it is not null
$a = null;
if (isset($a)) {
	echo "Variable has been set";
} else{
	echo "Variable not set";
}



//closing tag ?>