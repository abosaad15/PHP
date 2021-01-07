<?php

    /* 
        syntax : define(Name, Value, Case-insensitive)
        --> case-insensitive by default is false.
    */

    define('CONSTANT_VAR', 'I am a constant String variable, I can not be redefined again');
    echo CONSTANT_VAR;

    // this will results in an error because i am redefining the constant.
    define('CONSTANT_VAR', 'I am a constant String variable, I can not be redefined again');




    /* 
        There are constants already in PHP called magic constants.
        examples are below ..
    */

    // prints the path of the current file.
    echo __FILE__;
    echo '<br>';


    // prints the max int value php supports.
    echo PHP_INT_MAX;
    echo '<br>';


    // print the directory of the current file.
    echo __DIR__;
    echo '<br>';


    // print the current line number.
    echo __LINE__;
    echo '<br>';