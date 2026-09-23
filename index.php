<?php

// Task 1: Simple Budget Calculator
echo "<h2>1. Simple Budget Calculator</h2>";

$budget = 5000;
$groceries = 1500;
$transport = 800;
$entertainment = 500;

$remainingBalance = $budget - $groceries - $transport - $entertainment;

echo "Remaining balance: R" . number_format($remainingBalance, 2);

// Task 2: Age Category Check
echo "<h2>2. Age Category Check</h2>";

$age = 16;

if ($age < 12) {
    echo "Child";
} elseif ($age >= 13 && $age <= 17) {
    echo "Teen";
} elseif ($age >= 18 && $age <= 64) {
    echo "Adult";
} elseif ($age >= 65) {
    echo "Senior";
} else {
    echo "Age category not specified.";
}

// Task 3: Simple Interest Calculator
echo "<h2>3. Simple Interest Calculator</h2>";

$principal = 10000;
$rate = 5 / 100;
$time = 3;

$interest = $principal * $rate * $time;
$totalAmount = $principal + $interest;

echo "Simple Interest: R" . number_format($interest, 2) . "<br>";
echo "Total Amount: R" . number_format($totalAmount, 2);

// Task 4: Logical Operator Practice
echo "<h2>4. Logical Operator Practice</h2>";

$age = 25;
$isRegistered = true;

if ($age >= 18 && $age <= 35 && $isRegistered) {
    echo "Eligible to vote.";
} else {
    echo "Not eligible to vote.";
}

// Task 5: Dynamic discount
echo "<h2>5. Dynamic Discount</h2>";

$purchaseAmount = 750;

if ($purchaseAmount > 1000) {
    $discountRate = 0.10;
} elseif ($purchaseAmount >= 500 && $purchaseAmount <= 999) {
    $discountRate = 0.05;
} elseif ($purchaseAmount >= 250 && $purchaseAmount <= 499) {
    $discountRate = 0.02;
} else {
    $discountRate = 0;
}

$discount = $purchaseAmount * $discountRate;
$finalAmount = $purchaseAmount - $discount;

echo "Purchase Amount: R" . number_format($purchaseAmount, 2) . "<br>";
echo "Discount: R" . number_format($discount, 2) . "<br>";
echo "Final Amount: R" . number_format($finalAmount, 2);