<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <style type="text/css">
        input[type="submit"]{
            cursor:pointer;
        }
    </style>
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
    <header>
    <h1 style="text-align: center;
    color: rgb(6, 2, 2);
    font-size: large;">My Account
    </h1>
    <form action="login.php" method="post">
        <Table align="center">
            <tr>
                <td>Username: </td>
                <td>
                    <input type="text" name="user">
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name=""></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="login">
                </td>
                <td>
                    Not yet a Member?<a href="Register.html">Register</a>
                </td>
            </tr>
        </Table>
    </form>
    </header>
</body>
</html>