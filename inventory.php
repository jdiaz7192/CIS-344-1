<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory - Juan's Car Dealership</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Juan's Car Dealership - Inventory</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="inventory.php">Inventory</a>
            <a href="services.php">Services</a>
            <a href="contact.php">Contact Us</a>
            <a href="about.php">About Us</a>
        </nav>
    </header>

    <main>
        <h2>Available Cars</h2>
        <form method="get" action="inventory.php">
            <label for="make">Car Make:</label>
            <select name="make" id="make">
                <option value="all">All</option>
                <option value="honda">Honda</option>
                <option value="toyota">Toyota</option>
            </select>
            <label for="price">Price Range:</label>
            <select name="price" id="price">
                <option value="all">All</option>
                <option value="0-10000">Under $10,000</option>
                <option value="10000-20000">$10,000 - $20,000</option>
            </select>
            <input type="submit" value="Filter">
        </form>

        <section id="car-list">
            <article>
                <img src="images/car1.jpg" alt="2024 Honda Civic">
                <h3>2024 Honda Civic</h3>
                <p>Price: $20,000</p>
            </article>
            <article>
                <img src="images/car2.jpg" alt="2023 Toyota Camry">
                <h3>2023 Toyota Camry</h3>
                <p>Price: $25,000</p>
            </article>
        </section>
    </main>

    <footer>
        <p>Visit us at 123 Car St. or call 555-1234.</p>
    </footer>
</body>
</html>
