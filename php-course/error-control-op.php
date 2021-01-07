<?php 

    /* 

        Error Control operator [ @ ]
            - this operator is used to hide erros may appear on the browser for security issues 
            because errors on the browser show the path of the error in the server.

            - you can custamize the error message by using die() functions.
            
            syntax:
                @expression or die('message');
    
    */


    // the file.txt does not exists so an error should appear but when using @ the error won't
    // show up on browser but is logged on the server.
    $myFile = @fopen('file.txt', 'r') or die('the file is not found !!');