<?php
    /* 
        
        Here are 8 types of data that are important
        ------------------------------------------

        you can use 2 methods to determine the type of a variable.
        [1] gettype($variable_Name)
        [2] var_dump($variable_Name)

        --> the output of these methods are different. 
            gettype just returns the type of the variable
            var_dump return the type + the number of characters in that variable if the variable is a string

    */

    // 1- String
    $var1 = "I am a string type";
    echo gettype($var1) . '<br/>';
    // echo var_dump($var);
    

    // 2- Integer
    $var2 = 90;
    echo var_dump($var2) . '<br/>';


    // 3- Boolean
    $var3 = TRUE;
    echo var_dump($var3) . '<br/>';

    // 4- Floating point aka Double
    $var4 = 5.40;
    echo gettype($var4) . '<br/>';
    echo var_dump($var4) . '<br/>';

    // 5- array
    $var5 = array('1' => 'a', '2' => 'b');
    echo gettype($var5) . '<br/>';


    // 6- NUll
    $var6 = NULL;
    echo gettype($var6) . '<br/>';


    // 7- object
    // the object can be found in the OOP concept 

    // 8- resource
    // this is when we use a resource for example, if we connect to a database or if we want to open a file in the server
    $var8 = fopen('comments.php', 'r');
    echo gettype($var8);





    