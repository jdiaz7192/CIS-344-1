 <!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us - Juan's Car Dealership</title>
 <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Contact Juan's Car Dealership</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="inventory.php">Inventory</a>
            <a href="services.php">Services</a>
            <a href="contact.php">Contact Us</a>
            <a href="about.php">About Us</a>
        </nav>
    </header>
 
    <main>
        <h2>Get in Touch</h2>
        <form method="post" action="processorder.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
            <label for="car">Preferred Car:</label>
            <input type="text" id="car" name="car">
            <label for="inquiry">Inquiry Type:</label
