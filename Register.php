<?php
    include_once("templates/header.php");
    include_once("templates/nav.php");

?>

<body>
    <center>
        <h3>Register Here</h3>
        <form action="" method="">
            <table>
                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="user" placeholder="Enter name Here">
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="pass" placeholder="Enter password here">
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>
                        <input type="email" name="mail" placeholder="Enter email here">
                    </td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="gender"> Male
                        <input type="radio" name="gender">Female
                        <input type="radio" name="others">Others
                    </td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td>
                        <select>
                            <option selected>+254</option>
                            <option>+255</option>
                            <option>+256</option>
                        </select>
                        <input type="phone" name="mobile" maxlength="10">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="submit">
                    </td>
                    <td>
                        Already a Member?<a href="myaccount.html">Login Here</a>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>