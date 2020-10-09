<!DOCTYPE HTML>
<html>
<head>
<title>Introduction to PHP</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php
echo "<h1>Welcome to PHP</h1>";

/*
1.
a) View the page in a browser. Make sure you can see the welcome message. -->working
b) Modify the message so that it appears as a <h1> heading. -->done
*/


/*
2. Uncomment the following three PHP variables.
a) Using these variables and a PHP echo statement output the message 'Hi Fred. Your favourite colour is red. Your favourite website is http://www.hud.ac.uk.'
b) Use HTML <em> tags to italicise the word Fred.
c) Use an HTML anchor element to make the text http://www.hud.ac.uk into an actual hyperlink that links to the University homepage. Again, this should all be done using a PHP echo statement.
*/

$name = "Fred";
$colour = "red";
$url="http://www.hud.ac.uk";

//task 2a
//echo 'Hi ' .$name. '.Your favourite colour is ' .$colour. '. Your favourite website is ' .$url;

//task 2b
//echo "Hi <em>{$name}</em>. Your favourite colour is {$colour}. Your favourite website is {$url} ";

//task 2c
//echo "Hi {$name}. Your favourite colour is {$colour}. Your favourite website is <a href ={$url}> {$url} </a> ";
/*
3. Uncomment following two PHP variables.
a) Create a third variable, name it $total. $total should be assigned a value that is the sum of $num1 and $num2. Using these variables and a PHP echo, output the value of $total e.g. '10 + 20 = 30'
b) Create another variable, call it $average. $average should be assigned a value that is the mean average of $num1 and $num2. Again, use a PHP echo statement to output the value of $average.
*/

// $num1=10;
// $num2=20;

//task 3a 
//$total= $num1 + $num2;
//echo "{$num1} + {$num2} = {$total}";

//task 3b method 1
// $average = ($num1+$num2)/2;
// echo "The average of {$num1} and {$num2} is {$average}";

//task 3b method 2
// $average = ($total)/2;
// echo "The average of {$num1} and {$num2} is {$average}";

/*
4. Uncomment following three PHP variables.
The variables $assign1, $assign2 and $assign3 store the marks out of 100 for a student for three different assignments.
 Assignment 1 has a weighting of 40%, Assignment 2 has a weighting of 25% and Assignment 3 has a weighting of 35%.
 Create another PHP variable called $overall. Using PHP mathematical operators, calculate an overall mark for the student
 and assign this value to the variable $overall. Use an echo statement to print this mark into the HTML page.
*/

// $assign1 = 56;
// $assign2 = 78;
// $assign3 = 68;
// $overall = 0.4*$assign1 + 0.25*$assign2 + 0.35*$assign3;
// echo "Student overall mark is {$overall} ";


/*
5.
a) In order to pass a module students must get an overall mark that is greater than or equal to 40. 
Write a PHP if statement that will test if $overall is greater than or equal to 40. 
If it is, use an echo statement to output "passed". If it isn't use an echo statement to output "failed"
b) Write another if statement. This time it should test the value of $overall and output if the student has an A, B, C, D etc.
*/

//task 5a
// if ($overall>=40){
//     echo "passed";
// } else {
//     echo "failed";
// }

//task 5b

// if ($overall>=70) {
//     echo "You got an A grade";
// } else if ($overall>59 && $overall<70) {
//     echo "You got a B grade";
// } else if ($overall>49 && $overall<60) {
//     echo "You got a C grade";
// } else if ($overall>39 && $overall<50) {
//     echo "You got a D grade";
// } else if ($overall>29 && $overall<40) {
//     echo "You got an E grade";
// } else if ($overall<30) {
//     echo "Sorry, you've failed the assignment";
// }

/*
6.
The Kaboom Gas company charge their customers for gas as follows:
Units of Gas Used Cost(£)
Units of Gas:0 to 500 Cost:£10
Units of Gas:501 to 1000 Cost:£10 + 5p for each unit over 500
Units of Gas:Over 1000 Cost:£35 + 3p for each unit over 1000

The following PHP code assigns a random number value to the variable $units. 
Uncomment the code and write some additional PHP code that will calculate and output the cost of a gas bill based on 
the value of $units.
*/

$units=rand(0,2000);
echo "<p>Units has a value of {$units}.</p>";
$bill;

if($units<=500){
    echo "You used {$units} and your bill cost is £10";
} else if ($units>500 && $units<=1000){
    $bill= ($units-500)*0.05 + 10;
    echo "You used {$units} and your bill cost is £{$bill}";
} else if ($units>1000 && $units<=2000){
    $bill= ($units-1000)*0.03 + 35;
    echo "You used {$units} and your bill cost is £{$bill}";
}



?>
</body>
</html>
