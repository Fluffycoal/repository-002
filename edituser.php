<?php
    include_once("includes/db_connect.php");
    include_once("templates/header.php");
    include_once("templates/nav.php");

    $username=$_GET["username"];
$spot_msg = "SELECT * FROM user WHERE username= '$username' LIMIT 1 ";
$spot_msg_res = $conn->query($spot_msg);
$spot_msg_rows = $spot_msg_res ->fetch_assoc();

    if(isset($_POST["Edit"])){
        $username =mysqli_real_escape_string($conn, addslashes( $_POST["username"]));
        $password = mysqli_real_escape_string($conn, addslashes($_POST["password"]));
        $email = mysqli_real_escape_string($conn, addslashes($_POST["email"]));
        $mobile = mysqli_real_escape_string($conn, addslashes($_POST["mobile"]));

        $update_user = "UPDATE user SET  password='$password',email='$email ' ,mobile='$mobile' WHERE username='$username' LIMIT 1";
        

        
if ($conn->query($update_user) === TRUE) {
    echo "New record inserted successfully";
    header("Location: view.php");
    exit();
  } else {
    echo "Error: " . $update_user. "<br>" . $conn->error;
  }
  
  $conn->close();
  }
?>

<body>
    <center>
        <h3>Edit user</h3>
        <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off" class="contact_us">
            <table3>
                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" placeholder="Enter name Here" required value = "<?php print $spot_msg_rows["username"];?>"><br><br>
                        ">
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="password" placeholder="Enter password here" required value = "<?php print $sel_mes_row["password"];?>">
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>
                        <input type="email" name="email" placeholder="Enter email here" required value = "<?php print $spot_msg_rows["email"];?>">
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
                        <input type="submit" name="edit" value="EDIT">
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