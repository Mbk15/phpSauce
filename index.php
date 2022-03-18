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
  echo 'x is neither a multiple of 7 nor a multiple of 3.'
}

?>