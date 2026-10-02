<?php
// 1. Different forms of if statement (if...else, elseif)

// 1(a). if...else - Even / Odd
$number = 123;

if ($number % 2 == 0) {
    echo "$number is Even Number<br>";
} else {
    echo "$number is Odd Number<br>";
}

// 1(b). if...else - Voting eligibility
$age = 20;

if ($age >= 18) {
    echo "You are eligible to vote.<br>";
} else {
    echo "You are too young to vote.<br>";
}

// 1(c). elseif - Grade
$score = 85;

if ($score >= 90) {
    echo "Grade: A<br>";
} elseif ($score >= 80) {
    echo "Grade: B<br>";
} elseif ($score >= 70) {
    echo "Grade: C<br>";
} else {
    echo "Grade: F<br>";
}
?>