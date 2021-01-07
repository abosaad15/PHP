<?php

    /* 
        There are three types pf arryas :

        [ 1 ] Indexed array
            syntax:
                array(value1, value2, value3, ..... );

                ** value can be any type **

        --------------------------------------------------------

        [ 2 ] Associative array
            syntax:
                array(key1 => value, key2 => value, ..... )

                ** Key can only be integers or strings ** 
                ** Keys must be unique **
        
        ---------------------------------------------------------

        [ 3 ] Multidimensional array
            syntax: 
                array( array('you can use indexed / associative arrays') , ...... )

    */


    /* Notes taken from today's lesson */
    /*
        "10" is same as integer 10. PHP looks at an integer in a string format as an integer not a string.
        except for floating point numbers. "10.6" is not same as 10.6.
        "10.6" is a string in this case.
     */


    // Example for Indexed Array
    echo 'Example for Indexed Array <br>'; 
    $colors = array('White', 'Blue', 'Black', 'Red', 'Green');
    echo '<pre>';
    print_r($colors);
    echo '</pre>';



    // Extra stuff - print the count of the array 
    echo 'Extra stuff - print the count of the array <br>';
    echo 'count: ' . count($colors) . '<br> <br>';



    // Example for Associative array + multi-dimensional 
    echo 'Example for Associative + Multi-Dimensional arrays <br>';
    $courses = array('Backend' => array('PHP', 'JAVA', 'NodeJS'), 'Frontend' => array('HTML5', 'CSS3', 'React', 'Javascript'));
    echo '<pre>';
    print_r ($courses);
    echo '</pre>';
