<?php 

    function hello($a) {
        if ($a > 1) {
            $msg = 'hello once';
        } else {
            $msg = 'hello zero';
        }

        return $msg;
    }
    
    echo hello(2);
