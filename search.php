
<?php
    include_once("includes/db_connect.php");

    $output='';

    if(isset($_POST['search'])){
        $searchq = $_POST['search'];
        $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);


        $query = mysqli_query($conn,"SELECT * FROM students WHERE Student_Number LIKE '%$searchq%' OR fullname LIKE '%$searchq%'") or die("Could no search");
        $count = mysqli_num_rows($query);
        if($count == 0){
            $output = 'There was no search results';    
        }else{
            while($row = mysqli_fetch_array($query)){
                $Student_Number= $row['Student_Number'];
                $fullname = $row['fullname'];
                $No = $row['No'];

                $output .= '<div>'.$Student_Number.' '.$fullname.'</div>';
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <form action="search.php" method="post">
        <input type="text" name ="search" placeholder="Search for members..."/>
        <input type="submit" value=">>"/>

    </form>
    <?php echo $output; ?>
    
</body>
</html>