<?php
    print "This is the first lesson";
    //displaying a sentence or a String

    print '<br>';

    //echo "Today is <span style ="color: #FF0040;" ></span> "Monday";

    print '<br>';

    print " 15 + 45";//This is a string

    print '<br>';
    
    
    print 15 + 45;//This will display the result of the operation

    //php will help us display content (time/space)
    print '<br>';

    print date('1');//Display the current week day

    print '<br>';

    print date('1',strtotime("tomorrow")); //Display week day of tommorrow

    print '<br>';

    print date('d/m/y');

    print '<br>';

    print date('js F Y,1', strtotime("+5 months"));

    print "<br>";

    print date('js F Y 1');


    print '<br>';

    //date_default_timezone_set("African/Nairobi");
    print "Today is: ".print date('1,F js Y')
    //print date('1, js F Y H:i:s:m');
?>