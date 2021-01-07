<?php

    /* 
        Search Methods :

        [ 1 ] in_array(searchFor, array, type-sensitive)
        type-sensitive default value is false

        ---------------------------------------------
        [ 2 ] array_search(searchFor, array, type-sensitive)
        this method return the index of the searchFor value if it exists in the array

    */

    echo '<br>' . '------------- Search Methods Implementation ---------------' . '<br>';

    $arr = array('p', 'h', 'p', 7);
    if (in_array(7, $arr)) {
        echo 'yes it in the array' . '<br>';
    }

    if (in_array('p', $arr)) {
        echo 'yes it in the array' . '<br>';
    }

    $index = array_search('h', $arr);
    echo 'The index : ' . $index . '<br>';
    echo 'The value at the index : ' . $arr[$index] . '<br>';


    echo '<br>' . '------------- Add Methods Implementation ---------------' . '<br>';
    /* 
        Add items Methods :
        
        [ 1 ] array_push(array, value1, value2, ...)
        it adds at the end of the array
        ---------------------------------------------
        [ 2 ] array_unshift(array, value1, value2, ...)
        it adds at the beginning of the array

    */

    // before using array_push method
    $colors = array('blue', 'green', 'yellow');
    echo '<pre>';
    print_r($colors);
    echo '</pre>';
    
    // after using array_push method
    array_push($colors, 'red');
    echo '<pre>';
    print_r($colors);
    echo '</pre>';



    // before using array_unshift method
    $cities = array('Alnamas', 'Abha', 'Alwadeayn');
    echo '<pre>';
    print_r($cities);
    echo '</pre>';
        
    // after using array_unshift method
    array_unshift($cities, 'Makkah');
    echo '<pre>';
    print_r($cities);
    echo '</pre>';


    echo '<br>' . '------------- Remove Methods Implementation ---------------' . '<br>';
    /* 
        Remove items Methods :
        
        [ 1 ] array_pop(array, value1, value2, ...)
        it removes from the end of the array
        ---------------------------------------------
        [ 2 ] array_shift(array, value1, value2, ...)
        it removes from the beginning of the array

    */

    // before using array_pop method
    $colors = array('blue', 'green', 'yellow');
    echo '<pre>';
    print_r($colors);
    echo '</pre>';
    
    // after using array_pop method
    array_pop($colors);
    echo '<pre>';
    print_r($colors);
    echo '</pre>';



    // before using array_shift method
    $cities = array('Alwadeayn','Alnamas', 'Abha');
    echo '<pre>';
    print_r($cities);
    echo '</pre>';
        
    // after using array_shift method
    array_shift($cities);
    echo '<pre>';
    print_r($cities);
    echo '</pre>';



    echo '<br>' . '------------- Sort Methods of Indexed arrays Implementation ---------------' . '<br>';
    /* 
        Sort Methods :
        
        [ 1 ] sort(array, sorting type)
        ---------------------------------------------
        [ 2 ] rsort(array, sorting type)

    */

    // before using sort() method
    $colors = array('red', 'green', 'yellow');
    echo '<pre>';
    print_r($colors);
    echo '</pre>';

    // after using sort() method
    sort($colors);
    echo '<pre>';
    print_r($colors);
    echo '</pre>';



    // before using rsort() method
    $cities = array('Jeddah','Riyadh', 'Abha');
    echo '<pre>';
    print_r($cities);
    echo '</pre>';
        
    // after using rsort() method
    rsort($cities);
    echo '<pre>';
    print_r($cities);
    echo '</pre>';



    echo '<br>' . '------------- Sort Methods of Associative arrays Implementation ---------------' . '<br>';
    /* 
        Sort Methods :
        
        ** just add letter a to the function name as shown below **
        ** it sorts the values not the keys **

        [ 1 ] asort(array, sorting type)
        ---------------------------------------------
        [ 2 ] arsort(array, sorting type)

    */

    // before using asort() method
    $colors = array('R' => 'red', 'G' => 'green', 'Y' => 'yellow');
    echo '<pre>';
    print_r($colors);
    echo '</pre>';

    // after using asort() method
    asort($colors);
    echo '<pre>';
    print_r($colors);
    echo '</pre>';



    // before using rsort() method
    $cities = array('JED' => 'Jeddah', 'RYD' => 'Riyadh', 'AB' => 'Abha');
    echo '<pre>';
    print_r($cities);
    echo '</pre>';
        
    // after using rsort() method
    arsort($cities);
    echo '<pre>';
    print_r($cities);
    echo '</pre>';



    /* 
    
        To Sort the associative array based on the keys then replace the letter a in asort() to ksort().
        arsort() to krsort().

    */
    
