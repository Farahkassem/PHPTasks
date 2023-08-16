//problem1
<?php

function checkSumor50($num1 , $num2){
    return ($num1 === 50 || $num2 === 50 || $num1 + num2 === 50);
    
}
?>
<?php
function checkPositiveNegative($num1, $num2) {
    return (($num1 < 0 && $num2 > 0) || ($num1 > 0 && $num2 < 0));
}

$result = checkPositiveNegative(-5, 10); 
echo $result ? 'True' : 'False';

?>

<?php

function checkMultiples($num) {
    return ($num > 0 && ($num % 5 === 0 || $num % 8 === 0));
}

$result = checkMultiples(40); 
echo $result ? 'True' : 'False';
?>

<?php
function add($num1, $num2) {
    return $num1 + $num2;
}

function subtract($num1, $num2) {
    return $num1 - $num2;
}

function multiply($num1, $num2) {
    return $num1 * $num2;
}

function divide($num1, $num2) {
    if ($num2 != 0) {
        return $num1 / $num2;
    } else {
        return "Cannot divide by zero";
    }
}

$operator = '+'; 
$num1 = 10;
$num2 = 5;

switch ($operator) {
    case '+':
        $result = add($num1, $num2);
        break;
    case '-':
        $result = subtract($num1, $num2);
        break;
    case '*':
        $result = multiply($num1, $num2);
        break;
    case '/':
        $result = divide($num1, $num2);
        break;
    default:
        $result = "Invalid operator";
        break;
}

echo "Result: " . $result;
?>

<?php
  
  for ($i = 1; $i <= 100; $i++) {
      if ($i % 3 == 0 && $i % 5 == 0) {
          echo "FizzBuzz ";
      } elseif ($i % 3 == 0) {
          echo "Fizz ";
      } elseif ($i % 5 == 0) {
          echo "Buzz ";
      } else {
          echo "$i ";
      }
  }
  ?>


  