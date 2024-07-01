<?php
    include_once("templates/header.php");
    include_once("templates/nav.php");

?>


<div class="container">
    <form>
    <h1 style = "text-align:center;
    color: rgb(51, 48, 50);
    text-transform: uppercase;
    text-decoration: wavy;
    line-height: 5px;">Contact Us</h1>
    <input type="text" id="firstname" placeholder="First Name" required>
    <input type="text" id="lasttname" placeholder="last Name" required>
    <input type="email" id="firstname" placeholder="Email" required>
    <input type="text" id="mobile" placeholder="Mobile" required>
    <h4>Type Your Message Here.....</h4>
    <textarea required></textarea>
    <input type="submit" value="send" id="button"/>
</form>
</div>

    
</body>
</html>