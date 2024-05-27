<h1>Loops</h1>

<h4>While loop</h4>
<?php
//While loop
$init = 10;
While($init <7){
    print $init . '<br>';
    $init++;

}
?>

<h4>Do-While-Loop</h4>
<?php
    //do-While loop
    $i = 110;
    do{
        print $i . '<br>';
        $i++;
    }while($i < 16);
?>

<h4>for loop</h4>
<?php
    //for loop
    for($s=45; $s<55; $s++){
        print $s. '<br>';
        $s++;
    }
    ?>

    <h4>foreach</h4>
    <?php
        $months = ["January", "Febuary","March", "April", 
        "May", "June", "July","August"," September",
        "October","november", "December"];

        //foreach($months AS $months){
          //  print $months."<br>";
        //}
?>
<Form action="">
    <select name="" id="">
        <option value="">---months---</option>
        <?php
        foreach($months AS $months){
            echo "<option value =''>$months</option>";
        }
        ?>
    </select>
    <select name="" id="">
    <option value="">---Years---</option>
        <?php
        $y = 2015;
        while($y <2030){
            print "<option value =''>$y</option>";
            $y++;
        }
        ?>
     </select>
</Form>
