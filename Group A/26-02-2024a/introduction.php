<?php //opening php tag
# single line comment
/* Multiple line 
comment */
echo "Hello World";
$age = 17; // integer
$width = 14.2; //float
$first_name = "John"; //string
$present = false; //boolean
$unit = null; //null

echo "<br>";
echo var_dump($age)."<br>";
echo var_dump($width)."<br>";
echo var_dump($first_name)."<br>";
echo var_dump($present)."<br>";
echo var_dump($unit)."<br>";

//arrays - array()
//indexed array
$student_names = array('Joan', 'Abel', 'Clara');
echo "Second student is $student_names[1]";
// associative arrays
$student_heights = array(
	'Joan'=> 12.5,
	'Abel'=> 10.2,
	'Clara'=> 5.7
);
echo $student_heights['Clara'];
//multidimensional arrays
$months_days = array(
	array('Jan', 'Feb', 'Mar'),
	array(1,2,3)
);
echo $months_days[0][2];

// loop through indexed arrays
//foreach
foreach($student_names as $name){
	echo "<div>Student name is $name </div>";
}
// loop through associative arrays
foreach($student_heights as $students => $height){
	echo "<div>$students is $height cm</div>";
}
//for loop
for ($i=1; $i < 3 ; $i++) { 
	echo "<h1>Chapter $i</h1>";
	echo "<button>Hello $i </button>";
}
$x = 1;
while ($x < 4) {
	echo "<div>Hello $x</div>";
	$x++;
}
// conditional statements - if else
$y = 22;
if ($y < 18) {
	echo "Too young";
} elseif ($y == 18) {
	echo "Perfect";
} else {
	echo "Too old";
}
// functions
function first_function(){
	echo "<h3> Hello Function </h3>";
}
first_function();

function get_product($y, $z){
	return $y * $z;
}
echo get_product(14,5);
// in built functions
//isset() - checks if a variable has been declared and is not null
$a = null;
if (isset($a)) {
	echo "the variable is set";
} else {
	echo "the variable is not set";
}




//closing tag?>