<?php
    include_once("includes/db_connect.php");
    include_once("templates/header.php");
    include_once("templates/nav.php");

    if(isset($_POST["sign_up"])){
        $username =mysqli_real_escape_string($conn, addslashes( $_POST["username"]));
        $password = mysqli_real_escape_string($conn, addslashes($_POST["password"]));
        $email = mysqli_real_escape_string($conn, addslashes($_POST["email"]));
        $mobile = mysqli_real_escape_string($conn, addslashes($_POST["mobile"]));
        

        $insert_user = "INSERT INTO user(username, password, email,mobile  )
        VALUES ('$username', '$password', '$email', '$mobile')";

if ($conn->query($insert_user) === TRUE) {
    echo "New record inserted successfully";
    header("Location: Register.php");
    exit();
  } else {
    echo "Error: " . $insert_user. "<br>" . $conn->error;
  }
  
  $conn->close();
  }
?>

<body>
    <center>
        <h3>Register Here</h3>
        <form action="" method="post">
            <table3>
                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" placeholder="Enter name Here">
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="password" placeholder="Enter password here">
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>
                        <input type="email" name="email" placeholder="Enter email here">
                    </td>
                </tr>
                
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
                        <input type="submit" name="sign_up" value="Sign Up">
                    </td>
                    <td>
                        Already a Member?<a href="myaccount.php">Login Here</a>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>