<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $car = htmlspecialchars(trim($_POST['car']));
    $inquiry = htmlspecialchars($_POST['inquiry']);

    if (empty($name) || empty($email) || empty($phone) || empty($inquiry)) {
        echo "<h2>Error: Please fill in all required fields.</h2>";
        echo "<a href='contact.php'>Go back to the contact form</a>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h2>Error: Invalid email format.</h2>";
        echo "<a href='contact.php'>Go back to the contact form</a>";
        exit;
    }

    echo "<h2>Thank you, $name!</h2>";
    echo "<p>We have received your inquiry about ";
    if (!empty($car)) {
        echo "the $car.";
    } else {
        echo "our services.";
    }
    echo " Our team will contact you shortly at $phone or via email at $email.</p>";

}
else {
    
    echo "<h2>Error: Form submission failed. Please try again.</h2>";
    echo "<a href='contact.php'>Go back to the contact form</a>";
}
?>
