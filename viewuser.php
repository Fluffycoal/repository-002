<?php require_once("includes/db_connect.php"); 
 include_once ("templates/header.php"); 
 include_once ("templates/nav.php"); 
 

 if(isset($_GET["DelId"])){
  $DelId = mysqli_real_escape_string($conn, $_GET["DelId"]);

  $delete_user = "DELETE FROM user WHERE userid ='$DelId' LIMIT 1";

  if ($conn->query($delete_user) === TRUE) {
      header("Location: viewmessage.php");
  } else {
      echo "Error updating record: " . $conn->error;
  }
}

 ?>
 <div class = "banner">
    <h1>view User</h1>
 </div>
 <div class = "row">
   <div class = "content">

   <table class = "table table-stripped table-border" cellpadding ="border:3px" style = "border:1px solid !important;
           border-collapse:collapse;">
    <thead>
     <tr>
          <th>username</th>
          <th>password</th>
          <th>email	</th>
          <th>phone</th>
          
       </tr>
      </thead>
    <tbody>

   <?php

$select_messages = "SELECT * FROM user";
$sel_mes_res = $conn->query($select_messages);

if ($sel_mes_res->num_rows > 0) {
  // output data of each row
  while($sel_mes_row = $sel_mes_res->fetch_assoc()) {
  
?>
     <tr>
      <td><?php print $sel_mes_row ["username"]; ?> </td>
      <td><?php print $sel_mes_row ["password"]; ?></td>
      <td><?php print $sel_mes_row ["email"]; ?></td>
      <td><?php print $sel_mes_row ["mobile"]; ?></td>
      
      <td>
          <a href="edituser.php?username=<?php print $sel_mes_row["username"]; ?>">Edit</a>
           
          <a href="?DelId=<?php print $sel_mes_row["userid"]; ?>">Del</a> 
        </td>
    </tr>
  
<?php
}
}else {
  echo "0 results";
}

?>
  