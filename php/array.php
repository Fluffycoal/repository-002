<h1>Arrays</h1>
<?php
    //Indexxed or numeric arrays
    $fnames = ["Alex","Peter","James"];
    print_r($fnames);

    echo '<br>';

    $colors = array("black","Green","Yellow"
    ,"white","Red","Blue");

?>
<pre>
<?php print_r($colors); ?>
</pre>
<?php Print $fnames[1]; ?>
<?php
//Assotiative Arrays

$user = [
    "Fullname" => "Alex Okama",
    "email" => "AOkama@yahoo.com",
    "Phone" => "+254 785555"
];
?>
<pre>
    <?php print_r($user);?>
</pre>

<?php
//multidimensional Arrays

$user_details = [
    "Director"=> array(
        "Fullname" => "Alex Okama",
        "email" => "AOkama@yahoo.com",
        "Phone" =>[
            "mobile" => "254 74947399",
            "work" => "254 715546456",
            "cell" => "254 715549656"
        ]
        ),
    "Manager"=> array(
        "Fullname" => "Peter Okama",
        "email" => "POkama@yahoo.com",
        "Phone" =>[
            "mobile" => "254 74947399",
            "work" => "254 756940328",
            "cell" => "254 746593758"
        ]
        ),
    "Secretary"=> array(
        "Fullname" => "Alex Okama",
        "email" => "AOkama@yahoo.com",
        "Phone" =>[
            "mobile" => "254 74947399",
            "work" => "254 756940328",
            "cell" => "254 746593758"
        ]
        ),
            
    ];
    print $user_details["Secretary"]["Phone"]["work"];

?>
<pre>
    <?php print_r($user_details); ?>
</pre>
<?php
$items = ["book","pen",456,45.5,"File54"];
?>

<pre>
    <?php var_dump($items);?>
</pre>

<?php
$age = [45, 42, 23];

    $user_age = array_combine($fnames, $age);

    $user_data = array_merge($fnames,$age);
    ?>

    <pre>
        <?php print_r($user_age); ?>
    </pre>