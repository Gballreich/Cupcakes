<?php
$userInput = isset($_POST);
if($userInput){
    $name = $_POST['name'];
    $flavors = $_POST['flavors'];
    $cost = 0;

    echo"Thank you," . $name . ", for your order";
    echo"<br>";
    echo"Order Summary";
    echo"<br>";
    foreach($flavors as $flavor){
        print("<li>" . $flavor . "<br>");
        $cost += 3.50;
    }
    echo"<br>";
    echo"Order Total: $" .$cost;
}
