<?php

// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
declare(strict_types=1);

// We are going to use session variables so we need to enable sessions
session_start();

// Use this function when you need to need an overview of these variables
function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}
whatIsHappening();
// ok TODO: provide some products (you may overwrite the example)
$products = [
    ['name' => 'Hugo', 'price' => 5],
    ['name' => 'Martini', 'price' => 7],
    ['name' => 'Margarita', 'price' => 7],
    ['name' => 'Manhattan', 'price' => 9],
];
//in POST see which items have been selected, need the sum of their price
$totalValue = 0;

function validate()
{
    // This function will send a list of invalid fields back
    return [];
}

function handleForm()
{
    // TODO: form related tasks (step 1)

    // Validation (step 2)
    $invalidFields = validate();
    if (!empty($invalidFields)) {
        // TODO: handle errors
    } else {
        // TODO: handle successful submission
    }
}


// TODO: replace this if by an actual check
// $formSubmitted = false;
if (!empty($_POST) ) {
    
    
    $choices = $_POST["products"];
    foreach ($choices as $index => $valueOfIndex){
        echo ($products[$index]["price"]);
       $totalValue += $products[$index]["price"];
    }
    
    // handleForm();
}
require 'form-view.php';