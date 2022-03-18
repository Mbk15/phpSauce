<?php 
//Hello world 
echo 'Hello World !' ; // Prints the String to the browser
echo 'Let learn Php';
echo 7*3 ; // performs the arithmetic operations and prints the result to the browser
?>
<br>

<?php
/*Declaring variable in php*/

$fruit = 'Apple';  // declare variable in PhP with the inclusion of dollar sign $
    
echo $fruit;
?>

<br>
<?php
/*Updating variable in php*/

//declare the variables
$x = 5;
$y = 2;
$a = 8;
$b = 4;
?>
<br>
<?php
//update and print them out
$x = 10 + $x;
    
echo $x;
?>
<br>
<?php
//for y variable
$y = 5 * $y;
    
    echo $y;
?>
<br>
<?php
// for a
    $a =  ++$a;
    
    echo $a;
?>
<br>
<?php
    // for b
    $b = --$b ;
    
    echo $b;

?>
<br>
<?php

/* You can concatenate strings using a period . This is called the dot operator in PHP. There are 3 kinds of string concatenation:
(1) a string with a string, (2) a string variable with a string variable,
and (3) a string with a string variable. */

$lesson = 'PHP' ;
$lesson = "I love ".$lesson  ;  //  string and variable
echo $lesson;

$game = " alsphat" ;
$league = " LigaBBvA";     

echo "Spanish Loves".$game.$league; //variable and variable 

?>
<br>
<?php
/* String Concatenation(2)
You can omit the concatenation of a variable and a string using .= */
$stack = "Frontend";
$stack .= " Developer";

echo $stack;
?>
<br>
<?php

/* Within a string that is in double quotes ", you can insert a variable by putting the variable name in braces { }. This is called variable substitution. If you use single quotes ' instead, the variables won't be substituted because it will be interpreted as a string even if it's in braces. */

$name = 'Mbk the Code Ninja';
// Print "Hello, ____" using the $name variable. 
echo "Hello , {$name}";



?>

<br>

<?php

/* if
The if Statement
Using an if statement makes it possible to create a conditional branch. If you put a condition in () after if, the code between the braces { } will be executed only when the condition is true. The images below show how if statements are written. */

    $x = 99 * 99;
    $y = 77 * 77;

    // Write the if statements below
    
    if ($x > 9800) {
      echo 'The $x variable is greater than 9800.';
    }
    
    if ($y > 6000) {
      echo 'The $y variable is greater than 6000.';
    }
    

?>
<br>
<?php
/* else
If you use else in combination with an if statement, you can add code for when the condition is false. If the matching if statement is false, the code in else is executed. */

// Declare your $age variable below
$age = 23;
    
if($age>=30){
  echo 'You are 30 years old or more.';
}else{
  echo 'You are under 30 years old.';
}

?>

<?php 
/*&& and ||
Combining Multiple Conditional Statements
And && and or || are known as logical operators. They are used to combine multiple conditions. The result of statements with && becomes true only when both left and right expressions are true. The result of statements with || become true when either or both of the left and right expressions are true. */

$x = 1071;
    
// Write the if-elseif-else statement below
if($x % 3 == 0 && $x % 7 ==0){
  echo 'x is a multiple of 3 and a multiple of 7.';
}elseif($x %3 ==0){
  echo 'x is a multiple of 3 but not a multiple of 7.';
}elseif($x %7 ==0){
  echo 'x is a multiple of 7 but not a multiple of 3.';
}else{
  echo 'x is neither a multiple of 7 nor a multiple of 3.';
}

?>
<br>
<?php

/* switch Statements
The switch statement is another way to control the flow of your code to make it easier to read and understand, especially when conditional branching gets complicated. switch statements usually have many cases. The first case that matches the condition value will get executed. When there is no match, the default case is executed. */
// Assign a number to $num
$num = 50;
// Assign the remainder of $num divided by 3
$remainder = $num % 3;

switch ($remainder) {
  case 0:
    echo 'Very lucky!!';
    break;
    
  case 1:
    echo 'Lucky!';
    break;
  
  case 2:
    echo 'A little lucky.';
    break;
    
  default:
    echo 'Unlucky...';
    break;
}
?>

<br>

<?php
/* Arrays
Creating Arrays
The basic syntax for declaring an array is as follows: $arrayName = array(value1, value2, …);. An index number is designated to each array element in order from 0 to the last element. To retrieve data from an array, we use these index numbers like so: $arrayName[indexNumber]. */
  // Create a color array 
  $colors = array ('Red', 'Blue', 'Yellow');
    
  echo $colors[0];
  
  $colors[] = 'White';
  
  echo $colors[3];
?>

<br>

<?php
/*Associative Arrays
Creating Associative Arrays
Associative arrays allow us to manage a collection of data like normal arrays. The difference is that instead of using index numbers to manage individual elements, you can specify values as keys. Keys can come in the form of strings. You can set the key for a value with => as follows: arrayName = array('keyName' => 'value1', ...);. */
$user = array('name' => 'mbk' , 'age' => 45, 'jobTitle' => 'Cruiser');

echo $user['name'];

$user['level'] = 'Beginner';

echo $user['level'];
?>