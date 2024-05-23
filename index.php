<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delicious Bakery</title>

    <link rel="stylesheet" href="css/navStyle.css">
</head>
<body style="background-image: url(images/pastry/background.avif);"></body>
<div class="topnav">
    <a href="./">Home</a>
    <a href="about.html">About us</a>
    <a href="menu.html">Menu</a>
    <a href="contact.html">Contact Us</a>
    
    <div class="topnav-right">
        <a href="myaccount.html">Sign Up</a>
    </div>
</div>
<?php if (true){?>
    <header>
        <p style="
        font-size: larger;
        ">| Your one-stop destination for mouthwatering treats! |</p>
        <h1>Welcome to Delicious Bakery</h1>
        
    </header>
    <?php }?>
    <img src="images/pastry/Baker.jpg" width="20%"/> <img src="images/pastry/Queen cakes.jpg" width="20%"/>
    
    <section id="menu">
    <?php if (true){?>
        <h2>Our Menu</h2>
        <p>Explore our delectable range of pastries, cakes, and breads.</p>
        <!-- Add menu items and descriptions here -->
        <?php }?>
    </section>

    
    <section id="about">
        
        <h2>About Us</h2>
        <p>We are passionate bakers committed to delivering quality and flavor.</p>
        <!-- Add more details about your bakery -->

    </section>

    
    <section id="contact">
        <h2>Contact Us</h2>
        <p>Reach out to us for orders, inquiries, or just to say hello!</p>
        <!-- Include contact information and a contact form -->
    </section>

</body>
</html>